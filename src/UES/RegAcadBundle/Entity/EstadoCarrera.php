<?php
namespace UES\RegAcadBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Description of EstadoCarrera
 * @ORM\Entity 
 * @ORM\Table(name="reg_acad.estado_carrera")
 */
class EstadoCarrera {
    /** 
     * @ORM\Id 
     * @ORM\Column(type="Integer")
     * @ORM\GeneratedValue
     */
    protected $id;
    
    /** @ORM\Column(length=5, unique=true) */
    protected $codigo;
    
    /** @ORM\Column(length=50) */
    protected $descripcion;

    //Establecer los valores por defecto
    public function __construct() {
    }
    
    public function __toString(){
        return $this->descripcion;
    }
}
?>