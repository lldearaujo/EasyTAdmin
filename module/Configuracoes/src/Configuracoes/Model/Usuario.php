<?php
/**
 * Created by PhpStorm.
 * User: Leonardo
 * Date: 24/09/2017
 * Time: 16:02
 */

namespace Configuracoes\Model;



use Zend\Filter\StringTrim;
use Zend\InputFilter\InputFilter;
use Zend\Filter\StripTags;
use Zend\Filter\ToInt;
use Zend\InputFilter\InputFilterAwareInterface;
use Zend\InputFilter\InputFilterInterface;
use Zend\Mvc\Exception\DomainException;
use Zend\Validator\StringLength;

class Usuario implements InputFilterAwareInterface
{
    public $id;
    public $nome;
    public $usuario;
    public $idpermissao;

    private $inputFilter;

    public function exchangeArray(array $data)
    {
        $this-> id = (!empty($data['id'])) ? $data['id'] : null;
        $this-> nome = (!empty($data['nome'])) ? $data['nome'] : null;
        $this-> usuario = (!empty($data['usuario'])) ? $data['usuario'] : null;
        $this-> senha = (!empty($data['senha'])) ? $data['senha'] : null;
        $this-> idpermissao = (!empty($data['idpermissao'])) ? $data['idpermissao'] : null;
    }

    public function setInputFilter(InputFilterInterface $inputFilter){
        throw new DomainException(sprintf(
            '%s does not allow injection of an alternate input filter',
            __CLASS__
        ));
    }

    public function getInputFilter()
    {
        if ($this->inputFilter){
            return $this->inputFilter;
        }

        $inputFilter = new InputFilter();

        $inputFilter->add([
            'name' => 'nome',
            'required' => true,
            'filters' => [
                ['name' => StripTags::class],
                ['name' => StringTrim::class],
            ],
            'validators' => [
                [
                    'name' => StringLength::class,
                    'options' => [
                        'enconding' => 'UTF-8',
                        'min' => 1,
                        'max' => 100,
                    ],
                ],
            ],
        ]);

        $inputFilter->add([
            'name' => 'usuario',
            'required' => true,
            'filters' => [
                ['name' => StripTags::class],
                ['name' => StringTrim::class],
            ],
            'validators' => [
                [
                    'name' => StringLength::class,
                    'options' => [
                        'enconding' => 'UTF-8',
                        'min' => 1,
                        'max' => 32,
                    ],
                ],
            ],
        ]);

        $inputFilter->add([
            'name' => 'idpermissao',
            'required' => true,
            'filters' => [
                ['name' => ToInt::class],


            ],
        ]);

        $this->inputFilter = $inputFilter;
        return $this->inputFilter;
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