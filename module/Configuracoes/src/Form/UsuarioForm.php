<?php

namespace Configuracoes\Form;


use Zend\Form\Element;
use Zend\Form\Form;

class UsuarioForm extends Form
{
    public function __construct($name=null)
    {
        parent::__construct('addusuario');

        $this->add([
            'name'=>'id',
            'type' => 'hidden',
        ]);

        $this->add([
           'name'=>'nome',
            'type' => Element\Text::class,
        ]);

        $this->add([
            'name'=>'usuario',
            'type' => Element\Text::class,
        ]);

        $this->add([
            'name'=>'senha',
            'type' => Element\Password::class,
        ]);

        $this->add([
            'name'=>'idpermissao',
            'type' => Element\Number::class,
            'options' => [
                ''
            ]
        ]);

        $this->add([
            'name'=>'submit',
            'type' => Element\Submit::class,
            'attributes'=> [
                'value'=>'Go',
                'id' => 'submitbutton'
            ]
        ]);

    }

}