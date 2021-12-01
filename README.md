


#honchos 





[![GitHub issues](https://img.shields.io/github/issues/vishaltyagi123/honchos)](https://github.com/vishaltyagi123/honchos/issues)

[![GitHub Forks](https://img.shields.io/github/forks/vishaltyagi123/honchos)](https://github.com/vishaltyagi123/honchos/network/members)
[![GitHub stars](https://img.shields.io/github/stars/vishaltyagi123/honchos)](https://github.com/vishaltyagi123/honchos/stargazers)
[![Twitter](https://img.shields.io/twitter/url/https/github.com/bitfumes/laravel-packer.svg?style=social)](https://twitter.com/intent/tweet?text=Wow:&url=https%3A%2F%2Fgithub.com%2Fsarthaksavvy%2Flaravel-packer)



This package provides you with a simple tool to set up a new package and it will let you focus on the development of the package instead of the boilerplate. If you like a visual explanation

## Installation

Via Composer

```bash
$ composer require honchos/ratelimiter --dev
```

If you do not run Laravel 5.5 (or higher), then add the service provider in `config/app.php`:

```php
Honchos\Ratelimiter\RatelimiterServiceProvider::class,
```

If you do run the package on Laravel 5.5+, [package auto-discovery](https://medium.com/@taylorotwell/package-auto-discovery-in-laravel-5-5-ea9e3ab20518) takes care of the magic of adding the service provider.
Be aware that the auto-discovery also means that this package is loaded in your production environment. Therefore you may [disable auto-discovery](https://laravel.com/docs/5.5/packages#package-discovery) and instead put in your `AppServiceProvider` something like this:

