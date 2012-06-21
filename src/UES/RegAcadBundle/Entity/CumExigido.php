<?php

namespace UES\RegAcadBundle\Entity;

use Doctrine\ORM\Mapping;

/**
 * Description of CumExigido
 * @ORM\Entity 
 * @ORM\Table(name="reg_acad.cum_exigido")
 */
class CumExigido {
    /** 
     * @ORM\Id 
     * @ORM\Column(type="Integer")
     * @ORM\GeneratedValue
     */
    protected $id;
    
    /**
     * @ORM\Column(Type="float")
     */
    protected $cum;
    
    /**
     * @ORM\Colum(length="200")
     */
    protected $condicion;

    //Establecer los valores por defecto
    public function __construct() {
    }
    
    public function __toString(){
        return $this->cum;
    }
}
?>