# Laravel form builder BS4

The [Laravel form builder](https://github.com/kristijanhusak/laravel-form-builder)'s bootstrap 4 template.

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Total Downloads][ico-downloads]][link-downloads]

## Install

[Laravel form builder](https://github.com/kristijanhusak/laravel-form-builder) must be installed.

Via Composer

```bash
composer require ycs77/laravel-form-builder-bs4
```

Publish config & templates (Will overwrite the Laravel form builder's original config and views)

```bash
php artisan vendor:publish --tag=laravel-form-builder-bs4
```

Or publish horizontal form

```bash
php artisan vendor:publish --tag=laravel-form-builder-bs4-horizontal
```

> If it doesn't work, you can add `--force` attribute. BUT, the original Laravel form builder's config and views in your repository CAN NOT be retrieved. Please think twice.

[ico-version]: https://img.shields.io/packagist/v/ycs77/laravel-form-builder-bs4.svg?style=flat
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat
[ico-downloads]: https://img.shields.io/packagist/dt/ycs77/laravel-form-builder-bs4.svg?style=flat

[link-packagist]: https://packagist.org/packages/ycs77/laravel-form-builder-bs4
[link-downloads]: https://packagist.org/packages/ycs77/laravel-form-builder-bs4
