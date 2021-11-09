# Force Non-Public

### Description

Programmatically discourages search engines from indexing the site.

### Install

- Preferable way is to use [Composer](https://getcomposer.org/):

    ````
    composer require innocode-digital/wp-force-non-public
    ````

  By default, it will be installed as [Must Use Plugin](https://codex.wordpress.org/Must_Use_Plugins).
  It's possible to control with `extra.installer-paths` in `composer.json`.

- Alternate way is to clone this repo to `wp-content/mu-plugins/` or `wp-content/plugins/`:

    ````
    cd wp-content/plugins/
    git clone git@github.com:innocode-digital/wp-force-non-public.git
    cd wp-force-non-public/
    composer install
    ````

If plugin was installed as regular plugin then activate **Force Non-Public** from Plugins page
or [WP-CLI](https://make.wordpress.org/cli/handbook/): `wp plugin activate wp-force-non-public`.

### Usage

To enable plugin it's required to add constant (usually to `wp-config.php`):

```
define( 'FORCE_NON_PUBLIC', true );
```
