---
title: Check the Upsun configuration
description: Validate the Upsun configuration of Sylius Standard against your Castor and Doctrine setup.
sidebar:
  order: 5
---

Provided by `sylius-starter/upsun`. Sylius Standard already ships an official `.upsun/config.yaml`. This read-only check validates that the file is present
and defines Upsun applications, then compares the locally linked Castor database, the application's Doctrine DBAL driver,
and the declared Upsun database service. It checks explicit Doctrine drivers first and supports the standard
`DATABASE_URL` configuration as a fallback. If an engine cannot be determined, it reports that instead of guessing.

```bash
castor sylius:upsun:check
```

The check uses the configured Symfony environment, does not generate or modify Upsun or Doctrine configuration, and does
not run Upsun or Symfony CLI commands.
