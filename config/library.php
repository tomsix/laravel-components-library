<?php

return [

	/*
	 * Change te prefix of the blade components
	 */
	'prefix' => [
		'form' => 'form',
		'navigation' => 'navigation'
	],

    /*
     * Whether to add the form errors inline in each component
     * When activated a div will render at the bottom of a component.
     * To disable the red coller of the input. Change the class name in the css settings.
     * It is possible to override this value for a component. Use `show-errors` with true or false.
     */
    'inline_errors' => true,

    /*
     * Define the default attributes for a model select component.
     */
    'model_select' => [
        'key_attribute'   => 'id',
        'value_attribute' => 'name',
    ],

    /*
     * Customize the name of css-classes
     */
    'css' => [
        'form' => [
            'group' => 'form-group',
			'floating' => 'form-floating',
            'input' => [
                'group'   => 'input-group',
                'input'   => 'form-control',
                'label'   => '',
                'prepend' => 'input-group-prepend',
                'append'  => 'input-group-append',
                'text'    => 'input-group-text',
            ],
            'label'    => 'form-label',
            'select'   => 'custom-select',
            'checkbox' => [
                'input'  => 'custom-control-input',
                'div'  => 'custom-control',
				'checkbox' => 'custom-checkbox',
				'radio' => 'custom-radio',
				'switch' => 'custom-switch',
                'label'  => 'custom-control-label',
                'inline' => 'custom-control-inline',
            ],
        ],
        'error' => [
            'inline' => [
                'input' => 'is-invalid',
                'div'   => 'invalid-feedback',
            ],
            'component' => [
                'group'  => 'alert',
                'header' => 'alert-heading',
                'ul'     => '',
                'li'     => '',
            ],
        ],
        'navigation' => [
            'item'   => 'nav-item',
            'active' => 'active',
            'link'   => 'nav-link',
            'icon'   => 'icon',
        ],
    ],
];
