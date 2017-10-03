<?php
/**
 * Created by PhpStorm.
 * User: Leonardo
 * Date: 24/09/2017
 * Time: 16:02
 */

namespace Configuracoes\Model;


use Zend\Db\TableGateway\TableGatewayInterface;

class PermissaoTable
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

    public function savePermissao(Permissao $permissao)
    {
        $data = [
            'idpermissao' => $permissao->idpermissao,
            'nome' => $permissao->nome,
            'descricao' => $permissao->descricao,
            'abas' => $permissao->abas,
        ];

        $idpermissao = (int) $permissao->idpermissao;

        if($idpermissao === 0){

            $this->tableGateway->insert($data);
            return;
        }



        if (! $this->getPermisao($idpermissao)) {
            throw new RuntimeException(sprintf(
                'Não é possível atualizar a permissao com o identificador, %d não existe.',
                $permissao
            ));
        }

        $this->tableGateway->update($data, ['idpermissao' => $idpermissao]);
    }



    public function getPermissao($idpermissao)
    {
        $idpermissao = (int) $idpermissao;
        $rowset = $this->tableGateway->select(['idpermissao'=>$idpermissao]);
        $row = $rowset->current();
        if(!$row) {
            throw new RuntimeException(sprintf(
                'Não foi possível localizar a linha com o identificador %d', $idpermissao
            ));
        }
        return $row;
    }

    public function deletePermissao($idpermissao)
    {
        $this->tableGateway->delete(['$idpermissao' => (int)$idpermissao]);
    }

}