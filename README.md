![GitHub Workflow Status](https://img.shields.io/github/workflow/status/tomsix/laravel-components-library/master)
![GitHub release (latest by date)](https://img.shields.io/github/v/release/tomsix/laravel-components-library?label=latest)
![Packagist (custom server)](https://img.shields.io/packagist/dm/tomsix/laravel-components-library)
![GitHub release (latest SemVer including pre-releases)](https://img.shields.io/github/v/release/tomsix/laravel-components-library?include_prereleases&label=pre-release)
![Packagist](https://img.shields.io/packagist/l/tomsix/laravel-components-library)
![PHP from Packagist](https://img.shields.io/packagist/php-v/tomsix/laravel-components-library)

# Laravel Components Library
A collection of pre-made Blade components. 

## Installation & setup

You can install the package via composer:

    composer require tomsix/laravel-components-library
    
The package will automatically register its service provider.

## Usage

### Usages From Components

Use the normal Blade Component syntax from Laravel 7. The form components can be used with the `form` prefix.

```blade
<x-form-input name="title" />
```

These attributes are usable. Use input-attributes for extra's. 

- **name** (required)
- **label** (not shown when null)
- **type** (if it's possible)
- **placeholder** (if it's possible)
- **value** (makes use of the old() helper)
- **input-attributes**

#### Input-attributes

All extra attributes will rendered in the div-tag of the form-group. 

You can provide extra attributes to the input-tag in a component. This property will accept a string in the right html-format or you can use a array. The key is the attribute name and the value as attribute value. Attributes that doesn't need a value can't have a key.

```blade
<x-form-input name="title" :input-attributes="['required', 'data-name' => 'Custom name']"/>
```

#### Prepend & append

The input, select, textarea and file components are rendered in a extra `div` with the Bootstrap `input-group`class. With this extra it's possible to add a prepend and append.

```blade
<x-form-input name="username" label="Username" prepend="@" />
```

### Form Components

#### Input

```blade
<x-form-input name="first-name" label="First Name" placeholder="Enter your first name" type="text" />

##
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
<x-form-model-select name="user" :models="$users" label="Your friend" key-attribute="id" value-attribute="fullName">
    <option value="">Select your friend</option>
</x-form-model-select>
```

By default, `id` and `name` are used for the option value and text. This can be changed with `key-attribute` and `value-attribute`. The default names can be changed in the config file.

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

#### File

```blade
<x-form-file name="file" label="Choose file" />
```

##### Multiple files

There are some notes when using multiple files:
- `enctype="multipart/form-data"` must added in the form tag
- Add the multiline attribute: `input-attributes="multiple"`
- Errors will not shown inline. Use a global error bag for the messages.

#### Button

```blade
<x-form-button name="submit" label="Save" value="save" color="secondary"/>
```

The label attribute wil not result in a label-tag. The value will renders as button text. When there is label given, the value will be used and when the value is null the name will be used.

#### Errors

Form errors has 2 option to render. By default, they are displayed in a component. This can be disabled in the config file.

It's also possible to add a error bag in a view.

```blade
<x-form-errors title="There are some incorrect fields" color="warning"/>
```

### Navigation components

The intention is to use these components inside a navigation bar

```blade
    <nav class="navbar navbar-light bg-light">
        <ul class="navbar-nav mr-auto">
            <x-navigation-item :href="route('home')" >
                <x-navigation-label text="Home" icon="fas fa-globe" />
            </x-navigation-item>
        </ul>
    </nav>
```

#### Navigation item

The url must be included in the component. The 'active' class will be added automatically.

```blade
<x-navigation-item :href="route('home')" >
    <p>About</p>
</x-navigation-item>
```

#### Navigation label

The label component provides text or an icon. Both props are optional.

```blade
<x-navigation-label text="Home" icon="fas fa-globe" />
```

## Customisation

### Config

You can optionally publish the config file with:

    php artisan vendor:publish --provider="TomSix\Components\LibraryServiceProvider" --tag=config
    
The css classes of the elements in a component can be change in the config file. By default, all components use Bootstrap 4 classes.
    
### Components

Optionally you can also publish the components and edit then. They will copy to `resources/views/vendor/laravel-components-library`.

#### Form components

    php artisan vendor:publish --provider="TomSix\Components\LibraryServiceProvider" --tag=form-components
    
#### Navigation components

    php artisan vendor:publish --provider="TomSix\Components\LibraryServiceProvider" --tag=navigation-components
    
#### All components

    php artisan vendor:publish --provider="TomSix\Components\LibraryServiceProvider" --tag=components

## License

The MIT License (MIT). Please see [License File](LICENSE) for more information.
