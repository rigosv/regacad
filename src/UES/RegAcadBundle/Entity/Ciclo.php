<?php
namespace UES\RegAcadBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Description of Ciclo
 * @ORM\Entity 
 * @ORM\Table(name="reg_acad.ciclo")
 */
class Ciclo {
    /** 
     * @ORM\Id 
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    protected $id;
    
    /**
     * @ORM\Column(length=3, unique=true)
     */
    protected $codigo;
    
    /**
     * @ORM\Column(length=30)
     */
    protected $descripcion;
    
    /**
     * @ORM\Column(type="float") 
     */
    protected $orden;

    //Establecer los valores por defecto
    public function __construct() {
    }
    
    public function __toString(){
        return $this->numero;
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
     * Set codigo
     *
     * @param string $codigo
     * @return Ciclo
     */
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;
        return $this;
    }

    /**
     * Get codigo
     *
     * @return string 
     */
    public function getCodigo()
    {
        return $this->codigo;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return Ciclo
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string 
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set orden
     *
     * @param float $orden
     * @return Ciclo
     */
    public function setOrden($orden)
    {
        $this->orden = $orden;
        return $this;
    }

    /**
     * Get orden
     *
     * @return float 
     */
    public function getOrden()
    {
        return $this->orden;
    }
}