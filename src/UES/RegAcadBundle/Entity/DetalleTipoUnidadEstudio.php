<?php

namespace UES\RegAcadBundle\Entity;

use Doctrine\ORM\Mapping  as ORM;

/**
 * Description of DetalleTipoUnidadEstudio
 * @ORM\Entity 
 * @ORM\Table(name="reg_acad.detalle_tipo_unidad_estudio",
 *      uniqueConstraints={@ORM\UniqueConstraint(name="detalle_tipo_unidad_estudio_unique",columns={"carrera_id", "tipo_unidad_estudio_id"})}
 * )
 */
class DetalleTipoUnidadEstudio {
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
    
    /** @ORM\ManyToOne(targetEntity="UES\RegAcadBundle\Entity\Carrera") */
    protected $carrera;
    
    /** 
     * @ORM\ManyToOne(targetEntity="UES\RegAcadBundle\Entity\TipoUnidadEstudio") 
     * @ORM\JoinColumn(name="tipo_unidad_estudio_id", referencedColumnName="id")
     */
    protected $tipoUnidadEstudio;

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
     * Set tipoUnidadEstudio
     *
     * @param UES\RegAcadBundle\Entity\TipoUnidadEstudio $tipoUnidadEstudio
     */
    public function setTipoUnidadEstudio(\UES\RegAcadBundle\Entity\TipoUnidadEstudio $tipoUnidadEstudio)
    {
        $this->tipoUnidadEstudio = $tipoUnidadEstudio;
    }

    /**
     * Get tipoUnidadEstudio
     *
     * @return UES\RegAcadBundle\Entity\TipoUnidadEstudio 
     */
    public function getTipoUnidadEstudio()
    {
        return $this->tipoUnidadEstudio;
    }
}