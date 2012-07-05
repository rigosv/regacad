<?php

namespace UES\RegAcadBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="reg_acad.estructura_organizativa")
 */
class EstructuraOrganizativa {

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
     * @ORM\Column(length=200)
     */
    protected $nombre;
    
    /**
     * @ORM\Column(type="boolean") 
     */
    protected $vigente = true; 
    
    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    protected $orden;


    /**
    * @ORM\ManyToOne(targetEntity="UES\RegAcadBundle\Entity\EstructuraOrganizativa")
    * @ORM\JoinColumn(name="estructura_superior_id", referencedColumnName="id")
    */
    protected $estructuraSuperior;
    
    /**
     * @ORM\ManyToOne(targetEntity="UES\RegAcadBundle\Entity\TipoEstructuraOrganizativa") 
     * @ORM\JoinColumn(name="tipo_estructura_id", referencedColumnName="id")
     */
    protected $tipoEstructura;
    
    public function __toString(){
        return '('.$this->codigo.') '.$this->nombre;
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
     * @return EstructuraOrganizativa
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
     * Set nombre
     *
     * @param string $nombre
     * @return EstructuraOrganizativa
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set estructuraSuperior
     *
     * @param UES\RegAcadBundle\Entity\EstructuraOrganizativa $estructuraSuperior
     * @return EstructuraOrganizativa
     */
    public function setEstructuraSuperior(\UES\RegAcadBundle\Entity\EstructuraOrganizativa $estructuraSuperior = null)
    {
        $this->estructuraSuperior = $estructuraSuperior;
        return $this;
    }

    /**
     * Get estructuraSuperior
     *
     * @return UES\RegAcadBundle\Entity\EstructuraOrganizativa 
     */
    public function getEstructuraSuperior()
    {
        return $this->estructuraSuperior;
    }

    /**
     * Set tipoEstructura
     *
     * @param UES\RegAcadBundle\Entity\TipoEstructuraOrganizativa $tipoEstructura
     * @return EstructuraOrganizativa
     */
    public function setTipoEstructura(\UES\RegAcadBundle\Entity\TipoEstructuraOrganizativa $tipoEstructura = null)
    {
        $this->tipoEstructura = $tipoEstructura;
        return $this;
    }

    /**
     * Get tipoEstructura
     *
     * @return UES\RegAcadBundle\Entity\TipoEstructuraOrganizativa 
     */
    public function getTipoEstructura()
    {
        return $this->tipoEstructura;
    }

    /**
     * Set vigente
     *
     * @param boolean $vigente
     * @return EstructuraOrganizativa
     */
    public function setVigente($vigente)
    {
        $this->vigente = $vigente;
        return $this;
    }

    /**
     * Get vigente
     *
     * @return boolean 
     */
    public function getVigente()
    {
        return $this->vigente;
    }

    /**
     * Set orden
     *
     * @param integer $orden
     * @return EstructuraOrganizativa
     */
    public function setOrden($orden)
    {
        $this->orden = $orden;
        return $this;
    }

    /**
     * Get orden
     *
     * @return integer 
     */
    public function getOrden()
    {
        return $this->orden;
    }
}