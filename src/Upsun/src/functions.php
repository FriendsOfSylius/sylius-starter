<?php

declare(strict_types=1);

namespace Sylius\Starter\Upsun;

use Sylius\Starter\Core\Service\SyliusService;
use Sylius\Starter\Core\Task\TaskProviderRegistry;
use Sylius\Starter\Upsun\Tasks\UpsunTasks;

TaskProviderRegistry::register(
    'upsun',
    static fn(SyliusService $service): iterable => (new UpsunTasks($service->getName(), $service->getDirectory(), $service->databaseEngine()))(),
);
