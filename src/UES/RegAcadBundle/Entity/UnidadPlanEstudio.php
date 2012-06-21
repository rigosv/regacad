<?php
namespace UES\RegAcadBundle\Entity;

use Doctrine\ORM\Mapping;

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

    //Establecer los valores por defecto
    public function __construct() {
    }
    
    public function __toString(){
        return $this->id;
    }
}
?>