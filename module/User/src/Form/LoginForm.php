<?php

namespace User\Form;

// Filename: /module/User/src/User/Form/LoginForm.php

use Zend\Form\Element;
use Zend\Form\Form;

class LoginForm extends Form
{

    public function __construct($name=null)
    {
        parent::__construct('login');

        $this->add([
            'name' => 'usuario',
            'type' => Element\Text::class,
            'options' => [
                'label' => 'Usuário'
            ]
        ]);

        $this->add([
            'name' => 'senha',
            'type' => Element\Password::class,
            'options' => [
                'label' => 'Senha'
            ]
        ]);


        $this->add([
            'name' => 'submit',
            'type' => Element\Submit::class,
            'attributes' => [
                'value' => 'Entrar',
                'id' => 'submitbutton'
            ]
        ]);

        $this->add(array(
            'type' => Element\Submit::class,
            'name' => 'submit',
            'attributes' => array(
                'value' => 'entrar'
            )
        ));
    }


}