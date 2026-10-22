---
title: Groove theme
description: A fine record store look in deep black, warm ivory and brass, with an editorial serif, collector's sheets and the saturated colours kept for the sleeves.
sidebar:
  order: 15
---

Groove is built for premium record stores: an independent shop that also sells rare editions, audiophile
pressings and the hi-fi to play them. The interface is deep black, warm ivory and brass, with a lot of air and an
editorial layout; the saturated colours (pink, acid yellow, electric blue, mint) only live in the sleeves, the
coloured records and the limited editions. Every product is a sleeve with its record tucked behind it, which
slides out on hover. Its homepage puts forward what Sylius does well for a record shop: genres as taxons, new
arrivals, pressing references as attributes, editions as variants and the gear to play them as associations.

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

- **Palette** — deep black (`#121110`) on warm ivory (`#F4EFE5`, `#EAE3D5`), with brass (`#B48A4F`) for rules,
  record labels and the cart counter. The call to action is black with ivory type and turns dark brass on hover;
  links and focus rings are dark brass (`#7A5A2C`). The sleeve colours — pink (`#FF2E7E`), acid yellow
  (`#FFE14D`), electric blue (`#3D5AFE`), tangerine (`#FF6B1A`) and mint (`#18D6A0`) — appear only in the cover
  art and the coloured records, never in the interface.
- **Dark scheme** — the listening room at night: deep black page (`#0F0E0C`, surfaces `#171513`), warm ivory type,
  brass calls to action with black type, pale brass links and focus rings (`#D9B77F`); the black bands are ruled
  in brass. The cover art keeps its colours in both schemes.
- **Typography** — *Instrument Serif* (SIL Open Font License, regular and italic, shipped in
  `assets/shop/fonts/`), tall and narrow, for headings, record titles, product names and track titles, with
  italic brass accents; *Inter* (already shipped by the Sylius shop) for body copy, and in spaced small capitals
  for eyebrows, labels, buttons and navigation; the system monospace for catalogue numbers, matrices and timings.
- **Components** — square black (brass in the dark scheme) buttons in spaced small capitals, outlined ink buttons;
  links in small capitals closed by a long arrow; eyebrows opened by a brass rule. Product cards are **square
  sleeves** with a black record tucked behind them, which slides out of the top and turns on hover while the
  sleeve lifts; the name in the serif, the price in small figures.
- **Header** — a black top bar with the insured shipping, the listening room and the locale / currency switchers,
  then a record logo with a brass label and the serif *Groove* wordmark, and category navigation in spaced small
  capitals, underlined by a brass hairline on hover.
- **Homepage** — a deep black **hero** with a lot of air: a tall serif headline, a lead, a brass call to action, a
  link to the pressing of the month and the formats the shop is known for, next to a graphic sleeve drawn in SVG
  with its record pulled out (it turns while the pointer rests on it), captioned like a catalogue entry. Then
  **browse by genre** (`theme_genres` hookable): six crates (jazz, soul & funk, rock, electronic, hip-hop, world),
  each a sleeve with flat cover art and its record peeking out on hover. The promise block (`theme_promise`
  hookable) numbers four commitments (graded by hand, cleaned and resleeved, insured and double-boxed, listening
  room) between two hairlines. Then the **new arrivals**: the eight latest products as a wall of sleeves, and the
  **pressing of the month** (`theme_release` hookable), a collector's sheet: the sleeve with its translucent blue
  record and its number, the pressing references (label, catalogue number, matrix, mastering, plant, format,
  edition, condition), the tracklist side by side, the editions in stock and what to play it on. The deals and
  new collection blocks are hidden.
- **Footer** — deep black under a brass hairline, with three shop services (listening room, record sourcing,
  appraisal and buy-back) linking to the contact page, the wordmark, the Sylius links and the shipping notice.
- **Product page** — the main picture stands whole on an ivory tile; the attributes table reads like a collector's
  sheet, with small-capital labels and zebra rows; the price sits directly below the product name.
- **Checkout** — the checkout header uses the Groove wordmark and responsive category navigation, the current
  step is ruled in brass.
- **Translations** — every Groove-specific text lives in its own `groove` translation domain
  (`translations/groove.en.yaml` and `groove.fr.yaml`).
- **Accessibility** — ivory on black and black on brass for the calls to action, dark brass text at 5:1 on ivory,
  focus rings at 3:1 in both schemes, text alternatives for the hero and pressing of the month illustrations, and
  a record that only turns on hover and never for visitors who prefer reduced motion.

The genre crates and the pressing of the month link to the latest products: point them at your genre taxons and a
real release in `templates/shop/homepage/genres.html.twig` and `release.html.twig`. A hero image contributed
through the core hero slot replaces the drawn sleeve, with its record still pulled out behind it.

No photograph is shipped: the sleeves, records and cover art are drawn in SVG and CSS.

Install it with:

```bash
castor sylius:theme:setup groove
```
