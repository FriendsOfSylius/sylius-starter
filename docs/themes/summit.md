---
title: Summit theme
description: A dynamic outdoor and adventure look in forest green and mineral grey, with signal orange trail markers and condensed capitals.
sidebar:
  order: 14
---

Summit is built for outdoor and adventure shops selling hiking, trail and mountaineering gear: packs,
technical clothing, footwear and accessories. Where Cellar is quiet and warm, Summit is dynamic: condensed
capitals like trailhead signs, forest green and mineral grey, signal orange trail markers, a full-bleed
mountain hero, and homepage blocks that put forward what Sylius does well for gear: variants (colours and
sizes), technical attributes, associated products and navigation by activity.

**Desktop** (1440 px)

| Scheme | Homepage | Product page | Cart |
|---|---|---|---|
| Light | ![Summit storefront homepage on desktop, light scheme](../images/summit-homepage-normal-light.webp) | ![Product page in Summit on desktop, light scheme](../images/summit-product-normal-light.webp) | ![Summit cart containing a product on desktop, light scheme](../images/summit-cart-normal-light.webp) |
| Dark | ![Summit storefront homepage on desktop, dark scheme](../images/summit-homepage-normal-dark.webp) | ![Product page in Summit on desktop, dark scheme](../images/summit-product-normal-dark.webp) | ![Summit cart containing a product on desktop, dark scheme](../images/summit-cart-normal-dark.webp) |

**Wide screen** (2560 px)

| Scheme | Homepage | Product page | Cart |
|---|---|---|---|
| Light | ![Summit storefront homepage on a wide screen, light scheme](../images/summit-homepage-wide-light.webp) | ![Product page in Summit on a wide screen, light scheme](../images/summit-product-wide-light.webp) | ![Summit cart containing a product on a wide screen, light scheme](../images/summit-cart-wide-light.webp) |
| Dark | ![Summit storefront homepage on a wide screen, dark scheme](../images/summit-homepage-wide-dark.webp) | ![Product page in Summit on a wide screen, dark scheme](../images/summit-product-wide-dark.webp) | ![Summit cart containing a product on a wide screen, dark scheme](../images/summit-cart-wide-dark.webp) |

**Mobile** (390 px)

| Scheme | Homepage | Product page | Cart |
|---|---|---|---|
| Light | ![Summit storefront homepage on mobile, light scheme](../images/summit-homepage-mobile-light.webp) | ![Product page in Summit on mobile, light scheme](../images/summit-product-mobile-light.webp) | ![Summit cart containing a product on mobile, light scheme](../images/summit-cart-mobile-light.webp) |
| Dark | ![Summit storefront homepage on mobile, dark scheme](../images/summit-homepage-mobile-dark.webp) | ![Product page in Summit on mobile, dark scheme](../images/summit-product-mobile-dark.webp) | ![Summit cart containing a product on mobile, dark scheme](../images/summit-cart-mobile-dark.webp) |

- **Palette** — forest (`#0E1F16`, `#1F4630`) and moss (`#3C6B47`) on mineral grey (`#F1F2EF`, `#E4E7E2`) and
  white, with signal orange (`#F2661C`) for calls to action (ink text on it, 6.2:1), markers and accents, a
  darker orange (`#B4440B`) for orange text and focus rings, and a deep green (`#1F6A3A`) for links.
- **Dark scheme** — a night bivouac: pine-black ground (page `#0C120F`, surfaces `#141C17`), mineral grey type,
  a brighter signal orange (`#FF7A33`), lichen-green links (`#8FD6A3`), and the hero range under the stars.
- **Typography** — *Barlow Condensed* (SIL Open Font License, 600, 700, 800 and 700 italic, shipped in
  `assets/shop/fonts/`) in capitals for headings, product names, figures, buttons and navigation, with
  orange italic accents; *Inter* (already shipped by the Sylius shop) for body copy.
- **Components** — signal orange buttons with a cut corner like a trail tag, outlined ink buttons that fill on
  hover; product cards with the photo edge to edge, a zoom and an orange corner tag on hover, an orange rule
  under the card, the name in condensed capitals and the price in bold; an ink cart button with an orange
  counter; eyebrows opened by a trail blaze (the two painted bars that mark a hiking path).
- **Header** — a signal orange top bar with the delivery and returns promises and the locale / currency
  switchers in ink, then a peak badge and the *Summit* wordmark, and category navigation in condensed
  capitals over a thick orange bar.
- **Homepage** — a full-bleed hero: a mountain range at first light (snow caps, forested shoulders, a trail
  waymarked in orange, contour lines), condensed capitals ending in orange italic, two calls to action and a
  **trail report** card (col, altitude, temperature, wind, daylight, advice). The hero closes on the
  **elevation profile** of a route, drawn in orange, over four house figures. Then come **shop by activity**
  (`theme_activities` hookable: hiking, trail running, mountaineering, climbing, bivouac, snow, each with a
  pictogram, its terrain and its gear families), the eight latest products, and the **gear spotlight**
  (`theme_gear` hookable): a technical backpack with numbered call-outs, its spec sheet, its colours and sizes,
  and the gear that goes with it. The deals and new collection blocks are hidden.
- **Footer** — forest, drawn with contour lines under an orange rule, with three house services (field
  advice, 60-day returns, repair workshop) linking to the contact page and the customer account, the
  wordmark, the Sylius links and the warranty notice.
- **Product page** — the main picture stands whole on a mineral grey tile; the attributes table reads like a
  spec sheet, with condensed labels and zebra rows; the price sits directly below the product name.
- **Checkout** — the checkout header uses the Summit wordmark and responsive category navigation, the current
  step is ruled in orange.
- **Translations** — every Summit-specific text lives in its own `summit` translation domain
  (`translations/summit.en.yaml` and `summit.fr.yaml`).
- **Accessibility** — orange focus rings dark enough for 3:1, ink text on the orange buttons and top bar, a
  shaded copy side on the hero landscape, text alternatives for the backpack illustration and the colour
  swatches, and no motion for visitors who prefer reduced motion.

The activity tiles and the gear spotlight link to the latest products: point them at your activity taxons
and a real product in `templates/shop/homepage/activities.html.twig` and `gear.html.twig`.

Install it with:

```bash
castor sylius:theme:setup summit
```
