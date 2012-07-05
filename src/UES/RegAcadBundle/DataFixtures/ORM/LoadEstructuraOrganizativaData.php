<?php

namespace UES\RegAcadBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;

use UES\RegAcadBundle\DataFixtures\ORM\LoadMaster;

class LoadEstructuraOrganizativaData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $datos = array();
        $datos[1]['campos'] = array('Codigo'=>'INYAR', 'Nombre'=>'Ingeniería y Arquitectura', 'Vigente'=>true, 'Orden'=>15);
        $datos[1]['foraneas'] = array('TipoEstructura' => 'TipoEstructuraOrganizativa-1');
        
        $datos[2]['campos'] = array('Codigo'=>'MEDIC', 'Nombre'=>'Medicina', 'Vigente'=>true, 'Orden'=>11);
        $datos[2]['foraneas'] = array('TipoEstructura' => 'TipoEstructuraOrganizativa-1');
        
        $datos[3]['campos'] = array('Codigo'=>'ISIST', 'Nombre'=>'Ingeniería de Sistemas Informáticos', 'Vigente'=>true);
        $datos[3]['foraneas'] = array('TipoEstructura' => 'TipoEstructuraOrganizativa-1', 'EstructuraSuperior'=>'EstructuraOrganizativa-1');
        
        $datos[4]['campos'] = array('Codigo'=>'BASIC', 'Nombre'=>'Unidad de Ciencias Básicas', 'Vigente'=>true);
        $datos[4]['foraneas'] = array('TipoEstructura' => 'TipoEstructuraOrganizativa-4', 'EstructuraSuperior'=>'EstructuraOrganizativa-1');                                        
                
        $master = new LoadMaster();
        $master->save($datos, $manager, $this);

        
    }

    public function getOrder()
    {
        return 2; // the order in which fixtures will be loaded
    }
}
?>
