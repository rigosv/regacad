<?php

namespace UES\RegAcadBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;

use UES\RegAcadBundle\DataFixtures\ORM\LoadMaster;

class LoadTituloData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $datos = array();
        $datos[1]['campos'] = array('DescripcionMasculino'=>'Ingeniero de Sistemas Informáticos',
                          'DescripcionFemenino'=>'Ingeniera de Sistemas Informáticos');
        $datos[1]['foraneas'] = array('Grado'=>'Grado-1');
        $datos[2]['campos'] = array('DescripcionMasculino'=>'Licenciado en Contaduría Pública',
                          'DescripcionFemenino'=>'Licenciada en Contaduría Pública');
        $datos[2]['foraneas'] = array('Grado'=>'Grado-2');
                
        $master = new LoadMaster();
        $master->save($datos, $manager, $this);                
    }

    public function getOrder()
    {
        return 2; // the order in which fixtures will be loaded
    }
}
?>
