<?php

namespace UES\RegAcadBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use UES\RegAcadBundle\Entity\Grado;

class LoadGradoData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $datos[] = array("C"=>"ing","F"=>"Ingeniera", "M"=>"Ingeniero", "G"=>"Ingenieria");
        $datos[] = array("C"=>"lic","F"=>"Licenciada", "M"=>"Licenciado", "G"=>"Licenciatura");
        
        foreach ($datos as $f){
            $grado = new Grado();
            $grado->setCodigo($f['C']);
            $grado->setDescripcionFemenino($f['F']);
            $grado->setDescripcionMasculino($f['M']);
            $grado->setDescripcionGrado($f['G']);                
            $manager->persist($grado);
            $this->addReference('grado-'.$f['C'], $grado);
        }
        
        $manager->flush();

        
    }

    public function getOrder()
    {
        return 1; // the order in which fixtures will be loaded
    }
}
?>
