---
title: One stack per worktree
description: Run an independent Sylius app, database and domain in every git worktree of the monorepo.
sidebar:
  order: 4
---

Every [git worktree](https://git-scm.com/docs/git-worktree) of this repository runs its own Docker stack, so several
branches (a theme each, for example) can be built and previewed side by side without taking turns on the shared app.

|                 | Main checkout              | Worktree `<dir>`                               |
|-----------------|----------------------------|------------------------------------------------|
| Compose project | `app`                      | `app-<slug>`                                   |
| Storefront      | `https://app.test/en_US/`  | `https://<slug>.app.localhost/en_US/`          |
| Sylius app      | `app/`                     | `<dir>/app/` (a copy of the main checkout one) |
| Database        | `app_postgres_data` volume | `app-<slug>_postgres_data` volume              |

The slug is the worktree directory name, lowercased, with every run of other characters than letters and digits
replaced by `-`, cut to 40 characters (`.claude/worktrees/tech-theme-fc3548` → `tech-theme-fc3548`). Nothing to
configure: Castor detects the worktree (its `.git` is a file) and every task uses its stack.

## Start

From the worktree, once the main checkout has its app installed:

```bash
castor worktree:install
```

It copies the main checkout `app/` (copy-on-write on APFS: `vendor/` and `node_modules/` take no extra disk space
until they change), points the channel fixtures at the worktree domain, builds the images, starts the stack, runs the
migrations and loads the fixtures. Then the usual commands work on this stack only:

```bash
castor sylius:theme:setup volt
castor app:bash -- php bin/console cache:clear
node scripts/capture-theme-screenshots.mjs volt --include-cart
castor docs:screenshots volt
castor about     # lists the URLs of the stack
```

The screenshot script and `castor docs:screenshots` default to the storefront of the checkout they run from.

## Reach it

`*.localhost` names resolve to the loopback without any `/etc/hosts` entry, and the global Castor router serves them
over HTTPS with its own certificate authority, like `app.test`. Open `https://<slug>.app.localhost/` in Chrome, or call
it with `curl`.

## Stop and remove

```bash
castor stop               # stop the containers, keep the database
castor destroy --force    # remove the containers, the database volume and the images of the worktree
```

Run `castor destroy --force` before `git worktree remove`: the containers and the volume outlive the directory. The
worktree `app/` is kept, so `castor worktree:install` brings the stack back with a fresh database. When no other
stack is running, `stop` and `destroy` also stop the shared router; the next `castor up` starts it again.

## Limits

- **Disk**: each stack has its own images (the layers are shared with the main checkout, but each tag counts in
  `docker system df`), its own PostgreSQL volume, and an `app/` that grows with what diverges (built assets, cache).
- **Resources**: every running stack is a FrankenPHP and a PostgreSQL container. Stop the ones you are not using.
- **Ports**: the router publishes 80 and 443 once for every stack; only `castor postgres:expose` binds a host port,
  so expose one stack database at a time.
- **App state**: the copy is taken when the worktree is installed. Packages changed later in the main checkout `app/`
  (a theme installed by hand, a plugin) are not carried over: run their `castor` task again in the worktree.
