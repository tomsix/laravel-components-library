<?php

return [

    /*
	 * Whether to add the form errors inline in each component
     * When activated a div will render at the bottom of a component.
     * To disable the red coller of the input. Change the class name in the css settings.
	 */
    'inline_errors' => true,

    /*
     * Customize the name of css-classes
     */

    'css' => [
        'form' => [
            'group' => 'form-group',
            'input' => [
                'group' => 'input-group',
                'input' => 'form-control',
                'label' => '',
                'prepend' => 'input-group-prepend',
                'append' => 'input-group-append',
                'text' => 'input-group-text'
            ],
            'label' => '',
            'select' => 'custom-select', // style="flex: 1 1 0"; is added in the select-tag because of a fault in het Bootstrap class. Changing this class wil disable the style attribute
            'checkbox' => [
                'group' => 'custom-control custom-checkbox',
                'radio' => 'custom-control custom-radio',
                'input' => 'custom-control-input',
                'label' => 'custom-control-label',
                'inline' => 'custom-control-inline',
            ],
            'file' => [
                'group' => 'form-group',
                'input' => 'form-control form-control-file',
                'label' => ''
            ],
            'button' => 'btn'
        ],
        'error' => [
            'inline' => [
                'input' => 'is-invalid',
                'div' => 'invalid-feedback'
            ],
            'component' => [
                'group' => 'alert',
                'header' => 'alert-heading',
                'ul' => '',
                'li' => '',
            ]
        ]
    ]
];
