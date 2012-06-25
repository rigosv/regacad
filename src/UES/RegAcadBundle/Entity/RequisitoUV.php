<?php

/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

namespace UES\RegAcadBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Description of RequisitoUV
 * @ORM\Entity 
 * @ORM\Table(name="reg_acad.RequisitoUV")
 */
class RequisitoUV {
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