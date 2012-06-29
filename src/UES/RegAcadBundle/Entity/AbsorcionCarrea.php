<?php

namespace UES\RegAcadBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Description of AbsorcionCarrea
 * @ORM\Entity 
 * @ORM\Table(name="reg_acad.absorcion_carrea",
 *      uniqueConstraints={@ORM\UniqueConstraint(name="absorcion_unique",columns={"carrera_plan_antiguo_id"}),
 *                          @ORM\UniqueConstraint(name="absorcion2_unique",columns={"carrera_plan_nuevo_id"})
 *                        }
 * )
 */
class AbsorcionCarrea {
    /** 
     * @ORM\Id 
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    protected $id;
    
    /** 
     * @ORM\ManyToOne(targetEntity="UES\RegAcadBundle\Entity\Carrera") 
     * @ORM\JoinColumn(name="carrera_plan_antiguo_id", referencedColumnName="id")
     */
    protected $carreraPlanAntiguo;
    
    /**
     * @ORM\ManyToOne(targetEntity="UES\RegAcadBundle\Entity\Carrera")
     * @ORM\JoinColumn(name="carrera_plan_nuevo_id", referencedColumnName="id")
     */
    protected $carreraPlanNuevo;
    
    /** 
     * @ORM\ManyToOne(targetEntity="UES\RegAcadBundle\Entity\TratamientoReprobadas") 
     * @ORM\JoinColumn(name="tratamiento_reprobadas_id", referencedColumnName="id")
     */
    protected $tratamientoReprobadas;
    
    //Establecer los valores por defecto
    public function __construct() {
    }
    
    public function __toString(){
        return $this->id;
    }

    /**
     * Get id
     *
     * @return Integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set carreraPlanAntiguo
     *
     * @param string $carreraPlanAntiguo
     */
    public function setCarreraPlanAntiguo($carreraPlanAntiguo)
    {
        $this->carreraPlanAntiguo = $carreraPlanAntiguo;
    }

    /**
     * Get carreraPlanAntiguo
     *
     * @return string 
     */
    public function getCarreraPlanAntiguo()
    {
        return $this->carreraPlanAntiguo;
    }

    /**
     * Set carreraPlanNuevo
     *
     * @param string $carreraPlanNuevo
     */
    public function setCarreraPlanNuevo($carreraPlanNuevo)
    {
        $this->carreraPlanNuevo = $carreraPlanNuevo;
    }

    /**
     * Get carreraPlanNuevo
     *
     * @return string 
     */
    public function getCarreraPlanNuevo()
    {
        return $this->carreraPlanNuevo;
    }

    /**
     * Set tratamientoReprobadas
     *
     * @param UES\RegAcadBundle\Entity\TratamientoReprobadas $tratamientoReprobadas
     */
    public function setTratamientoReprobadas(\UES\RegAcadBundle\Entity\TratamientoReprobadas $tratamientoReprobadas)
    {
        $this->tratamientoReprobadas = $tratamientoReprobadas;
    }

    /**
     * Get tratamientoReprobadas
     *
     * @return UES\RegAcadBundle\Entity\TratamientoReprobadas 
     */
    public function getTratamientoReprobadas()
    {
        return $this->tratamientoReprobadas;
    }
}