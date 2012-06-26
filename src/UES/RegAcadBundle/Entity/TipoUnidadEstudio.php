<?php
namespace UES\RegAcadBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Description of TipoUnidadEstudio
 * @ORM\Entity 
 * @ORM\Table(name="reg_acad.tipo_unidad_estudio")
 */
class TipoUnidadEstudio {
    /** 
     * @ORM\Id 
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    protected $id;
    
    /** 
     * @ORM\Column(length="15", unique=true) 
     */
    protected $codigo;
    
    /**
     * @ORM\Column(length="50")
     */
    protected $descripcion;

        //Establecer los valores por defecto
    public function __construct() {
    }
    
    public function __toString(){
        return $this->descripcion;
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
     */
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;
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
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
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
}