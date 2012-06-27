<?php

/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

namespace UES\RegAcadBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Description of Requisito
 * @ORM\Entity 
 * @ORM\Table(name="reg_acad.requisito",
 *   uniqueConstraints={@ORM\UniqueConstraint(name="requisito_unique",columns={"unidad_plan_estudio_id", "requisito_id"})}      
 * )
 */
class Requisito {
    /** 
     * @ORM\Id 
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    protected $id;
    
    /** 
     * @ORM\ManyToOne(targetEntity="UES\RegAcadBundle\Entity\UnidadPlanEstudio") 
     * @ORM\JoinColumn(name="unidad_plan_estudio_id", referencedColumnName="id")
     */
    protected $unidadPlanEstudio;
    
    /** @ORM\ManyToOne(targetEntity="UES\RegAcadBundle\Entity\UnidadPlanEstudio") */
    protected $requisito;
    
    /** @ORM\ManyToOne(targetEntity="UES\RegAcadBundle\Entity\TipoRequisito") */
    protected $tipoRequisito;
    
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

    /**
     * Set requisito
     *
     * @param UES\RegAcadBundle\Entity\UnidadPlanEstudio $requisito
     */
    public function setRequisito(\UES\RegAcadBundle\Entity\UnidadPlanEstudio $requisito)
    {
        $this->requisito = $requisito;
    }

    /**
     * Get requisito
     *
     * @return UES\RegAcadBundle\Entity\UnidadPlanEstudio 
     */
    public function getRequisito()
    {
        return $this->requisito;
    }

    /**
     * Set tipoRequisito
     *
     * @param UES\RegAcadBundle\Entity\TipoRequisito $tipoRequisito
     */
    public function setTipoRequisito(\UES\RegAcadBundle\Entity\TipoRequisito $tipoRequisito)
    {
        $this->tipoRequisito = $tipoRequisito;
    }

    /**
     * Get tipoRequisito
     *
     * @return UES\RegAcadBundle\Entity\TipoRequisito 
     */
    public function getTipoRequisito()
    {
        return $this->tipoRequisito;
    }
}