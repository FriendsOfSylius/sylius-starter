---
title: AI-generated catalog
description: Generate a complete product catalog from a natural-language description.
sidebar:
  order: 2
---

Generate a complete product catalog from a natural-language description using AI. The generated catalog is saved as YAML
and can then be used to generate Sylius fixtures.

```bash
castor sylius:import:ai:build \
    --name="Organic Kids" \
    --description="An online store selling organic clothes for children"
```

This will generate a catalog for Organic Kids, including products and collections, based on the provided description.
Import data is stored per project slug under `.castor/import/var/{project-slug}/`.

Then [generate and load the Sylius fixtures](fixtures.md).
