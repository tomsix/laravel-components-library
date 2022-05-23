![GitHub Workflow Status](https://img.shields.io/github/workflow/status/tomsix/laravel-components-library/master?style=flat-square)
![GitHub release (latest by date)](https://img.shields.io/github/v/release/tomsix/laravel-components-library?label=latest&style=flat-square)
![Packagist (custom server)](https://img.shields.io/packagist/dm/tomsix/laravel-components-library?style=flat-square)
![GitHub release (latest SemVer including pre-releases)](https://img.shields.io/github/v/release/tomsix/laravel-components-library?include_prereleases&label=pre-release&style=flat-square)
![Packagist](https://img.shields.io/packagist/l/tomsix/laravel-components-library?style=flat-square)
![PHP from Packagist](https://img.shields.io/packagist/php-v/tomsix/laravel-components-library?style=flat-square)

# Laravel Components Library
A collection of pre-made Blade components for Boostrap 4 (and 5). 

## Installation & setup

You can install the package via composer:

    composer require tomsix/laravel-components-library
    
The package will automatically register its service provider.

## Usage

### Usages Form Components

Use the normal Blade Component syntax from Laravel 7. The form components can be used with the `form` prefix.

```blade
<x-form::input name="title" />
```

These attributes are special:

- **name** (required)
- **id** (When not provided the `name` will be used)
- **label** (not shown when null)
- **value** (makes use of the old() helper)

All other attributes wil be merged on the input html-tag

#### Prepend & append

The input, select and textarea components are rendered in an extra `div` with the Bootstrap `input-group`class. With this extra it's possible to add a prepend and append.

```blade
<x-form::input name="username" label="Username" prepend="@" />
```
With v2 is it possible to override de default prepend or append with a slot.

```blade
<div class="mb-3">
    <x-form::input type="file" name="photos" label="Foto" multiple>
        <x-slot name="append">
            <span class="input-group-append">
                <button class="btn btn-secondary" type="button">Demo</button>
            </span>
        </x-slot>
    </x-form::input>
</div>
```

#### Before & After

Each form component contains 2 extra slots: before and after.

```blade
<div class="mb-3">
    <x-form::input name="email" id="email" class="form-control-lg" placeholder="email....">
        <x-slot name="before">
            <label for="email">Custom label</label>
        </x-slot>
        <x-slot name="after">
            <div class="form-text">We'll never share your email with anyone else.</div>
        </x-slot>
    </x-form::input>
</div>
```

### Form Components

#### Form

Since V2 there is a form component `x-form::form`. This will add the CSRF-token and will use the `@method` directive for PUT and DELETE. The default method is POST instead of GET.

```blade
<x-form::form method="PUT" :action="route('user.store')">
    <!-- The form content -->
</x-form:::form>
```

#### Input

```blade
<x-form::input name="first-name" label="First Name" placeholder="Enter your first name" type="text" />
```

#### Textarea
    
```blade
<x-form::textarea name="description" label="Description" placeholder="Typ here ..." />
```
    
#### Select

```blade
<x-form::select name="animal" :options="[1 => 'cat', 2 => 'dog', 4 => 'cow']" label="Favorite animal" />
```
    
It is possible to add extra options or a default option with slots.

```blade
<x-form::select name="animal" :options="[1 => 'cat', 2 => 'dog', 4 => 'cow']" label="Favorite animal">
    <option value="">Choose an animal</option>
</x-form::select>
```

#### Model Select

With the `model-select` component you can use a collection of Eloquent models. The `models` attribute accepts the collection. It is also possible to use an Eloquent model as the selected value

```blade
<x-form::model-select name="user" :models="$users" label="Your friend" key-attribute="id" value-attribute="full_name">
    <option value="">Select your friend</option>
</x-form::model-select>
```

By default, `id` and `name` are used for the option value and text. This can be changed with `key-attribute` and `value-attribute`. The default names can be changed in the config file.

#### Checkboxes, radiobuttons and switches

A group of checkboxes makes use of the checkboxes component. It is possible to give an array of options or use the single checkbox component within the slot.

```blade
<x-form::checkbox name="terms" value="yes" label="Agree to terms and conditions" />
```

##### Arrays

```blade
<x-form::checkboxes name="actors[]" label="Favorite actors" :options="$options" type="checkbox" />
```

Checkboxes need an array with options. The array key is used for the checkbox value attribute and the value of the array is used as label text. An array without keys will use numbers starting from 0 as a normal array.

###### With keys

Array:
```blade
$options = ['lieven' => 'Lieven Scheire', 'jelle' => 'Jelle De Beule', 'jonas' => 'Jonas Geinaart']; 
```
Result:
```html
<input class="form-check-input" type="checkbox" name="actors[]" id="actors-lieven" value="lieven" />
```

###### Without keys

Array:
```blade
$options = ['Lieven Scheire', 'Jelle De Beule', 'Jonas Geinaart']; 
```

Result:
```html
<input class="form-check-input " type="checkbox" name="actors[]" id="actors-0" value="1">
```

##### Inline

The `inline` attribute enables the Bootstrap inline-class.

##### Type

Changing the `type` attribute to `radio` will work to use radiobuttons. The latest version of Bootstrap 4 has also switches and can be used with the type `switch`

#### Errors

Form errors has 2 option to render. By default, they are displayed in a component. This can be disabled in the config file.

It's also possible to add an error bag in a view.

```blade
<x-form::errors title="There are some incorrect fields" color="warning"/>
```

### Boostrap 5

More info comming soon

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
<x-navigation::item :href="route('home')" >
    <p>About</p>
</x-navigation::item>
```

#### Navigation label

The label component provides text or an icon. Both props are optional.

```blade
<x-navigation::label text="Home" icon="fas fa-globe" />
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
