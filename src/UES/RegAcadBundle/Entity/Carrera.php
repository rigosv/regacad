<?php
namespace UES\RegAcadBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity 
 * @ORM\Table(name="reg_acad.carrera", 
 *      uniqueConstraints={@UniqueConstraint(name="carrera_unique",columns={"codigo, planEstudio"})}
 * )
*/
class Carrera {    
    /** 
     * @ORM\Id 
     * @ORM\Column(type="Integer")
     * @ORM\GeneratedValue
     */
    protected $id;
    
    /** @ORM\Column(length=7)  */
    protected $codigo;
    
    /** @ORM\Column(length=15)  */
    protected $planEstudio;
    
    /** @ORM\Column(type="text")  */
    protected $nombre;
    
    /** @ORM\Column(type="float")  */
    protected $totalUv;
    
    /** @ORM\Column(type="integer")  */
    protected $horasSociales;
        
    protected $unidadHorasSociales;
    
    /** @ORM\Column(type="integer")  */
    protected $maximasInscribir;
    
    /** @ORM\Column(type="text")  */
    protected $observacionPlanEstudio;

    /** @ORM\ManyToOne(targetEntity="UES\RegAcadBundle\Entity\EstructuraCarrera") */
    protected $estructuraCarrera;
    
    /** @ORM\ManyToOne(targetEntity="UES\RegAcadBundle\Entity\EstadoCarrera") */
    protected $estadoCarrera;
    
    /** @ORM\ManyToOne(targetEntity="UES\RegAcadBundle\Entity\Grado") */
    protected $grado;
    
    /** @ORM\ManyToOne(targetEntity="UES\RegAcadBundle\Entity\Carrera") */
    protected $estadoCarrera;
    
    /** @ORM\OneToOne(targetEntity="UES\RegAcadBundle\Entity\Titulo") */
    protected $titulo;


    //Establecer los valores por defecto
    public function __construct() {
    }
    
    public function __toString(){
        return '(' .$this->codigo . ' - ' . $this->planEstudio .') '. $this->nombre;
    }
}

?>