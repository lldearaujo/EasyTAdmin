<?php
/**
 * Created by PhpStorm.
 * User: Leonardo
 * Date: 24/09/2017
 * Time: 20:46
 */

namespace Configuracoes\Form;


use Zend\Form\Form;

class PermissaoForm extends Form
{
    public function __construct($name=null)
    {
        parent::__construct('addpermissao');

        $this->add([
            'name'=>'idpermissao',
            'type' => 'hidden',
        ]);

        $this->add([
           'name'=>'nome',
            'type' => 'text',
        ]);

        $this->add([
            'name'=>'descricao',
            'type' => 'text',
        ]);

        $this->add([
            'name'=>'abas',
            'type' => 'text',
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