---
title: Set up a theme
description: Install one of the ready-to-use storefront themes in your Sylius application.
sidebar:
  order: 2
---

Install a storefront theme in your Sylius application. Provided by `sylius-starter/themes`. Only one theme can be
active: installing a theme automatically removes any other previously installed theme.

If no argument is provided, an interactive prompt asks you to choose the theme.

```bash
castor sylius:theme:setup canvas
```

## Available themes

### Editorial

Refined typography and soft palettes, for lifestyle and fashion shops.

| Preview | Theme | Description |
|---------|-------|-------------|
| <a href="../themes/canvas.md"><img src="../images/canvas-homepage.png" alt="Canvas storefront homepage" width="140"></a> | [Canvas](../themes/canvas.md) | Clean, editorial look with warm neutrals |
| <a href="../themes/blush.md"><img src="../images/blush-homepage.png" alt="Blush storefront homepage" width="140"></a> | [Blush](../themes/blush.md) | White canvas, raspberry accents and a plum footer |

### Terminal

A developer-tool layout with monospaced accents, in a dark and a light variant.

| Preview | Theme | Description |
|---------|-------|-------------|
| <a href="../themes/prompt_dark.md"><img src="../images/prompt-dark-homepage.png" alt="Prompt Dark storefront homepage" width="140"></a> | [Prompt Dark](../themes/prompt_dark.md) | Terminal-inspired dark workspace with green accents |
| <a href="../themes/prompt_light.md"><img src="../images/prompt-light-homepage.png" alt="Prompt Light storefront homepage" width="140"></a> | [Prompt Light](../themes/prompt_light.md) | Terminal-inspired layout on soft green paper |

### Vibrant

Bold colors and product-led pages, for sport and modern brands.

| Preview | Theme | Description |
|---------|-------|-------------|
| <a href="../themes/volt.md"><img src="../images/volt-homepage.png" alt="Volt storefront homepage" width="140"></a> | [Volt](../themes/volt.md) | High-energy sport-tech look in electric violet |
| <a href="../themes/lagoon.md"><img src="../images/lagoon-homepage.png" alt="Lagoon storefront homepage" width="140"></a> | [Lagoon](../themes/lagoon.md) | Airy, product-led look in teal and aqua |
| <a href="../themes/aurora.md"><img src="../images/aurora-homepage.png" alt="Aurora storefront homepage" width="140"></a> | [Aurora](../themes/aurora.md) | Lagoon's violet sibling, with a blue-to-violet gradient |

### Specialty stores

Looks built around one kind of shop, with their own typography and homepage.

| Preview | Theme | Description |
|---------|-------|-------------|
| <a href="../themes/tech.md"><img src="../images/tech-homepage.png" alt="Tech storefront homepage" width="140"></a> | [Tech](../themes/tech.md) | Electronics-store look in carbon, aluminium and signal orange |
| <a href="../themes/retro_gaming.md"><img src="../images/retro-gaming-homepage.png" alt="Retro Gaming storefront homepage" width="140"></a> | [Retro Gaming](../themes/retro_gaming.md) | Night arcade gaming store: neon magenta and cyan, pixel font, HUD and CRT hero |

Use `default` to remove the active theme: no theme is applied and the application assets are rebuilt.

## Your own themes

You can [register your own themes](../extending/index.md) with the `AsThemeInstaller` and `AsThemeRemover` attributes.
A theme reads the shared [hero](../storefront/hero.md) and [brand](../storefront/brand.md) slots, so the data other
packages contribute (an imported shop's logo, for instance) shows up in it.
