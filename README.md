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

All components has standaard attributes:

- name
- label
- value (makes use of the old() helper)
- disabled
- readonly

#### Input

```blade
<x-form-input name="first-name" label="First Name" placeholder="Enter your first name" type="text" />
```

#### Textarea
    
```blade
<x-form-textarea name="description" label="Description" placeholder="Typ here ..." />
```
    
#### Select

```blade
<x-form-select name="animal" :options="[1 => 'cat', 2 => 'dog', 4 => 'cow']" label="Favorite animal" />
```
    
It is possible to add extra options or a default option with slots.

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

#### Checkboxes

Checkboxes need a array with options. The key is used for the checkbox value and the value is used as label text.

```php 
$options = ['lieven' => 'Lieven Scheire', 'jelle' => 'Jelle De Beule', 'jonas' => 'Jonas Geinaart']; 
```

```blade
<x-form-checkboxes name="user" label="Gebruiker" :options="$options" inline />
```

A second options is to use the checkbox component in the slot. Both can be combined.

```blade
<x-form-checkboxes name="user" label="Gebruiker" :options="$options" inline>
    <x-form-checkbox name="user" id-name="user4" value="koen" label="Koen De Poorter" />
</x-form-checkboxes>
```

The `inline` attribute enables the Bootstrap inline-class.

### Customisation

You can customize the css classes on each element by editing the blade components once they are published. Publish the components with this command

    php artisan vendor:publish --provider="TomSix\Components\LibraryServiceProvider" --tag=form-components

By default, each element use the Bootstrap 4 classes.

## License

The MIT License (MIT). Please see [License File](LICENSE) for more information.
