<?php

namespace UES\RegAcadBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;

use UES\RegAcadBundle\DataFixtures\ORM\LoadMaster;

class LoadTipoEstructuraOrganizativaData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $datos = array();
        $datos[1]['campos'] = array('Codigo'=>'FACU','Descripcion'=>'Facultad');
        $datos[2]['campos'] = array('Codigo'=>'ESCU','Descripcion'=>'Escuela');
        $datos[3]['campos'] = array('Codigo'=>'DPTO','Descripcion'=>'Departamento');
        $datos[4]['campos'] = array('Codigo'=>'UNID','Descripcion'=>'Unidad');
        $datos[5]['campos'] = array('Codigo'=>'AULA','Descripcion'=>'Aula');
                
        $master = new LoadMaster();
        $master->save($datos, $manager, $this);
    }

    public function getOrder()
    {
        return 1; // the order in which fixtures will be loaded
    }
}
?>
