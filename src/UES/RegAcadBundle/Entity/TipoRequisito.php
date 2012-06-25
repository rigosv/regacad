<?php

namespace UES\RegAcadBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Description of TipoRequisito
 * @ORM\Entity 
 * @ORM\Table(name="reg_acad.TipoRequisito")
 */
class TipoRequisito {
    /** 
     * @ORM\Id 
     * @ORM\Column(type="Integer")
     * @ORM\GeneratedValue
     */
    protected $id;
       
    /** 
     * @
     * @ORM\Colum(length="30")
     */
    protected $descripcion;

    //Establecer los valores por defecto
    public function __construct() {
    }
    
    public function __toString(){
        return $this->id;
    }
}
?>