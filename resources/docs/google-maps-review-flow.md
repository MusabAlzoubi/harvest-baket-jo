# Google Maps Review Flow (Recommended)

## What is technically possible
- Show latest public Google reviews on the website using Place Details API.
- Send users to official Google Write Review link.
- Track clicks/events in GA4 for review CTA and map opens.

## What is NOT possible
- Posting a new Google Maps review directly from your site on behalf of users.

## Suggested flow
1. Customer completes order.
2. Send WhatsApp follow-up with direct write-review link.
3. User writes the review on Google.
4. Site displays recent reviews automatically from Places API cache.

## Required env values
- `GOOGLE_MAPS_PLACE_ID`
- `GOOGLE_MAPS_API_KEY`
- `GOOGLE_MAPS_REVIEW_URL`
- `GOOGLE_ANALYTICS_ID`
