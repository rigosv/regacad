<?php
namespace UES\RegAcadBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Description of UnidadEstudio
 * @ORM\Entity(repositoryClass="UES\RegAcadBundle\Repository\UnidadEstudioRepository")
 * @ORM\Table(name="reg_acad.unidad_estudio")
 * 
 */
class UnidadEstudio {
    /** 
     * @ORM\Id 
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    protected $id;
    
    /** @ORM\Column(length=15) */
    protected $codigo;
    
    /**
     * @ORM\Column(type="text")
     */
    protected $nombre;
    
    /** 
     * @ORM\ManyToOne(targetEntity="UES\RegAcadBundle\Entity\EstructuraOrganizativa") 
     * @ORM\JoinColumn(name="unidad_academica_id", referencedColumnName="id")
     */
    protected $unidadAcademica;

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

    /**
     * Set unidadAcademica
     *
     * @param UES\RegAcadBundle\Entity\EstructuraOrganizativa $unidadAcademica
     * @return UnidadEstudio
     */
    public function setUnidadAcademica(\UES\RegAcadBundle\Entity\EstructuraOrganizativa $unidadAcademica = null)
    {
        $this->unidadAcademica = $unidadAcademica;
        return $this;
    }

    /**
     * Get unidadAcademica
     *
     * @return UES\RegAcadBundle\Entity\EstructuraOrganizativa 
     */
    public function getUnidadAcademica()
    {
        return $this->unidadAcademica;
    }
}