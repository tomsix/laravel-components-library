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

## Usage

### Form Components

Use the normal Blade Component syntax from Laravel 7. The form components can be used with the `form` prefix.

```blade
<x-form-input name="Title" />
```

#### Input

```blade
<x-form-input name="first-name" label="First Name" placeholder="Enter your first name" type="text" value="Tom" required disabled readonly/>
```
    
#### Select

```blade
<x-form-select name="animal" :options="[1 => 'cat', 2 => 'dog', 4 => 'cow']" label="Favorite animal" value="1" disabled readonly/>
```
    
It is possible to add extra options or a default option by using slots.

```blade
<x-form-select name="animal" :options="[1 => 'cat', 2 => 'dog', 4 => 'cow']" label="Favorite animal">
    <option value="">Choose an animal</option>
</x-form-select>
```

#### Model Select

With the `model-select` component you can use a collection of Eloquent models. The `models` attribute accepts the collection. It is also possible to use a Eloquent model as the selected value

```blade
<x-form-model-select name="user" :models="$users" label="Your friend">
    <option value="">Select your friend</option>
</x-form-model-select>
```

### Customisation

You can customize the css classes on each element by editing the blade components once they are published. Publish the components with this command

    php artisan vendor:publish --provider="TomSix\Components\LibraryServiceProvider" --tag=form-components

By default, each element use the Bootstrap 4 classes.

## License

The MIT License (MIT). Please see [License File](LICENSE) for more information.
