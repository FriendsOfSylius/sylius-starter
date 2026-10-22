---
title: Fixtures
description: Generate the Sylius fixture files from the catalog YAML, choose the target channel and load them.
sidebar:
  order: 4
---

## Generate the fixture files

```bash
castor sylius:import:fixtures:generate --project="Organic Kids"
```

The same command generates the same fixture files whether the YAML comes from the AI build or from an existing
website: the catalog source is read from the project YAML. `--limit` caps the number of imported products.

The `--subdomain` option decides which channel receives the catalog:

| `--subdomain`        | Channel                                         | Hostname                 | On load                                                       |
|----------------------|-------------------------------------------------|--------------------------|---------------------------------------------------------------|
| `""` (explicit)      | the default `WEB_STORE` channel                 | the app domain           | only the project's previously imported products/taxons are replaced; the channel, its orders and admins are kept |
| omitted (slug) or e.g. `organic-kids` | a dedicated channel (`ORGANIC_KIDS`)                     | `organic-kids.{domain}` | the dedicated channel is reset and recreated (demo shops) |

The choice is stored in `.castor/import/var/{project-slug}/project.yaml` (`shop` key) and reused by `fixtures:load` and
`sylius:import:delete`. Projects generated before keep their dedicated channel. Use `--subdomain=""` to import into
the default channel.

## Load the fixture suite

```bash
castor sylius:import:fixtures:load --project="Organic Kids"
```

The product and taxon images of a project (`.castor/import/var/{project-slug}/media/`) are first mirrored into the
Sylius app, `var/import/{project-slug}/media/`, where the generated fixtures read them
(`%kernel.project_dir%/var/import/…`): the containers that load the fixtures only mount the app directory, in the
main checkout as in a [worktree stack](../contributing/worktrees.md). `sylius:import:delete` removes that copy.
Fixtures generated before still point at `../.castor/import/var/`: run `sylius:import:fixtures:generate` again.

## Shop images

The shop images of a project (logo, header, interstice, any of them optional, read from
`.castor/import/var/{project-slug}/media/image_*`) are copied to the Sylius app as static files,
`public/media/shops/{CHANNEL_CODE}/{role}.{hash}.{ext}`, and `config/import/shop_images.php` only lists their URLs per
channel. The content hash changes the URL when an image changes, so browsers can cache them for good. Files no longer
listed (older versions, deleted shops) are removed each time the config is regenerated, including by
`sylius:import:delete`. `public/media` is git-ignored by Sylius Standard. On Upsun it is a storage mount, so the files
do not come with a Git push: upload `public/media/shops/` to the `public/media` mount (`upsun mount:upload`), and
add a `'/media/shops'` location with a long `expires` to `.upsun/config.yaml` to cache them.
