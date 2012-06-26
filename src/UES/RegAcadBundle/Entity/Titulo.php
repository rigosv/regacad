<?php

/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

namespace UES\RegAcadBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Description of Titulo
 * @ORM\Entity 
 * @ORM\Table(name="reg_acad.titulo")
 * @author ogir
 */
class Titulo {
    /** 
     * @ORM\Id 
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    protected $id;
    
    /** @ORM\Column(type="text", name="descripcion_masculino")   */
    protected $descripcionMasculino;
    
    /** @ORM\Column(type="text", name="descripcion_femenino") */
    protected $descripcionFemenino;
    
    /** @ORM\ManyToOne(targetEntity="UES\RegAcadBundle\Entity\Grado") */
    protected $Grado;
    
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
     * @param text $descripcionMasculino
     */
    public function setDescripcionMasculino($descripcionMasculino)
    {
        $this->descripcionMasculino = $descripcionMasculino;
    }

    /**
     * Get descripcionMasculino
     *
     * @return text 
     */
    public function getDescripcionMasculino()
    {
        return $this->descripcionMasculino;
    }

    /**
     * Set descripcionFemenino
     *
     * @param text $descripcionFemenino
     */
    public function setDescripcionFemenino($descripcionFemenino)
    {
        $this->descripcionFemenino = $descripcionFemenino;
    }

    /**
     * Get descripcionFemenino
     *
     * @return text 
     */
    public function getDescripcionFemenino()
    {
        return $this->descripcionFemenino;
    }

    /**
     * Set Grado
     *
     * @param UES\RegAcadBundle\Entity\Grado $grado
     */
    public function setGrado(\UES\RegAcadBundle\Entity\Grado $grado)
    {
        $this->Grado = $grado;
    }

    /**
     * Get Grado
     *
     * @return UES\RegAcadBundle\Entity\Grado 
     */
    public function getGrado()
    {
        return $this->Grado;
    }
}