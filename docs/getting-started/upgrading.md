---
title: Upgrading from castor-php/sylius
description: Move from the former castor-php/sylius Castor plugin to the sylius-starter/* packages.
sidebar:
  order: 3
---

Sylius Starter was formerly the `castor-php/sylius` Castor plugin. The code now lives in a monorepo and is published as
several [`sylius-starter/*` packages](packages.md).

Replace the package in your `castor.composer.json` (`castor composer remove castor-php/sylius` then require
`sylius-starter/sylius-starter`) and update your imports:

| Before                                                    | After                                                           |
|-----------------------------------------------------------|-----------------------------------------------------------------|
| `Castor\Sylius\Service\SyliusService`                     | `SyliusStarter\Core\Service\SyliusService`                      |
| `Castor\Sylius\App`, `Castor\Sylius\Util\*`               | `SyliusStarter\Core\App`, `SyliusStarter\Core\Util\*`           |
| `Castor\Sylius\Attribute\AsPluginInstaller` / `Remover`   | `SyliusStarter\Plugins\Attribute\AsPluginInstaller` / `Remover` |
| `Castor\Sylius\Attribute\AsTheme*`                        | `SyliusStarter\Themes\Attribute\AsTheme*`                       |
| `Castor\Sylius\Plugin\Installer\PluginInstallerInterface` | `SyliusStarter\Core\Component\InstallerInterface`               |
| `Castor\Sylius\Plugin\Remover\PluginRemoverInterface`     | `SyliusStarter\Core\Component\RemoverInterface`                 |
