<?php

namespace UES\RegAcadBundle\Entity;

use Doctrine\ORM\Mapping  as ORM;

/**
 * Description of DetalleTipoUnidadEstudio
 * @ORM\Entity 
 * @ORM\Table(name="reg_acad.detalle_tipo_unidad_estudio")
 */
class DetalleTipoUnidadEstudio {
    /** 
     * @ORM\Id 
     * @ORM\Column(type="Integer")
     * @ORM\GeneratedValue
     */
    protected $id;
    
    /**
     * @ORM\Column(Type="integer") 
     */
    protected $cantidad;

    //Establecer los valores por defecto
    public function __construct() {
    }
    
    public function __toString(){
        return $this->id;
    }
}
?>