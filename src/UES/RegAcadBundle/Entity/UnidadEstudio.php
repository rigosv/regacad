<?php
namespace UES\RegAcadBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Description of UnidadEstudio
 * @ORM\Entity 
 * @ORM\Table(name="reg_acad.unidad_estudio")
 */
class UnidadEstudio {
    /** 
     * @ORM\Id 
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    protected $id;
    
    /** @ORM\Column(length="15", unique=true) */
    protected $codigo;
    
    /**
     * @ORM\Column(type="text")
     */
    protected $nombre;

        //Establecer los valores por defecto
    public function __construct() {
    }
    
    public function __toString(){
        return '('.$this->codigo.') '.$this->nombre;
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
     * Set nombre
     *
     * @param text $nombre
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    /**
     * Get nombre
     *
     * @return text 
     */
    public function getNombre()
    {
        return $this->nombre;
    }
}