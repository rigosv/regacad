<?php

namespace UES\RegAcadBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Description of AbsorcionCarrea
 * @ORM\Entity 
 * @ORM\Table(name="reg_acad.absorcion_carrea")
 */
class AbsorcionCarrea {
    /** 
     * @ORM\Id 
     * @ORM\Column(type="Integer")
     * @ORM\GeneratedValue
     */
    protected $id;
    
    /** 
     * @ORM\ManyToOne(targetEntity="UES\RegAcadBundle\Entity\Carrera") 
     * @ORM\Column(unique=true)
     */
    protected $carreraPlanAntiguo;
    
    /** 
     * @ORM\ManyToOne(targetEntity="UES\RegAcadBundle\Entity\Carrera") 
     * @ORM\Column(unique=true)
     */
    protected $carreraPlanNuevo;
    
    /** @ORM\ManyToOne(targetEntity="UES\RegAcadBundle\Entity\TratamientoReprobadas") */
    protected $tratamientoReprobadas;
    
    //Establecer los valores por defecto
    public function __construct() {
    }
    
    public function __toString(){
        return $this->id;
    }
}
?>