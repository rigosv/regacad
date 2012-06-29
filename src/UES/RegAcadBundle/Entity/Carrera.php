<?php
namespace UES\RegAcadBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity 
 * @ORM\Table(name="reg_acad.carrera",
 *      uniqueConstraints={@ORM\UniqueConstraint(name="carrera_unique",columns={"codigo","plan_estudio"})}
 * )
*/
class Carrera {    
    /** 
     * @ORM\Id 
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    protected $id;
    
    /** @ORM\Column(length=7)  */
    protected $codigo;
    
    /** @ORM\Column(length=15, name="plan_estudio")  */
    protected $planEstudio;
    
    /** @ORM\Column(type="text")  */
    protected $nombre;
    
    /** @ORM\Column(type="float", name="total_uv")  */
    protected $totalUv;
    
    /** @ORM\Column(type="integer", name="horas_sociales")  */
    protected $horasSociales;
        
    /** @ORM\Column(length=30, name="unidad_horas_sociales")  */
    protected $unidadHorasSociales;
    
    /** @ORM\Column(type="integer", name="maximas_inscribir")  */
    protected $maximasInscribir;
    
    /** @ORM\Column(type="text", name="observacion_plan_estudio")  */
    protected $observacionPlanEstudio;

    /** 
     * @ORM\ManyToOne(targetEntity="UES\RegAcadBundle\Entity\EstructuraCarrera") 
     * @ORM\JoinColumn(name="estructura_carrera_id", referencedColumnName="id")
     */
    protected $estructuraCarrera;
    
    /** 
     * @ORM\ManyToOne(targetEntity="UES\RegAcadBundle\Entity\EstadoCarrera") 
     * @ORM\JoinColumn(name="estado_carrera_id", referencedColumnName="id")
     */
    protected $estadoCarrera;
    
    /** @ORM\ManyToOne(targetEntity="UES\RegAcadBundle\Entity\Grado") */
    protected $grado;    
    
    /** @ORM\OneToOne(targetEntity="UES\RegAcadBundle\Entity\Titulo") */
    protected $titulo;


    //Establecer los valores por defecto
    public function __construct() {
    }
    
    public function __toString(){
        return '(' .$this->codigo . ' - ' . $this->planEstudio .') '. $this->nombre;
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
     * Set planEstudio
     *
     * @param string $planEstudio
     */
    public function setPlanEstudio($planEstudio)
    {
        $this->planEstudio = $planEstudio;
    }

    /**
     * Get planEstudio
     *
     * @return string 
     */
    public function getPlanEstudio()
    {
        return $this->planEstudio;
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
     * Set totalUv
     *
     * @param float $totalUv
     */
    public function setTotalUv($totalUv)
    {
        $this->totalUv = $totalUv;
    }

    /**
     * Get totalUv
     *
     * @return float 
     */
    public function getTotalUv()
    {
        return $this->totalUv;
    }

    /**
     * Set horasSociales
     *
     * @param integer $horasSociales
     */
    public function setHorasSociales($horasSociales)
    {
        $this->horasSociales = $horasSociales;
    }

    /**
     * Get horasSociales
     *
     * @return integer 
     */
    public function getHorasSociales()
    {
        return $this->horasSociales;
    }

    /**
     * Set maximasInscribir
     *
     * @param integer $maximasInscribir
     */
    public function setMaximasInscribir($maximasInscribir)
    {
        $this->maximasInscribir = $maximasInscribir;
    }

    /**
     * Get maximasInscribir
     *
     * @return integer 
     */
    public function getMaximasInscribir()
    {
        return $this->maximasInscribir;
    }

    /**
     * Set observacionPlanEstudio
     *
     * @param text $observacionPlanEstudio
     */
    public function setObservacionPlanEstudio($observacionPlanEstudio)
    {
        $this->observacionPlanEstudio = $observacionPlanEstudio;
    }

    /**
     * Get observacionPlanEstudio
     *
     * @return text 
     */
    public function getObservacionPlanEstudio()
    {
        return $this->observacionPlanEstudio;
    }

    /**
     * Set estructuraCarrera
     *
     * @param UES\RegAcadBundle\Entity\EstructuraCarrera $estructuraCarrera
     */
    public function setEstructuraCarrera(\UES\RegAcadBundle\Entity\EstructuraCarrera $estructuraCarrera)
    {
        $this->estructuraCarrera = $estructuraCarrera;
    }

    /**
     * Get estructuraCarrera
     *
     * @return UES\RegAcadBundle\Entity\EstructuraCarrera 
     */
    public function getEstructuraCarrera()
    {
        return $this->estructuraCarrera;
    }

    /**
     * Set estadoCarrera
     *
     * @param UES\RegAcadBundle\Entity\EstadoCarrera $estadoCarrera
     */
    public function setEstadoCarrera(\UES\RegAcadBundle\Entity\EstadoCarrera $estadoCarrera)
    {
        $this->estadoCarrera = $estadoCarrera;
    }

    /**
     * Get estadoCarrera
     *
     * @return UES\RegAcadBundle\Entity\EstadoCarrera 
     */
    public function getEstadoCarrera()
    {
        return $this->estadoCarrera;
    }

    /**
     * Set grado
     *
     * @param UES\RegAcadBundle\Entity\Grado $grado
     */
    public function setGrado(\UES\RegAcadBundle\Entity\Grado $grado)
    {
        $this->grado = $grado;
    }

    /**
     * Get grado
     *
     * @return UES\RegAcadBundle\Entity\Grado 
     */
    public function getGrado()
    {
        return $this->grado;
    }

    /**
     * Set titulo
     *
     * @param UES\RegAcadBundle\Entity\Titulo $titulo
     */
    public function setTitulo(\UES\RegAcadBundle\Entity\Titulo $titulo)
    {
        $this->titulo = $titulo;
    }

    /**
     * Get titulo
     *
     * @return UES\RegAcadBundle\Entity\Titulo 
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Set unidadHorasSociales
     *
     * @param string $unidadHorasSociales
     */
    public function setUnidadHorasSociales($unidadHorasSociales)
    {
        $this->unidadHorasSociales = $unidadHorasSociales;
    }

    /**
     * Get unidadHorasSociales
     *
     * @return string 
     */
    public function getUnidadHorasSociales()
    {
        return $this->unidadHorasSociales;
    }
}