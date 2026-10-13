<?php

declare(strict_types=1);

namespace Sylius\Starter\B2b\Feature;

use Sylius\Starter\B2b\B2bResourceCopier;
use Sylius\Starter\Core\App;
use Sylius\Starter\Core\Feature\FeatureInterface;
use Sylius\Starter\Core\Util\Composer;

use function Castor\io;

final readonly class HideCheckoutFeature implements FeatureInterface
{
    public function name(): string
    {
        return 'hide_checkout';
    }

    public function description(): string
    {
        return 'Hide cart and checkout for guests';
    }

    public function __invoke(App $app): void
    {
        // Hookable "condition" is only supported since sylius/twig-hooks 0.14
        Composer::requireMinimumVersion($app, 'sylius/twig-hooks', '0.14');
        B2bResourceCopier::copy($app, $this->name());

        io()->success('Checkout has been hidden successfully.');
    }
}
