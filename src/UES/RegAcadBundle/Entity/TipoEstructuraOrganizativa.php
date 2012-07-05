<?php

namespace UES\RegAcadBundle\Entity;

use Doctrine\ORM\Mapping As ORM;

/**
 * Description of TipoEstructuraOrganizativa
 * @ORM\Entity 
 * @ORM\Table(name="reg_acad.tipo_estructura_organizativa")
 */
class TipoEstructuraOrganizativa {
    /** 
     * @ORM\Id 
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    protected $id;
    
    /**
     * @ORM\Column(length=15, unique=true) 
     */
    protected $codigo;
    
    /**
     * @ORM\Column(length=80)
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
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set codigo
     *
     * @param string $codigo
     * @return TipoEstructuraOrganizativa
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
     * @return TipoEstructuraOrganizativa
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
}