<?php

namespace UES\RegAcadBundle\Entity;

use Doctrine\ORM\Mapping  as ORM;

/**
 * Description of CumExigido
 * @ORM\Entity 
 * @ORM\Table(name="reg_acad.cum_exigido")
 */
class CumExigido {
    /** 
     * @ORM\Id 
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    protected $id;
    
    /**
     * @ORM\Column(type="float")
     */
    protected $cum;
    
    /**
     * @ORM\Column(length="200")
     */
    protected $condicion;
    
    /** @ORM\ManyToOne(targetEntity="UES\RegAcadBundle\Entity\Carrera") */
    protected $carrera;

    //Establecer los valores por defecto
    public function __construct() {
    }
    
    public function __toString(){
        return $this->cum;
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
     * Set cum
     *
     * @param float $cum
     */
    public function setCum($cum)
    {
        $this->cum = $cum;
    }

    /**
     * Get cum
     *
     * @return float 
     */
    public function getCum()
    {
        return $this->cum;
    }

    /**
     * Set condicion
     *
     * @param string $condicion
     */
    public function setCondicion($condicion)
    {
        $this->condicion = $condicion;
    }

    /**
     * Get condicion
     *
     * @return string 
     */
    public function getCondicion()
    {
        return $this->condicion;
    }

    /**
     * Set carrera
     *
     * @param UES\RegAcadBundle\Entity\Carrera $carrera
     */
    public function setCarrera(\UES\RegAcadBundle\Entity\Carrera $carrera)
    {
        $this->carrera = $carrera;
    }

    /**
     * Get carrera
     *
     * @return UES\RegAcadBundle\Entity\Carrera 
     */
    public function getCarrera()
    {
        return $this->carrera;
    }
}