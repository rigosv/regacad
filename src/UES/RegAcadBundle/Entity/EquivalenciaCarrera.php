<?php

namespace UES\RegAcadBundle\Entity;

use Doctrine\ORM\Mapping  as ORM;

/**
 * Description of EquivalenciaCarrera
 * @ORM\Entity 
 * @ORM\Table(name="reg_acad.equivalencia_carrera",
 *   uniqueConstraints={@ORM\UniqueConstraint(name="equivalencia_unique",columns={"carrera_origen_id", "carrera_destino_id"})}
 * )
 */
class EquivalenciaCarrera {
    /** 
     * @ORM\Id 
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    protected $id;
    
    /** 
     * @ORM\ManyToOne(targetEntity="UES\RegAcadBundle\Entity\Carrera") 
     * @ORM\JoinColumn(name="carrera_origen_id", referencedColumnName="id")
     */
    protected $carreraOrigen;
    
    /** 
     * @ORM\ManyToOne(targetEntity="UES\RegAcadBundle\Entity\Carrera") 
     * @ORM\JoinColumn(name="carrera_destino_id", referencedColumnName="id")
     */
    protected $carreraDestino;
    
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
     * Set carreraOrigen
     *
     * @param UES\RegAcadBundle\Entity\Carrera $carreraOrigen
     */
    public function setCarreraOrigen(\UES\RegAcadBundle\Entity\Carrera $carreraOrigen)
    {
        $this->carreraOrigen = $carreraOrigen;
    }

    /**
     * Get carreraOrigen
     *
     * @return UES\RegAcadBundle\Entity\Carrera 
     */
    public function getCarreraOrigen()
    {
        return $this->carreraOrigen;
    }

    /**
     * Set carreraDestino
     *
     * @param UES\RegAcadBundle\Entity\Carrera $carreraDestino
     */
    public function setCarreraDestino(\UES\RegAcadBundle\Entity\Carrera $carreraDestino)
    {
        $this->carreraDestino = $carreraDestino;
    }

    /**
     * Get carreraDestino
     *
     * @return UES\RegAcadBundle\Entity\Carrera 
     */
    public function getCarreraDestino()
    {
        return $this->carreraDestino;
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