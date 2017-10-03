<?php
/**
 * Created by PhpStorm.
 * User: Leonardo
 * Date: 24/09/2017
 * Time: 16:02
 */

namespace Configuracoes\Model;


use Zend\Db\TableGateway\TableGatewayInterface;

class UsuarioTable
{
    private $tableGateway;

    public function __construct(TableGatewayInterface $tableGateway)
    {
        $this->tableGateway = $tableGateway;
    }
    public function fetchAll()
    {
        return $this->tableGateway->select();
    }

    public function saveUser(Usuario $usuario)
    {
        $data = [
            'id' => $usuario->id,
            'nome' => $usuario->nome,
            'usuario' => $usuario->usuario,
            'senha' => $usuario->senha,
            'idpermissao' => $usuario->idpermissao
        ];

        $id = (int) $usuario->id;

        if($id === 0){

            $this->tableGateway->insert($data);
            return;
        }



        if (! $this->getUsuario($id)) {
            throw new RuntimeException(sprintf(
                'Não é possível atualizar o Usuario com o identificador, %d não existe.',
                $id
            ));
        }

        $this->tableGateway->update($data, ['id' => $id]);
    }



    public function getUsuario($id)
    {
        $id = (int) $id;
        $rowset = $this->tableGateway->select(['id'=>$id]);
        $row = $rowset->current();
        if(!$row) {
            throw new RuntimeException(sprintf(
                'Não foi possível localizar a linha com o identificador %d', $id
            ));
        }
        return $row;
    }

    public function deleteUser($id)
    {
        $this->tableGateway->delete(['id' => (int)$id]);
    }

}