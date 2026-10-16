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

The [themes overview](../themes/index.md) shows every theme by category, with a preview. Use `default` to remove the
active theme: no theme is applied and the application assets are rebuilt.

## Your own themes

You can [register your own themes](../extending/index.md) with the `AsThemeInstaller` and `AsThemeRemover` attributes.
A theme reads the shared [hero](../storefront/hero.md) and [brand](../storefront/brand.md) slots, so the data other
packages contribute (an imported shop's logo, for instance) shows up in it.
