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
     * @ORM\Column(type="integer", unique=true)
     */
    protected $numero;


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
     * Set numero
     *
     * @param integer $numero
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;
    }

    /**
     * Get numero
     *
     * @return integer 
     */
    public function getNumero()
    {
        return $this->numero;
    }
}