<?php

namespace UES\RegAcadBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * 
 * @ORM\Entity 
 * @ORM\Table(name="reg_acad.grado")
 */
class Grado {
    /** 
     * @ORM\Id 
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    protected $id;
    
    /** @ORM\Column(length=10, unique=true) */
    protected $codigo;
    
    /** @ORM\Column(length=30, name="descripcion_grado") */
    protected $descripcionGrado;
    
    /** @ORM\Column(length=30, name="descripcion_masculino") */
    protected $descripcionMasculino;
    
    /** @ORM\Column(length=30, name="descripcion_femenino") */
    protected $descripcionFemenino;

        //Establecer los valores por defecto
    public function __construct() {
    }
    
    public function __toString(){
        return $this->descripcionMasculino;
    }

    /**
     * Get id
     *
     * @return Integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set descripcionMasculino
     *
     * @param string $descripcionMasculino
     */
    public function setDescripcionMasculino($descripcionMasculino)
    {
        $this->descripcionMasculino = $descripcionMasculino;
    }

    /**
     * Get descripcionMasculino
     *
     * @return string 
     */
    public function getDescripcionMasculino()
    {
        return $this->descripcionMasculino;
    }

    /**
     * Set descripcionFemenino
     *
     * @param string $descripcionFemenino
     */
    public function setDescripcionFemenino($descripcionFemenino)
    {
        $this->descripcionFemenino = $descripcionFemenino;
    }

    /**
     * Get descripcionFemenino
     *
     * @return string 
     */
    public function getDescripcionFemenino()
    {
        return $this->descripcionFemenino;
    }

    /**
     * Set descripcionGrado
     *
     * @param string $descripcionGrado
     * @return Grado
     */
    public function setDescripcionGrado($descripcionGrado)
    {
        $this->descripcionGrado = $descripcionGrado;
        return $this;
    }

    /**
     * Get descripcionGrado
     *
     * @return string 
     */
    public function getDescripcionGrado()
    {
        return $this->descripcionGrado;
    }

    /**
     * Set codigo
     *
     * @param string $codigo
     * @return Grado
     */
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;
        return $this;
    }

    /**
     * Get codigo
     *
     * @return string 
     */
    public function getCodigo()
    {
        return $this->codigo;
    }
}