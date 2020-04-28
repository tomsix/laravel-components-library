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
            'input' => 'form-control',
            'label' => '',
            'select' => 'custom-control-select',
            'checkbox' => [
                'group' => 'custom-control custom-checkbox',
                'radio' => 'custom-control custom-radio',
                'input' => 'custom-control-input',
                'label' => 'custom-control-label',
                'inline' => 'custom-control-inline',
            ],
            'file' => [
                'group' => 'custom-file',
                'input' => 'custom-file-input',
                'label' => 'custom-file-label'
            ]
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
