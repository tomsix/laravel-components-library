![GitHub Workflow Status](https://img.shields.io/github/workflow/status/tomsix/laravel-components-library/master)
![GitHub release (latest SemVer including pre-releases)](https://img.shields.io/github/v/release/tomsix/laravel-components-library?include_prereleases&label=pre-release)
![Packagist (custom server)](https://img.shields.io/packagist/dm/tomsix/laravel-components-library)
![Packagist](https://img.shields.io/packagist/l/tomsix/laravel-components-library)
![PHP from Packagist](https://img.shields.io/packagist/php-v/tomsix/laravel-components-library)

# Laravel Components Library
A collection of pre-made Blade components. 

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
- input-attributes

#### Input-attributes

You can provide extra attributes to the input-tag in a component. This property will accept a string in the right html-format or you can use a array. The key is the attribute name and the value as attribute value. Attributes that doesn't need a value can't have a key.

```php
['required', 'data-browse' => 'Open File'];
```

**Note:** For een select component use `select-attributes`

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

**Note:** Use `select-attributes` instead of the default name.

#### Model Select

With the `model-select` component you can use a collection of Eloquent models. The `models` attribute accepts the collection. It is also possible to use a Eloquent model as the selected value

```blade
<x-form-model-select name="user" :models="$users" label="Your friend" key-attribute="id" value-attribute="fullName">
    <option value="">Select your friend</option>
</x-form-model-select>
```

By default, `id` and `name` are used for the option value and text. This can be changed with `key-attribute` and `value-attribute`.
#### Checkboxes (or radiobuttons)

A group of checkboxes make use of the checkboxes component. It is possible to give an array of options or use the single checkbox component within the slot.

```blade
<x-form-checkboxes name="terms" >
    <x-form-checkbox name="terms" value="yes" label="Agree to terms and conditions" />
</x-form-checkboxes>
```

##### Arrays

```blade
<x-form-checkboxes name="user[]" label="Favorite actors" :options="$options" type="checkbox" />
```

Checkboxes need a array with options. The array key is used for the checkbox value attribute and the value of the array is used as label text. An array without keys will use numbers starting from 1.

###### With keys

Array:
```php 
$options = ['lieven' => 'Lieven Scheire', 'jelle' => 'Jelle De Beule', 'jonas' => 'Jonas Geinaart']; 
```
Result:
```html
<input class="form-check-input" type="checkbox" name="user[]" id="user['lieven']" value="lieven" />
```

###### Without keys

Array:
```php 
$options = ['Lieven Scheire', 'jelle' => 'Jelle De Beule', 'jonas' => 'Jonas Geinaart']; 
```

Result:
```html
<input class="form-check-input " type="checkbox" name="user[]" id="user[1]" value="1">
```

##### Inline

The `inline` attribute enables the Bootstrap inline-class.

##### Radio

Changing the `type` attribute to `radio` will work to use radiobuttons.

#### Errors

Form errors has 2 option to render. By default, they are displayed in a component. This can be disabled in the config file.

It's also possible to add a error bag in a view.

```blade
<x-form-errors title="There are some incorrect fields" color="warning"/>
```

### Customisation

#### Config

You can optionally publish the config file with:

    php artisan vendor:publish --provider="TomSix\Components\LibraryServiceProvider" --tag=config
    
The css classes of the elements in a component can be change in the config file. By default, all components use Bootstrap 4 classes.
    
#### Components

Optionally you can also publish the components and edit then. They will copy to `resources/views/components/library/form`.

    php artisan vendor:publish --provider="TomSix\Components\LibraryServiceProvider" --tag=form-components

## License

The MIT License (MIT). Please see [License File](LICENSE) for more information.
