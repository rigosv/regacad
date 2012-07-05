<?php

namespace UES\RegAcadBundle\Repository;

use Doctrine\ORM\EntityRepository;

class UnidadEstudioRepository extends EntityRepository {

    /**
     * 
     * @param type $carrera 
     * @param type $incluidas
     * @param type $filtro
     * @return Doctrine Query
     */
    public function getUnidadesPlanEstudio($carrera, $incluidas = true, $filtro = '') {

        $oper = ($incluidas == false) ? "not" : "";

        $q = $this->createQueryBuilder('e')
                ->orderBy("e.codigo")
                ->where("e.id $oper in (SELECT ue.id
                                        FROM RegAcadBundle:UnidadPlanEstudio upe 
                                        JOIN upe.unidadEstudio ue
                                        JOIN upe.carrera c
                                        WHERE c.id = :id_carrera)")
                ->setParameter('id_carrera', $carrera);

        if ($filtro != '') {
            $q->andwhere("e.codigo LIKE '%".strtoupper($filtro)."%' ");
        }
        return $q->getQuery();
    }

}
