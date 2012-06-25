<?php

namespace UES\RegAcadBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Description of Area
 * @ORM\Entity 
 * @ORM\Table(name="reg_acad.area")
 */
class Area {
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
     * @ORM\Colum(length="200")
     */
    protected $descripcion;
    
    /** @ORM\ManyToOne(targetEntity="UES\RegAcadBundle\Entity\Carrera") */
    protected $carrera;

    //Establecer los valores por defecto
    public function __construct() {
    }
    
    public function __toString(){
        return $this->descripcion;
    }
}
?>