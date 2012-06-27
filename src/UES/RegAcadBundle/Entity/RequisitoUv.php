<?php

/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

namespace UES\RegAcadBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Description of RequisitoUv
 * @ORM\Entity 
 * @ORM\Table(name="reg_acad.requisito_uv")
 */
class RequisitoUv {
    /** 
     * @ORM\Id 
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    protected $id;
    
    /**
     * @ORM\Column(type="integer")
     */
    protected $cantidad;
    
    /** @ORM\ManyToOne(targetEntity="UES\RegAcadBundle\Entity\Area") */
    protected $area;
    
    /** 
     * @ORM\ManyToOne(targetEntity="UES\RegAcadBundle\Entity\UnidadPlanEstudio") 
     * @ORM\JoinColumn(name="unidad_plan_estudio_id", referencedColumnName="id")
     */
    protected $unidadPlanEstudio;
    
    //Establecer los valores por defecto
    public function __construct() {
    }
    
    public function __toString(){
        return $this->id;
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
     * Set cantidad
     *
     * @param integer $cantidad
     */
    public function setCantidad($cantidad)
    {
        $this->cantidad = $cantidad;
    }

    /**
     * Get cantidad
     *
     * @return integer 
     */
    public function getCantidad()
    {
        return $this->cantidad;
    }

    /**
     * Set area
     *
     * @param UES\RegAcadBundle\Entity\Area $area
     */
    public function setArea(\UES\RegAcadBundle\Entity\Area $area)
    {
        $this->area = $area;
    }

    /**
     * Get area
     *
     * @return UES\RegAcadBundle\Entity\Area 
     */
    public function getArea()
    {
        return $this->area;
    }

    /**
     * Set unidadPlanEstudio
     *
     * @param UES\RegAcadBundle\Entity\UnidadPlanEstudio $unidadPlanEstudio
     */
    public function setUnidadPlanEstudio(\UES\RegAcadBundle\Entity\UnidadPlanEstudio $unidadPlanEstudio)
    {
        $this->unidadPlanEstudio = $unidadPlanEstudio;
    }

    /**
     * Get unidadPlanEstudio
     *
     * @return UES\RegAcadBundle\Entity\UnidadPlanEstudio 
     */
    public function getUnidadPlanEstudio()
    {
        return $this->unidadPlanEstudio;
    }
}