<?php

/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

namespace UES\RegAcadBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Description of Requisito
 * @ORM\Entity 
 * @ORM\Table(name="reg_acad.requisito")
 */
class Requisito {
    /** 
     * @ORM\Id 
     * @ORM\Column(type="Integer")
     * @ORM\GeneratedValue
     */
    protected $id;
    
    /** @ORM\ManyToOne(targetEntity="UES\RegAcadBundle\Entity\UnidadPlanEstudio") */
    protected $unidadPlanEstudio;
    
    /** @ORM\ManyToOne(targetEntity="UES\RegAcadBundle\Entity\UnidadPlanEstudio") */
    protected $requisito;
    
    /** @ORM\ManyToOne(targetEntity="UES\RegAcadBundle\Entity\TipoRequisito") */
    protected $tipoRequisito;
    
    //Establecer los valores por defecto
    public function __construct() {
    }
    
    public function __toString(){
        return $this->id;
    }
}
?>