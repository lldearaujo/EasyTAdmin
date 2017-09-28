<?php
/**
 * Created by PhpStorm.
 * User: Leonardo
 * Date: 24/09/2017
 * Time: 20:46
 */

namespace Configuracoes\Form;


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
            'type' => 'text',
        ]);

        $this->add([
            'name'=>'usuario',
            'type' => 'text',
        ]);

        $this->add([
            'name'=>'senha',
            'type' => 'password',
        ]);

        $this->add([
            'name'=>'idpermissao',
            'type' => 'number',
            'options' => [
                ''
            ]
        ]);

        $this->add([
            'name'=>'submit',
            'type' => 'submit',
            'attributes'=> [
                'value'=>'Go',
                'id' => 'submitbutton'
            ]
        ]);

    }

}