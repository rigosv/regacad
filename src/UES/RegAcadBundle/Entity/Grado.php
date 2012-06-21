<?php

namespace UES\RegAcadBundle\Entity;

use Doctrine\ORM\Mapping;

/**
 * 
 * @ORM\Entity 
 * @ORM\Table(name="reg_acad.grado")
 */
class Grado {
    /** 
     * @ORM\Id 
     * @ORM\Column(type="Integer")
     * @ORM\GeneratedValue
     */
    protected $id;
    
    /** @ORM\Colum(length="30") */
    protected $descripcionMasculino;
    
    /** @ORM\Colum(length="30") */
    protected $descripcionFemenino;

        //Establecer los valores por defecto
    public function __construct() {
    }
    
    public function __toString(){
        return $this->descripcionMasculino;
    }
}
?>