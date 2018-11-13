<?php

namespace Application\Form;

use Zend\Form\Form;
use Zend\Form\Fieldset;
use Zend\InputFilter\InputFilter;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CanteenForm
 *
 * @author Taras
 */
class CanteenForm extends Form {

    public function __construct() {
        // Define form name
        parent::__construct('login-form');

        // Set POST method for this form
        $this->setAttribute('method', 'post');

        $this->addElements();
        $this->addInputFilter();
    }

    protected function addElements() {
        $this->add([
            'type' => 'text',
            'name' => 'name',
            'options' => [
                'label' => 'Name',
            ],
        ]);
        $this->add([
            'type' => 'text',
            'name' => 'adress',
            'options' => [
                'label' => 'Adress',
            ],
        ]);
        $this->add([
            'type' => 'text',
            'name' => 'post',
            'options' => [
                'label' => 'Post code',
            ],
        ]);
        $this->add([
            'type' => 'text',
            'name' => 'city',
            'options' => [
                'label' => 'City',
            ],
        ]);
        $this->add([
            'type' => 'text',
            'name' => 'city',
            'options' => [
                'label' => 'City',
            ],
        ]);

        // Add "redirect_url" field
        $this->add([
            'type' => 'hidden',
            'name' => 'redirect_url'
        ]);

        // Add the CSRF field
        $this->add([
            'type' => 'csrf',
            'name' => 'csrf',
            'options' => [
                'csrf_options' => [
                    'timeout' => 600
                ]
            ],
        ]);
    }

    protected function addInputFilter() {
        $this->inputFilter->add([
            'name' => 'name',
            'required' => false,
            'filters' => [
                ['name' => 'StringTrim']
            ],
            'validators' => [
                [
                    'name' => 'StringLength',
                    'options' => [
                        'min' => 3,
                        'max' => 200
                    ]
                ],
            ],
        ]);
        $this->inputFilter->add([
            'name' => 'adress',
            'required' => false,
            'filters' => [
                ['name' => 'StringTrim']
            ],
            'validators' => [
                [
                    'name' => 'StringLength',
                    'options' => [
                        'min' => 3,
                        'max' => 200
                    ]
                ],
            ],
        ]);
        $this->inputFilter->add([
            'name' => 'post',
            'required' => false,
            'filters' => [
                ['name' => 'StringTrim']
            ],
            'validators' => [
                [
                    'name' => 'StringLength',
                    'options' => [
                        'min' => 3,
                        'max' => 200
                    ]
                ],
            ],
        ]);
        $this->inputFilter->add([
            'name' => 'redirect_url',
            'required' => false,
            'filters' => [
                ['name' => 'StringTrim']
            ],
            'validators' => [
                [
                    'name' => 'StringLength',
                    'options' => [
                        'min' => 3,
                        'max' => 200
                    ]
                ],
            ],
        ]);
        $this->inputFilter->add([
            'name' => 'redirect_url',
            'required' => false,
            'filters' => [
                ['name' => 'StringTrim']
            ],
            'validators' => [
                [
                    'name' => 'StringLength',
                    'options' => [
                        'min' => 3,
                        'max' => 200
                    ]
                ],
            ],
        ]);
    }

}
