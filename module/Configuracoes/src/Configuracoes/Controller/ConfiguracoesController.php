<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/Configuracoes for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Configuracoes\Controller;

use Configuracoes\Form\UsuarioForm;
use Configuracoes\Model\Usuario;
use Configuracoes\Model\UsuarioTable;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class ConfiguracoesController extends AbstractActionController
{
    /**
     * @var UsuarioTable
     */
    public function __construct(UsuarioTable $table)
    {
        $this->table = $table;
    }

    public function indexAction()
    {
        $usuarioTable = $this->table;

        return new ViewModel([
           'usuarios'=>$usuarioTable->fetchAll()
        ]);

    }

    //Método do controller que chama a view AddUser e passa os devidos comando e valores.
    public function adduserAction()
    {
        $form = new UsuarioForm();
        $form->get('submit')->setValue('Add');

        $request = $this->getRequest();

        if(!$request->isPost()){
            return['form' => $form];
        }

        $usuario = new Usuario();
        $form->setInputFilter($usuario->getInputFilter());
        $form->setData($request->getPost());


        if (!$form->isValid()){
            return ['form' => $form];
        }

        $usuario->exchangeArray($form->getData());
        $this->table->saveUser($usuario);
        return $this->redirect()->toRoute('configuracoes');
    }


    //Método do controller que chama a view EdtUser e passa os devidos comando e valores.
    public function edtuserAction()
    {
        $id = (int) $this->params()->fromRoute('id', 0);

        if(0 === $id){
            return $this->redirect()->toRoute('configuracoes', ['action' => 'adduser']);
        }

        // Recuperar o álbum com o id especificado. Isso aumenta
        // uma exceção se o usuário não for encontrado, o que deverá resultar
        // em redirecionamento para a página de destino.

        try {
            $usuario = $this->table->getUsuario($id);
        } catch (\Exception $e) {
            return $this->redirect()->toRoute('configuracoes',['action'=> 'index']);
        }

        $form = new UsuarioForm();
        $form->bind($usuario);
        $form->get('submit')->setAttribute('value', 'Edit');

        $request = $this->getRequest();
        $viewData = ['id' => $id, 'form' => $form];

        if (!$request->isPost()){
            return $viewData;
        }

        $form->setInputFilter($usuario->getInputFilter());
        $form->setData($request->getPost());

        if (!$form->isValid()){
            return $viewData;
        }

        $this->table->saveUser($usuario);

        return $this->redirect()->toRoute('configuracoes', ['action' => 'index']);
    }

    public function deleteUserAction()
    {
        $id = (int) $this->params()->fromRoute('id', 0);
        if(!$id){
            return $this->redirect()->toRoute('configuracoes');
        }
        $this->table->deleteUser($id);
        return $this->redirect()->toRoute('configuracoes');
    }

}
