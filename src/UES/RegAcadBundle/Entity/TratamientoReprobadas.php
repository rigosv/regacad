<?php

/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

namespace UES\RegAcadBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Description of TratamientoReprobadas
 * @ORM\Entity 
 * @ORM\Table(name="reg_acad.tratamiento_reprobadas")
 */
class TratamientoReprobadas {
    /** 
     * @ORM\Id 
     * @ORM\Column(type="Integer")
     * @ORM\GeneratedValue
     */
    protected $id;
    
    /** @ORM\Colum(length="15", unique=true) */
    protected $codigo;
    
    /** @ORM\Colum(length="50") */
    protected $descripcion;

    //Establecer los valores por defecto
    public function __construct() {
    }
    
    public function __toString(){
        return $this->id;
    }
}
?>