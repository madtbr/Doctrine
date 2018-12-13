<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\EnderecoRepository")
 */
class Endereco
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var string
     * @ORM\Column(type="string", length=50)
     */
    private $numero;

    /**
     * @var string
     * @ORM\Column(type="string", length=50)
     */
    private $bairro;

    /**
     * @var string
     * @ORM\Column(type="string", length=150)
     */
    private $rua;



    /**
     * @param mixed $id
     * @return Endereco
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * @param string $numero
     * @return Endereco
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;
        return $this;
    }

    /**
     * @return string
     */
    public function getBairro()
    {
        return $this->bairro;
    }

    /**
     * @param string $bairro
     * @return Endereco
     */
    public function setBairro($bairro)
    {
        $this->bairro = $bairro;
        return $this;
    }

    /**
     * @return string
     */
    public function getRua()
    {
        return $this->rua;
    }

    /**
     * @param string $rua
     * @return Endereco
     */
    public function setRua($rua)
    {
        $this->rua = $rua;
        return $this;
    }




}
