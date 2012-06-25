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
 * @ORM\Table(name="reg_acad.requisito_uv")
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
    
    /** @ORM\ManyToOne(targetEntity="UES\RegAcadBundle\Entity\Area") */
    protected $area;
    
    /** @ORM\ManyToOne(targetEntity="UES\RegAcadBundle\Entity\UnidadPlanEstudio") */
    protected $unidadPlanEstudio;
    
    //Establecer los valores por defecto
    public function __construct() {
    }
    
    public function __toString(){
        return $this->id;
    }
}
?>