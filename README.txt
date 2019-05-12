# pre-req
bincani@eg-webdev01 ~ $ php -v
PHP 7.1.17 (cli) (built: Apr 24 2018 16:17:53) ( NTS )

# start project
composer create-project symfony/skeleton ski4life_rest_api

./symfony4_demo/config/bundles.php


Installing symfony/skeleton (v4.2.8.3)
  - Installing symfony/skeleton (v4.2.8.3): Downloading (100%)
Created project in ski4life_rest_api
Loading composer repositories with package information
Installing dependencies (including require-dev) from lock file
Package operations: 22 installs, 0 updates, 0 removals
  - Installing symfony/flex (v1.2.5): Downloading (100%)

Prefetching 15 packages 🎶
  - Downloading (100%)

  - Installing psr/cache (1.0.1): Loading from cache
  - Installing psr/container (1.0.0): Loading from cache
  - Installing psr/simple-cache (1.0.1): Loading from cache
  - Installing symfony/polyfill-mbstring (v1.11.0): Loading from cache
  - Installing symfony/contracts (v1.1.0): Loading from cache
  - Installing symfony/console (v4.2.8): Loading from cache
  - Installing symfony/dotenv (v4.2.8): Loading from cache
  - Installing symfony/routing (v4.2.8): Loading from cache
  - Installing symfony/http-foundation (v4.2.8): Loading from cache
  - Installing symfony/event-dispatcher (v4.2.8): Loading from cache
  - Installing psr/log (1.1.0): Loading from cache
  - Installing symfony/debug (v4.2.8): Loading from cache
  - Installing symfony/http-kernel (v4.2.8): Loading from cache
  - Installing symfony/finder (v4.2.8): Loading from cache
  - Installing symfony/filesystem (v4.2.8): Loading from cache
  - Installing symfony/dependency-injection (v4.2.8): Loading from cache
  - Installing symfony/config (v4.2.8): Loading from cache
  - Installing symfony/var-exporter (v4.2.8): Loading from cache
  - Installing symfony/cache (v4.2.8): Loading from cache
  - Installing symfony/framework-bundle (v4.2.8): Loading from cache
  - Installing symfony/yaml (v4.2.8): Loading from cache
Generating autoload files
Symfony operations: 4 recipes (ecca2f15cc88800c949b4b8576dd4f23)
  - Configuring symfony/flex (>=1.0): From github.com/symfony/recipes:master
  - Configuring symfony/framework-bundle (>=4.2): From github.com/symfony/recipes:master
  - Configuring symfony/console (>=3.3): From github.com/symfony/recipes:master
  - Configuring symfony/routing (>=4.2): From github.com/symfony/recipes:master
Executing script cache:clear [OK]
Executing script assets:install public [OK]

Some files may have been created or updated to configure your new packages.
Please review, edit and commit them: these files are yours.


What's next?

  * Run your application:
    1. Go to the project directory
    2. Create your code repository with the git init command
    3. Download the Symfony CLI at https://symfony.com/download to install a development web server,
       or run composer require server --dev for a minimalist one

  * Read the documentation at https://symfony.com/doc
