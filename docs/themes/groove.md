---
title: Groove theme
description: An independent record store look in black and poster paper, with saturated sleeve colours, squeezed expressive headings and records that slide out of their sleeves.
sidebar:
  order: 15
---

Groove is built for record stores selling vinyl, turntables, accessories and limited editions. Where Summit is
photographic, Groove is graphic: black bands ringed with record grooves, flat cover art in hot pink, acid yellow
and electric blue, and squeezed, heavy headings like the type of a sleeve. Every product is a sleeve with its
record tucked behind it. Its homepage puts forward what Sylius does well for a record shop: genres as taxons,
new releases, limited editions with their pressing details as attributes, vinyl colours as variants and the
gear to play them as associations.

**Desktop** (1440 px)

| Scheme | Homepage | Product page | Cart |
|---|---|---|---|
| Light | ![Groove storefront homepage on desktop, light scheme](../images/groove-homepage-normal-light.webp) | ![Product page in Groove on desktop, light scheme](../images/groove-product-normal-light.webp) | ![Groove cart containing a product on desktop, light scheme](../images/groove-cart-normal-light.webp) |
| Dark | ![Groove storefront homepage on desktop, dark scheme](../images/groove-homepage-normal-dark.webp) | ![Product page in Groove on desktop, dark scheme](../images/groove-product-normal-dark.webp) | ![Groove cart containing a product on desktop, dark scheme](../images/groove-cart-normal-dark.webp) |

**Wide screen** (2560 px)

| Scheme | Homepage | Product page | Cart |
|---|---|---|---|
| Light | ![Groove storefront homepage on a wide screen, light scheme](../images/groove-homepage-wide-light.webp) | ![Product page in Groove on a wide screen, light scheme](../images/groove-product-wide-light.webp) | ![Groove cart containing a product on a wide screen, light scheme](../images/groove-cart-wide-light.webp) |
| Dark | ![Groove storefront homepage on a wide screen, dark scheme](../images/groove-homepage-wide-dark.webp) | ![Product page in Groove on a wide screen, dark scheme](../images/groove-product-wide-dark.webp) | ![Groove cart containing a product on a wide screen, dark scheme](../images/groove-cart-wide-dark.webp) |

**Mobile** (390 px)

| Scheme | Homepage | Product page | Cart |
|---|---|---|---|
| Light | ![Groove storefront homepage on mobile, light scheme](../images/groove-homepage-mobile-light.webp) | ![Product page in Groove on mobile, light scheme](../images/groove-product-mobile-light.webp) | ![Groove cart containing a product on mobile, light scheme](../images/groove-cart-mobile-light.webp) |
| Dark | ![Groove storefront homepage on mobile, dark scheme](../images/groove-homepage-mobile-dark.webp) | ![Product page in Groove on mobile, dark scheme](../images/groove-product-mobile-dark.webp) | ![Groove cart containing a product on mobile, dark scheme](../images/groove-cart-mobile-dark.webp) |

- **Palette** — black wax (`#0B0B0D`) on poster paper (`#F4F1E9`, `#E8E4D9`) and white, with the sleeve colours
  hot pink (`#FF2E7E`), acid yellow (`#FFE14D`), electric blue (`#3D5AFE`), tangerine (`#FF6B1A`) and mint
  (`#18D6A0`). Hot pink fills the main call to action (ink text on it, 5.6:1) and turns acid yellow on hover; a
  deep magenta (`#C1005E`) for links and focus rings, an electric blue (`#2B3FD4`) as second text accent.
- **Dark scheme** — the record shop after closing time: black page (`#0B0B0D`, surfaces `#151518`), warm paper
  type, neon pink links (`#FF7DB6`), acid yellow focus rings, and hot pink poster shadows; the black bands are
  ruled in hot pink to part them from the page. The cover art keeps its colours in both schemes.
- **Typography** — *Bricolage Grotesque* (SIL Open Font License, variable weight, width and optical size,
  shipped in `assets/shop/fonts/`), squeezed to its narrowest width and set heavy and tight for headings,
  product names, buttons and navigation; *Inter* (already shipped by the Sylius shop) for body copy, and the
  system monospace for catalogue numbers, matrix runouts and track timings.
- **Components** — hot pink pill buttons, round like a record label, lifted by a hard poster shadow on hover;
  outlined ink buttons that fill on hover. Product cards are **square sleeves** with a black record tucked
  behind them, which slides out of the top and turns on hover while the sleeve takes a hard offset shadow; the
  name in the display face, the price in bold. An ink cart pill with an acid yellow counter; eyebrows opened by
  a small record with a hot pink label.
- **Header** — a black top bar with the shipping promise, the Friday release day and the locale / currency
  switchers, then a record logo and the *Groove* wordmark, and category navigation in the display face,
  highlighted on hover with an acid yellow marker stroke (a hot pink rule in the dark scheme).
- **Homepage** — a black **hero** ringed with grooves: a huge squeezed headline, a lead, a hot pink call to
  action and a link to the limited editions, next to a graphic sleeve drawn in SVG with its record pulled out
  (it turns while the pointer rests on it) and a round “500 copies” sticker; a tilted acid yellow ticker of
  what the shop sells closes it. Right under it, **shop by genre** (`theme_genres` hookable): six crates (jazz,
  soul & funk, rock, electronic, hip-hop, world), each a sleeve with flat cover art, its record peeking out on
  hover, and its styles. The promise block (`theme_promise` hookable) lines up four commitments (every record
  checked, rigid mailers, Friday releases, fair pre-orders) on a black band. Then the **Friday drops**: the
  eight latest products as a wall of sleeves, and the **limited edition** (`theme_release` hookable): a sleeve
  with its translucent red record and a numbered sticker, the release sheet (artist, label, catalogue number,
  format, pressing), the tracklist side by side, the vinyl colours and what to play it on. The deals and new
  collection blocks are hidden.
- **Footer** — black, cut with record grooves under a hot pink rule, with three shop services (listening booth,
  record finder, collection buy-back) linking to the contact page, the wordmark, the Sylius links and the
  shipping notice.
- **Product page** — the main picture stands whole on a paper tile; the attributes table reads like a release
  sheet, with display labels and zebra rows; the price sits directly below the product name.
- **Checkout** — the checkout header uses the Groove wordmark and responsive category navigation, the current
  step is ruled in hot pink.
- **Translations** — every Groove-specific text lives in its own `groove` translation domain
  (`translations/groove.en.yaml` and `groove.fr.yaml`).
- **Accessibility** — ink text on the hot pink and acid yellow fills, focus rings at 3:1 in both schemes, solid
  backgrounds under every text set on the cover art, text alternatives for the hero and limited edition
  illustrations, a static ticker, and a record that only turns on hover and never for visitors who prefer
  reduced motion.

The genre crates and the limited edition link to the latest products: point them at your genre taxons and a
real release in `templates/shop/homepage/genres.html.twig` and `release.html.twig`. A hero image contributed
through the core hero slot replaces the drawn sleeve, with its record still pulled out behind it.

No photograph is shipped: the sleeves, records and cover art are drawn in SVG and CSS.

Install it with:

```bash
castor sylius:theme:setup groove
```
