<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\View\View;

class StoreController extends Controller
{
    public function home(Request $request): View
    {
        $locale = $this->resolveLocale($request);

        $categories = Category::query()
            ->where('is_active', true)
            ->orderBy('sort_order')
            ->take(4)
            ->get();

        $featuredProducts = Product::query()
            ->where('is_active', true)
            ->with('category')
            ->latest('id')
            ->take(8)
            ->get();

        $stats = $this->storeStats();

        return view('store.index', compact('categories', 'featuredProducts', 'stats', 'locale'));
    }

    public function categories(Request $request): View
    {
        $locale = $this->resolveLocale($request);

        $categories = Category::query()
            ->where('is_active', true)
            ->withCount(['products' => fn ($query) => $query->where('is_active', true)])
            ->orderBy('sort_order')
            ->paginate(9)
            ->withQueryString();

        $stats = $this->storeStats();

        return view('store.categories', compact('categories', 'stats', 'locale'));
    }

    public function categoryShow(Request $request, Category $category): View
    {
        $locale = $this->resolveLocale($request);

        $products = Product::query()
            ->where('is_active', true)
            ->where('category_id', $category->id)
            ->orderBy('id', 'desc')
            ->paginate(12)
            ->withQueryString();

        return view('store.category-show', [
            'category' => $category,
            'products' => $products,
            'stats' => $this->storeStats(),
            'locale' => $locale,
        ]);
    }

    public function shop(Request $request): View
    {
        $locale = $this->resolveLocale($request);

        $categories = Category::query()
            ->where('is_active', true)
            ->withCount(['products' => fn ($query) => $query->where('is_active', true)])
            ->orderBy('sort_order')
            ->get();

        $productsQuery = Product::query()
            ->where('is_active', true)
            ->with('category')
            ->when($request->filled('category'), fn ($query) => $query->whereHas('category', fn ($q) => $q->where('slug', $request->string('category')->toString())))
            ->when($request->filled('q'), function ($query) use ($request) {
                $search = trim((string) $request->string('q'));
                $query->where(function ($inner) use ($search) {
                    $inner->where('name', 'like', "%{$search}%")
                        ->orWhere('name_ar', 'like', "%{$search}%")
                        ->orWhere('name_en', 'like', "%{$search}%")
                        ->orWhere('description', 'like', "%{$search}%");
                });
            })
            ->orderBy('id', 'desc');

        $products = $productsQuery->paginate(12)->withQueryString();

        return view('store.shop', [
            'categories' => $categories,
            'products' => $products,
            'stats' => $this->storeStats(),
            'locale' => $locale,
        ]);
    }

    public function productShow(Request $request, Product $product): View
    {
        $locale = $this->resolveLocale($request);

        $relatedProducts = Product::query()
            ->where('is_active', true)
            ->where('category_id', $product->category_id)
            ->where('id', '!=', $product->id)
            ->latest('id')
            ->take(4)
            ->get();

        return view('store.product-show', [
            'product' => $product,
            'relatedProducts' => $relatedProducts,
            'stats' => $this->storeStats(),
            'locale' => $locale,
        ]);
    }

    public function cart(Request $request): View
    {
        $locale = $this->resolveLocale($request);
        $cart = $this->buildCartData($request);

        return view('store.cart', [
            'cartItems' => $cart['items'],
            'subtotal' => $cart['subtotal'],
            'locale' => $locale,
        ]);
    }

    public function checkout(Request $request): View
    {
        $locale = $this->resolveLocale($request);
        $cart = $this->buildCartData($request);

        return view('store.chackout', [
            'cartItems' => $cart['items'],
            'subtotal' => $cart['subtotal'],
            'locale' => $locale,
        ]);
    }

    public function contact(Request $request): View
    {
        $locale = $this->resolveLocale($request);

        return view('store.contact', compact('locale'));
    }

    public function addToCart(Request $request, Product $product): RedirectResponse
    {
        $quantity = max(1, (int) $request->input('quantity', 1));
        $cart = $request->session()->get('cart', []);
        $cart[$product->id] = ($cart[$product->id] ?? 0) + $quantity;
        $request->session()->put('cart', $cart);

        return back()->with('success', __('ui.added_to_cart'));
    }

    public function updateCart(Request $request, Product $product): RedirectResponse
    {
        $quantity = max(0, (int) $request->input('quantity', 0));
        $cart = $request->session()->get('cart', []);

        if ($quantity === 0) {
            unset($cart[$product->id]);
        } else {
            $cart[$product->id] = $quantity;
        }

        $request->session()->put('cart', $cart);

        return back()->with('success', __('ui.cart_updated'));
    }

    public function removeFromCart(Request $request, Product $product): RedirectResponse
    {
        $cart = $request->session()->get('cart', []);
        unset($cart[$product->id]);
        $request->session()->put('cart', $cart);

        return back()->with('success', __('ui.item_removed'));
    }

    private function resolveLocale(Request $request): string
    {
        if ($request->has('lang') && in_array($request->string('lang')->toString(), ['ar', 'en'], true)) {
            $request->session()->put('locale', $request->string('lang')->toString());
        }

        $locale = $request->session()->get('locale', 'ar');
        App::setLocale($locale);

        return $locale;
    }

    private function buildCartData(Request $request): array
    {
        $cart = $request->session()->get('cart', []);
        $productIds = array_keys($cart);

        if (empty($productIds)) {
            return ['items' => collect(), 'subtotal' => 0.0];
        }

        $products = Product::query()->whereIn('id', $productIds)->get()->keyBy('id');

        $items = collect($cart)
            ->map(function ($quantity, $productId) use ($products) {
                $product = $products->get((int) $productId);
                if (! $product) {
                    return null;
                }

                $unitPrice = $product->displayPrice();

                return [
                    'product' => $product,
                    'quantity' => (int) $quantity,
                    'unit_price' => $unitPrice,
                    'line_total' => $unitPrice * (int) $quantity,
                ];
            })
            ->filter()
            ->values();

        $subtotal = $items->sum('line_total');

        return ['items' => $items, 'subtotal' => $subtotal];
    }

    private function storeStats(): array
    {
        return [
            'products_count' => Product::query()->where('is_active', true)->count(),
            'categories_count' => Category::query()->where('is_active', true)->count(),
        ];
    }
}
