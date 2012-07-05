<?php
namespace UES\RegAcadBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;

use UES\RegAcadBundle\DataFixtures\ORM\LoadMaster;

class LoadUnidadEstudioData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $datos = array();
        $datos[1]['campos'] = array('Codigo'=>'MAT115','Nombre'=>'probando un nombre muy largo de materia para verificar como sale en los controles esto es porque sí hay grandes nombres en algunas de mediciana Matemática I');
        $datos[1]['foraneas'] = array ('UnidadAcademica'=>'EstructuraOrganizativa-4');
        
        $datos[2]['campos'] = array('Codigo'=>'MAT215','Nombre'=>'Matemática II');
        $datos[2]['foraneas'] = array ('UnidadAcademica'=>'EstructuraOrganizativa-4');
        
        $datos[3]['campos'] = array('Codigo'=>'MAT315','Nombre'=>'Matemática III');
        $datos[3]['foraneas'] = array ('UnidadAcademica'=>'EstructuraOrganizativa-4');
        
        $datos[4]['campos'] = array('Codigo'=>'MAT415','Nombre'=>'Matemática IV');
        $datos[4]['foraneas'] = array ('UnidadAcademica'=>'EstructuraOrganizativa-4');
        
        $datos[5]['campos'] = array('Codigo'=>'MET115','Nombre'=>'Métodos Experimentales');
        $datos[5]['foraneas'] = array ('UnidadAcademica'=>'EstructuraOrganizativa-4');
        
        $datos[6]['campos'] = array('Codigo'=>'IAI115','Nombre'=>'Introducción a la Informática');
        $datos[6]['foraneas'] = array ('UnidadAcademica'=>'EstructuraOrganizativa-3');
        
        $master = new LoadMaster();
        $master->save($datos, $manager, $this);
    }

    public function getOrder()
    {
        return 2; // the order in which fixtures will be loaded
    }
}
?>
