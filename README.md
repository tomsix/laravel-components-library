![GitHub Workflow Status](https://img.shields.io/github/workflow/status/tomsix/laravel-components-library/master)
![GitHub release (latest SemVer including pre-releases)](https://img.shields.io/github/v/release/tomsix/laravel-components-library?include_prereleases&label=pre-release)
![Packagist (custom server)](https://img.shields.io/packagist/dm/tomsix/laravel-components-library)
![Packagist](https://img.shields.io/packagist/l/tomsix/laravel-components-library)
![PHP from Packagist](https://img.shields.io/packagist/php-v/tomsix/laravel-components-library)

# Laravel Components Library
A collection of pre-made Blade components. All components use Bootstrap 4 css-classes. 

## Installation & setup

You can install the package via composer:

    composer require tomsix/laravel-components-library
    
The package will automatically register its service provider.

## Documentation

Use the normal Blade Component syntax from Laravel 7.

    <x-text-field />

### Components

#### Text Field

    <x-text-field name="first-name" label="First Name" placeholder="Enter your first name" type="text" required value="Tom" />
    
### Customisation

For customisation and the use of other css-classes, the components can be published with the following command:

    php artisan vendor:publish --provider="TomSix\Components\LibraryServiceProvider" --tag=views

## License

The MIT License (MIT). Please see [License File](LICENSE) for more information.
