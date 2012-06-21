<?php
namespace UES\RegAcadBundle\Entity;

use Doctrine\ORM\Mapping;

/**
 *
 * @ORM\Entity 
 * @ORM\Table(name="reg_acad.tipo_curso_electiva")
 */
class TipoCursoElectiva {
    
    /** 
     * @ORM\Id 
     * @ORM\Column(type="Integer")
     * @ORM\GeneratedValue
     */
    protected $id;
    
    /** @ORM\Column(length=10) */
    protected $codigo;
    
    /** @ORM\Column(length=100) */
    protected $descripcion;
    
    //Establecer los valores por defecto
    public function __construct() {
    }
    
    public function __toString(){
        return $this->descripcion;
    }
}

?>
