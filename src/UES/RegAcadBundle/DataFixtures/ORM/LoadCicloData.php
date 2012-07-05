<?php

namespace UES\RegAcadBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use UES\RegAcadBundle\DataFixtures\ORM\LoadMaster;

class LoadCicloData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $datos = array();
        $datos[1]['campos'] = array('Codigo'=>'I','Descripcion'=>'Impar', 'Orden'=>'1');
        $datos[2]['campos'] = array('Codigo'=>'P','Descripcion'=>'Par', 'Orden'=>'2');
        $datos[3]['campos'] = array('Codigo'=>'I1','Descripcion'=>'Interciclo', 'Orden'=>'0.1');
        
        $master = new LoadMaster();
        $master->save($datos, $manager, $this);
    }

    public function getOrder()
    {
        return 1; // the order in which fixtures will be loaded
    }
}
?>
