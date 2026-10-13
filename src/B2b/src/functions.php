<?php

declare(strict_types=1);

namespace Sylius\Starter\B2b;

use Sylius\Starter\B2b\Tasks\B2bTasks;
use Sylius\Starter\Core\Service\SyliusService;
use Sylius\Starter\Core\Task\TaskProviderRegistry;

TaskProviderRegistry::register(
    'b2b',
    static fn(SyliusService $service): iterable => (new B2bTasks($service->getName(), $service->getDirectory()))(),
);
