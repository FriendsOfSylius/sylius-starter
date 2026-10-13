<?php

declare(strict_types=1);

namespace Sylius\Starter\Menu;

use Sylius\Starter\Core\Service\SyliusService;
use Sylius\Starter\Core\Task\TaskProviderRegistry;
use Sylius\Starter\Menu\Tasks\MenuTasks;

TaskProviderRegistry::register(
    'menu',
    static fn(SyliusService $service): iterable => (new MenuTasks($service->getName(), $service->getDirectory()))(),
);
