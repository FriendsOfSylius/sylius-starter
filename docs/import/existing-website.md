---
title: Existing website
description: Import the catalog of an existing website into Sylius.
sidebar:
  order: 3
---

It requires a YAML import under `.castor/import/var/{project-slug}/` (products + collections). If you use the private
`castor-php/sylius-import-fetch` plugin, run `sylius:import:existing:fetch` first; otherwise prepare the YAML yourself.

```bash
castor sylius:import:fixtures:generate --project=example --limit=100
castor sylius:import:fixtures:load --project=example
```

See [Fixtures](fixtures.md) for the options of these commands.
