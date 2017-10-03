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

class Permissao implements InputFilterAwareInterface
{
    public $idpermissao;
    public $nome;
    public $descricao;
    public $abas;

    private $inputFilter;

    //Converte o Objeto em Array
    public function exchangeArray(array $data)
    {
        $this-> idpermissao = (!empty($data['idpermissao'])) ? $data['idpermissao'] : null;
        $this-> nome = (!empty($data['nome'])) ? $data['nome'] : null;
        $this-> descricao = (!empty($data['descricao'])) ? $data['descricao'] : null;
        $this-> abas = (!empty($data['abas'])) ? $data['abas'] : null;
    }

    public function setInputFilter(InputFilterInterface $inputFilter){
        throw new DomainException(sprintf(
            '%s does not allow injection of an alternate input filter',
            __CLASS__
        ));
    }

    public function getInputFilter()
    {
        if ($this->inputFilter)
        {
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
            'name' => 'abas',
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
                        'max' => 20,
                    ],
                ],
            ],
        ]);


        $this->inputFilter = $inputFilter;
        return $this->inputFilter;
    }


    //Converte o Objeto para Array
    public function getArrayCopy()
    {
        return
        [
          'idpermissao' => $this->idpermissao,
            'nome' => $this->nome,
            'descricao' => $this->descricao,
            'abas' => $this->abas
        ];
    }






}