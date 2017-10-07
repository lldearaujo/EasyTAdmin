<?php

namespace User\InputFilter;

use Zend\Filter\StringTrim;
use Zend\Filter\StripTags;
use Zend\InputFilter\InputFilter;
use Zend\Validator\NotEmpty;

class LoginInputFilter extends InputFilter {

    public function __construct()
    {

        $this->add([
            'name' => 'usuario',
            'required' => true,
            'filters' => [
                ['name' => StripTags::class],
                ['name' => StringTrim::class],
            ],
            'validators' => [
                [
                    'name' => NotEmpty::class,
                    'options' => [
                        'messages' => [
                            NotEmpty::IS_EMPTY => 'O campo é requerido!'
                        ],
                        'enconding' => 'UTF-8',
                        'min' => 1,
                        'max' => 32,
                    ],
                ],
            ],
        ]);

        $this->add([
            'name' => 'senha',
            'required' => true,
            'filters' => [
                ['name' => StripTags::class],
                ['name' => StringTrim::class],
            ],
            'validators' => [
                [
                    'name' => NotEmpty::class,
                    'options' => [
                        'messages' => [
                            NotEmpty::IS_EMPTY => 'O campo é requerido!'
                        ],
                        'min' => 1,
                        'max' => 32,
                    ],
                ],
            ],
        ]);
    }
}