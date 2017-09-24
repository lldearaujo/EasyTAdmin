<?php
/**
 * Created by PhpStorm.
 * User: Leonardo
 * Date: 24/09/2017
 * Time: 16:02
 */

namespace Configuracoes\Model;


class Usuario
{
    public $id;
    public $nome;
    public $usuario;
    public $idpermissao;

    public function exchangeArray(array $data)
    {
        $this-> id = (!empty($data['id'])) ? $data['id'] : null;
        $this-> nome = (!empty($data['nome'])) ? $data['nome'] : null;
        $this-> usuario = (!empty($data['usuario'])) ? $data['usuario'] : null;
        $this-> idpermissao = (!empty($data['idpermissao'])) ? $data['idpermissao'] : null;
    }

    public function getArrayCopy()
    {
        return
        [
          'id' => $this->id,
            'nome' => $this->nome,
            'usuario' => $this->usuario,
            'idpermissao' => $this->idpermissao
        ];
    }
}