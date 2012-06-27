<?php

/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

namespace UES\RegAcadBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Description of RequisitosOpcionales
 * @ORM\Entity 
 * @ORM\Table(name="reg_acad.requisitos_opcionales",
 *   uniqueConstraints={@ORM\UniqueConstraint(name="requisitos_opcionales_unique",columns={"unidad_plan_estudio_id", "carrera_id"})}
 * )
 */
class RequisitosOpcionales {
    /** 
     * @ORM\Id 
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    protected $id;
    
    /** @ORM\Column(type="integer") */
    protected $cantidad;
    
    /** 
     * @ORM\ManyToOne(targetEntity="UES\RegAcadBundle\Entity\UnidadPlanEstudio") 
     * @ORM\JoinColumn(name="unidad_plan_estudio_id", referencedColumnName="id")
     */
    protected $unidadPlanEstudio;
    
    /** @ORM\ManyToOne(targetEntity="UES\RegAcadBundle\Entity\Carrera") */
    protected $carrera;
    
    /** 
     * @ORM\ManyToOne(targetEntity="UES\RegAcadBundle\Entity\TipoRequisito") 
     * @ORM\JoinColumn(name="tipo_requisito_id", referencedColumnName="id")
     */
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