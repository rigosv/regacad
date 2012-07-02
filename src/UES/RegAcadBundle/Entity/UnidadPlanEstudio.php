<?php
namespace UES\RegAcadBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Description of UnidadPlanEstudio
 * @ORM\Entity 
 * @ORM\Table(name="reg_acad.unidad_planEstudio",
 *   uniqueConstraints={@ORM\UniqueConstraint(name="unidad_plan_estudio_unique",columns={"ciclo_id", "carrera_id", "unidad_estudio_id"})}
 * )
 */
class UnidadPlanEstudio {
    /** 
     * @ORM\Id 
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    protected $id;
    
    
    /** @ORM\Column(type="boolean", name="materia_anual") */
    protected $materiaAnual;
    
    /**
     * @ORM\Column(type="integer", name="nivel_carrera")
     */
    protected $nivelCarrera;

    /** 
     * @ORM\ManyToOne(targetEntity="UES\RegAcadBundle\Entity\TipoUnidadEstudio") 
     * @ORM\JoinColumn(name="tipo_unidad_estudio_id", referencedColumnName="id")
     */
    protected $tipoUnidadEstudio;
    
    /** @ORM\ManyToOne(targetEntity="UES\RegAcadBundle\Entity\Ciclo") */
    protected $ciclo;
    
    /** @ORM\ManyToOne(targetEntity="UES\RegAcadBundle\Entity\Area") */
    protected $area;
    
    /** @ORM\ManyToOne(targetEntity="UES\RegAcadBundle\Entity\Carrera") */
    protected $carrera;
    
    /** 
     * @ORM\ManyToOne(targetEntity="UES\RegAcadBundle\Entity\UnidadEstudio") 
     * @ORM\JoinColumn(name="unidad_estudio_id", referencedColumnName="id")
     */
    protected $unidadEstudio;
    
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
     * Set materiaAnual
     *
     * @param boolean $materiaAnual
     */
    public function setMateriaAnual($materiaAnual)
    {
        $this->materiaAnual = $materiaAnual;
    }

    /**
     * Get materiaAnual
     *
     * @return boolean 
     */
    public function getMateriaAnual()
    {
        return $this->materiaAnual;
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

    /**
     * Set ciclo
     *
     * @param UES\RegAcadBundle\Entity\Ciclo $ciclo
     */
    public function setCiclo(\UES\RegAcadBundle\Entity\Ciclo $ciclo)
    {
        $this->ciclo = $ciclo;
    }

    /**
     * Get ciclo
     *
     * @return UES\RegAcadBundle\Entity\Ciclo 
     */
    public function getCiclo()
    {
        return $this->ciclo;
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
     * Set unidadEstudio
     *
     * @param UES\RegAcadBundle\Entity\UnidadEstudio $unidadEstudio
     */
    public function setUnidadEstudio(\UES\RegAcadBundle\Entity\UnidadEstudio $unidadEstudio)
    {
        $this->unidadEstudio = $unidadEstudio;
    }

    /**
     * Get unidadEstudio
     *
     * @return UES\RegAcadBundle\Entity\UnidadEstudio 
     */
    public function getUnidadEstudio()
    {
        return $this->unidadEstudio;
    }

    /**
     * Set nivelCarrera
     *
     * @param integer $nivelCarrera
     * @return UnidadPlanEstudio
     */
    public function setNivelCarrera($nivelCarrera)
    {
        $this->nivelCarrera = $nivelCarrera;
        return $this;
    }

    /**
     * Get nivelCarrera
     *
     * @return integer 
     */
    public function getNivelCarrera()
    {
        return $this->nivelCarrera;
    }
}