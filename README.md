# cakephp3-starter
cakephp3.7.2-starter skeleton (RESTful API)

## Installation

1. Download [Composer](http://getcomposer.org/doc/00-intro.md) or update `composer self-update`.
2. Run `php composer.phar create-project --prefer-dist cakephp/app starter`.

If Composer is installed globally, run
```bash
composer create-project --prefer-dist cakephp/app starter
```

You should now be able to visit the path to where you installed the app and see the default home page.
```bash
cd starter
```
Next step is installing the RestApi plugin:
```
composer require multidots/cakephp-rest-api
```
After installation, [Load the plugin](http://book.cakephp.org/3.0/en/plugins.html#loading-a-plugin)
```php
Plugin::load('RestApi', ['bootstrap' => true]);
```
Or, you can load the plugin using the shell command
```sh
$ bin/cake plugin load -b RestApi
```

## Features

- [New Installed Packages and Plugins](#installed-packages-and-plugins)
- [Environment Variable Configuration](#configuration)
- [Routing](#routing)

### Installed Packages and Plugins

The following is a list of CakePHP plugins that are installed and pre-configured:

- [multidots/cakephp-rest-api](https://github.com/multidots/cakephp-rest-api)

### Routing

The following references helped build the complex routing

- [book.cakephp.org](https://book.cakephp.org/3.0/en/development/routing.html)
- [lorenzo/cakephp3-advanced-examples](https://github.com/lorenzo/cakephp3-advanced-examples)
- [bravo-kernel](http://www.bravo-kernel.com/2015/04/how-to-prefix-route-a-cakephp-3-rest-api/)
- [routing-blog-posts-to-custom-urls](http://josediazgonzalez.com/2016/12/17/routing-blog-posts-to-custom-urls/)
