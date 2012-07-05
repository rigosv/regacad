<?php
namespace UES\RegAcadBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use UES\RegAcadBundle\DataFixtures\ORM\LoadMaster;

class LoadEstructuraCarreraData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $datos = array();
        $datos[1]['campos'] = array("Codigo"=>"a","Descripcion"=>"Asignaturas");
        $datos[2]['campos'] = array("Codigo"=>"m","Descripcion"=>"Módulos");
        $datos[3]['campos'] = array("Codigo"=>"ci","Descripcion"=>"Cursos Integrados");
        $datos[4]['campos'] = array("Codigo"=>"ai","Descripcion"=>"Áreas Integradas");
               
        $master = new LoadMaster();
        $master->save($datos, $manager, $this);
    }

    public function getOrder()
    {
        return 1; // the order in which fixtures will be loaded
    }
}
?>
