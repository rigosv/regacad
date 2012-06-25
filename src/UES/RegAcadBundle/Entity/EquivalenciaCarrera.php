<?php

namespace UES\RegAcadBundle\Entity;

use Doctrine\ORM\Mapping  as ORM;

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
    
    /** @ORM\ManyToOne(targetEntity="UES\RegAcadBundle\Entity\Carrera") */
    protected $carreraOrigen;
    
    /** @ORM\ManyToOne(targetEntity="UES\RegAcadBundle\Entity\Carrera") */
    protected $carreraDestino;
    
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