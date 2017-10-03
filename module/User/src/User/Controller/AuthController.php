<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/User for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace User\Controller;

use User\Form\LoginForm;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;


class AuthController extends AbstractActionController
{
    public function __construct(LoginForm $form)
    {
        $this->form = $form;
    }


    public function loginAction()
    {

        $form = $this->form;
        return new ViewModel([
            $form
        ]);
    }

    public function logoutAction(){
        return array();
    }

}
