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
use Zend\Authentication\AuthenticationServiceInterface;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Zend\Authentication\Adapter\DbTable\CallbackCheckAdapter;


class AuthController extends AbstractActionController
{
    /**
     * @var AuthenticationServiceInterface
     */
    private $authService;

    public function __construct(AuthenticationServiceInterface $authService)
    {
        $this->authService = $authService;
    }


    public function loginAction()
    {
        $loginForm = new LoginForm();
        $messageError = null;
        if($this->getRequest()->isPost()){
            $data = $this->getRequest()->getPost();
            $loginForm->setData($data);
            if($loginForm->isValid()){
                $loginFormData = $loginForm->getData();
                /** @var CallbackCheckAdapter $authAdapter */
                $authAdapter = $this->authService->getAdapter();
                $authAdapter->setIdentity($loginFormData['usuario']);
                $authAdapter->setCredential($loginFormData['senha']);

                $result = $this->authService->authenticate();
                if ($result->isValid()){
                    return $this->redirect()->toRoute('home');
                } else {
                    $messageError = "Login Inválido, tente novamente.";
                }
            }
        }
        return new ViewModel([
            'loginForm' => $loginForm,
            'messageError' => $messageError
        ]);
    }

    public function logoutAction(){
        $this->authService->clearIdentity();
        return $this->redirect()->toRoute('login');
    }

}
