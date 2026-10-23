---
title: Extending the import
description: Attach your own data to imported shops with an import extension.
sidebar:
  order: 6
---

The import only adds the catalog, its channel and a demo customer: it does not change your database schema. A project
needing more (e.g. a sales kit giving each demo shop its own admin) registers an import extension from its `castor.php`:

```php
<?php

use SyliusStarter\Core\App;
use SyliusStarter\Import\Extension\ImportExtensionInterface;
use SyliusStarter\Import\Extension\ImportExtensions;

ImportExtensions::register('demo_admins', new class implements ImportExtensionInterface {
    public function scaffold(App $app): void
    {
        // Copy your own templates into the Sylius app, patch entities, run migrations…
    }

    public function buildFixtures(string $projectSlug, array $target): array
    {
        // Written to config/sylius/fixtures/import/{slug}/extensions/{name}.php, loaded after the catalog.
        return ['demo_admin' => ['sylius_fixtures' => ['suites' => ['import' => ['fixtures' => [/* … */]]]]]];
    }

    public function describeShop(string $projectSlug, ?array $config): array
    {
        // Extra fields of the shop in `castor sylius:import:list`.
        return [];
    }
});
```

| Hook             | Called when                                                                                |
|------------------|--------------------------------------------------------------------------------------------|
| `scaffold`       | each import task makes sure the import scaffold is in the Sylius app                       |
| `buildFixtures`  | `sylius:import:fixtures:generate` writes the project's fixtures (`$target`: `channel`, `subdomain`, `shared`) |
| `describeShop`   | `sylius:import:list` lists the shops (`$config` is the project's `project.yaml`)           |

Keys you add to `project.yaml` are kept when the import rewrites it. To remove what you attached to an imported shop,
listen to the `import.channel_reset` Symfony event in the Sylius app, dispatched by `sylius:import:channel:reset`
(on `fixtures:load` and `sylius:import:delete`) with the channel code as subject and the `prefix` and `keep_channel`
arguments.
