<?php

namespace UES\RegAcadBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;

use UES\RegAcadBundle\DataFixtures\ORM\LoadMaster;

class LoadGradoData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $datos = array();
        $datos[1]['campos'] = array('Codigo'=>'ing','DescripcionFemenino'=>'Ingeniera', 'DescripcionMasculino'=>'Ingeniero', 'DescripcionGrado'=>'Ingenieria');
        $datos[2]['campos'] = array('Codigo'=>'lic','DescripcionFemenino'=>'Licenciada', 'DescripcionMasculino'=>'Licenciado', 'DescripcionGrado'=>'Licenciatura');
        
        $master = new LoadMaster();
        $master->save($datos, $manager, $this);
    }

    public function getOrder()
    {
        return 1; // the order in which fixtures will be loaded
    }
}
?>
