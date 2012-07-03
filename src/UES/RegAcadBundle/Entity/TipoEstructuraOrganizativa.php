<?php

namespace UES\RegAcadBundle\Entity;

use Doctrine\ORM\Mapping;

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
}
?>