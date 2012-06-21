<?php
namespace UES\RegAcadBundle\Entity;

use Doctrine\ORM\Mapping;

/**
 * Description of UnidadEstudio
 * @ORM\Entity 
 * @ORM\Table(name="reg_acad.unidad_estudio")
 */
class UnidadEstudio {
    /** 
     * @ORM\Id 
     * @ORM\Column(type="Integer")
     * @ORM\GeneratedValue
     */
    protected $id;
    
    /** @ORM\Colum(length="15") */
    protected $codigo;
    
    /**
     * @ORM\Column(Type="text")
     */
    protected $nombre;

        //Establecer los valores por defecto
    public function __construct() {
    }
    
    public function __toString(){
        return '('.$this->codigo.') '.$this->nombre;
    }
}
?>