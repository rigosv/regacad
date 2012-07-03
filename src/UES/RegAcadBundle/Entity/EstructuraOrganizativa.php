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
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(length=10, unique=true)
     */
    protected $codigo;
    
    /**
     * @ORM\Column(length=200)
     */
    protected $nombre;
    
    /**
    * @OneToOne(targetEntity="EstructuraOrganizativa")
    * @JoinColumn(name="estructura_superior_id", referencedColumnName="id")
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
}

?>