---
title: Theme screenshots
description: Refresh the homepage, product and cart screenshots of the storefront themes.
sidebar:
  order: 3
---

The screenshots of the [theme pages](../themes/index.md) live in `docs/images/` (`<theme>-homepage.png`,
`<theme>-product.png` and `<theme>-cart.png`).

## Every theme at once

From the repository root:

```bash
castor docs:screenshots                        # asks which themes to capture ("all" by default)
castor docs:screenshots canvas volt            # only these themes
castor docs:screenshots all --restore=canvas   # every theme, then switch back to canvas
```

For each theme, the task runs `castor sylius:theme:setup <theme>` then the screenshot script with `--include-cart`
(`--skip-cart` to leave the cart out), and stops at the first failure. Without `--restore`, the last captured theme
stays active.

## One theme

Activate the theme first (`castor sylius:theme:setup canvas`), then run:

```bash
node scripts/capture-theme-screenshots.mjs canvas --include-cart
```

| Option            | Description                                                              |
|-------------------|--------------------------------------------------------------------------|
| `--include-cart`  | Also add the product to a fresh cart (isolated browser profile) and capture the cart page |
| `--product <slug>` | Force the captured product                                              |
| `--base-url <url>` | Storefront URL (default: `https://app.test/en_US/`)                     |
| `--output-dir <dir>` | Output directory (default: `docs/images`)                             |

Without `--product`, the script picks the first product listed on the storefront that is in stock, has an
add-to-cart button and a real image (preferring the Comet Pulse T-Shirt), and lists the skipped ones with the reason.

The script requires Node.js 22+ and Google Chrome or Chromium (set `CHROME_BIN` if it is not detected). It hides the
Symfony web debug toolbar, so the app can stay in the `dev` environment.
