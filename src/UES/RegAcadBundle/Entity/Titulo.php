<?php

/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

namespace UES\RegAcadBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Description of Titulo
 * @ORM\Entity 
 * @ORM\Table(name="reg_acad.titulo")
 * @author ogir
 */
class Titulo {
    /** 
     * @ORM\Id 
     * @ORM\Column(type="Integer")
     * @ORM\GeneratedValue
     */
    protected $id;
    
    /** @ORM\Column(Type="text")   */
    protected $descripcionMasculino;
    
    /** @ORM\Column(Type="text") */
    protected $descripcionFemenino;

    //Establecer los valores por defecto
    public function __construct() {
    }
    
    public function __toString(){
        return $this->descripcionMasculino;
    }
}
?>