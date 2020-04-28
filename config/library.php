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
            'checkbox' => [
                'group' => 'form-check',
                'input' => 'form-check-input',
                'inline' => 'form-check-inline',
                'label' => 'form-check-label'
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
