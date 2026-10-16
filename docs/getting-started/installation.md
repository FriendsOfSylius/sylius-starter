---
title: Installation
description: Start a new Sylius project with the skeleton, or add Sylius Starter to an existing Castor project.
sidebar:
  order: 1
---

## Start a new project

The quickest way is the [Sylius Starter skeleton](https://github.com/sylius-starter/skeleton): it installs
Sylius-Standard, its Docker stack, the assets and the fixtures in one command (`castor sylius:init`). See its README
for the available options.

## Add Sylius Starter to a Castor project

1. In a Castor project (a `castor.php` file at its root), create a composer file for Castor:

   ```bash
   echo '{}' > castor.composer.json
   ```

2. Install Sylius Starter (every package at once):

   ```bash
   castor composer require sylius-starter/sylius-starter "@dev"
   ```

   Or pick only what you need: `sylius-starter/core` is always required, then add the
   [task packages](packages.md) you want, e.g.

   ```bash
   castor composer require sylius-starter/core sylius-starter/themes sylius-starter/plugins "@dev"
   ```

3. Set up a new Sylius application:

   ```bash
   castor docker:service:install sylius
   ```

Coming from the `castor-php/sylius` plugin? Follow the [upgrade guide](upgrading.md).
