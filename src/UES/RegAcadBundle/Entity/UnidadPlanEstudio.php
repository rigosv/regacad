<?php
namespace UES\RegAcadBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Description of UnidadPlanEstudio
 * @ORM\Entity 
 * @ORM\Table(name="reg_acad.unidad_planEstudio")
 */
class UnidadPlanEstudio {
    /** 
     * @ORM\Id 
     * @ORM\Column(type="Integer")
     * @ORM\GeneratedValue
     */
    protected $id;
    
    
    /**
     * @ORM\Column(Type="boolean")
     */
    protected $materiaAnual;

    /** @ORM\ManyToOne(targetEntity="UES\RegAcadBundle\Entity\TipoUnidadEstudio") */
    protected $tipoUnidadEstudio;
    
    /** @ORM\ManyToOne(targetEntity="UES\RegAcadBundle\Entity\Ciclo") */
    protected $ciclo;
    
    /** @ORM\ManyToOne(targetEntity="UES\RegAcadBundle\Entity\Area") */
    protected $area;
    
    /** @ORM\ManyToOne(targetEntity="UES\RegAcadBundle\Entity\Carrera") */
    protected $carrera;
    
    /** @ORM\ManyToOne(targetEntity="UES\RegAcadBundle\Entity\UnidadEstudio") */
    protected $unidadEstudio;
    
    //Establecer los valores por defecto
    public function __construct() {
    }
    
    public function __toString(){
        return $this->id;
    }
}
?>