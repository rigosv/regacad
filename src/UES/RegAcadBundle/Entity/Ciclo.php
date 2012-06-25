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
     * @ORM\Column(type="Integer")
     * @ORM\GeneratedValue
     */
    protected $id;
    
    /**
     * @ORM\Column(Type="integer")
     */
    protected $numero;


    //Establecer los valores por defecto
    public function __construct() {
    }
    
    public function __toString(){
        return $this->numero;
    }
}
?>