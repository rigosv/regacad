<?php

namespace UES\RegAcadBundle\Entity;

use Doctrine\ORM\Mapping;

/**
 * Description of EquivalenciaCarrera
 * @ORM\Entity 
 * @ORM\Table(name="reg_acad.equivalencia_carrera")
 */
class EquivalenciaCarrera {
    /** 
     * @ORM\Id 
     * @ORM\Column(type="Integer")
     * @ORM\GeneratedValue
     */
    protected $id;
    
    //Establecer los valores por defecto
    public function __construct() {
    }
    
    public function __toString(){
        return $this->id;
    }
}
?>