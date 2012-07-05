<?php

namespace UES\RegAcadBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use UES\RegAcadBundle\Entity\Carrera;

class LoadCarreraData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $datos = array();
        $datos[1]['campos'] = array('Codigo'=>'I10515', 
            'Nombre'=>'Ingeniería de Sistemas Informáticos', 
            'PlanEstudio'=>'1998', 
            'TotalUv' => '48', 
            'UnidadHorasSociales'=>'horas', 
            'MaximasInscribir'=>5, 
            'CantCiclos'=>'11', 
            'Vigente'=>true            
            );
        $datos[1]['foraneas'] = array(
            'EstructuraCarrera'=>'EstructuraCarrera-1',
            'Grado'=>'Grado-1',
            'Titulo' =>'Titulo-1',
            'UnidadAcademica' =>'EstructuraOrganizativa-3'
        );
                
        $master = new LoadMaster();
        $master->save($datos, $manager, $this);
        
    }

    public function getOrder()
    {
        return 3; // the order in which fixtures will be loaded
    }
}
?>