<?php
namespace UES\RegAcadBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Description of TipoUnidadEstudio
 * @ORM\Entity 
 * @ORM\Table(name="reg_acad.tipo_unidad_estudio")
 */
class TipoUnidadEstudio {
    /** 
     * @ORM\Id 
     * @ORM\Column(type="Integer")
     * @ORM\GeneratedValue
     */
    protected $id;
    
    /** 
     * @ORM\Colum(length="15") 
     */
    protected $codigo;
    
    /**
     * @ORM\Colum(length="50")
     */
    protected $descripcion;

        //Establecer los valores por defecto
    public function __construct() {
    }
    
    public function __toString(){
        return $this->descripcion;
    }
}
?>