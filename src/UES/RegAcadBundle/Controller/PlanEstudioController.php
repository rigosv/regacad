<?php

namespace UES\RegAcadBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Response;

class PlanEstudioController extends Controller {

    /**
     * @Route("/plan_estudio/registro", name="plan_estudio_registro")
     * @Template()
     */
    public function registroAction() {        
        $form = $this->createFormBuilder()
                ->add('carreras', 'entity', array(
                    'class' => 'RegAcadBundle:Carrera',
                    'empty_value' => 'Elija una carrera'
                ))
                ->getForm();

        return array('form' => $form->createView());
    }
    
    /**
     * @Route("/plan_estudio/unidades_estudio", name="plan_estudio_unidades_estudio")
     */
    public function getUnidadEstudio(){
        $em = $this->getDoctrine()->getEntityManager();
        
        $filtro = $this->getRequest()->get('dato_filtro');
        $incluidas = ($this->getRequest()->get('incluidas')=='false')?false: true;
        $carrera = $this->getRequest()->get('id_carrera');
        
        $unidades_estudio = $em->getRepository('RegAcadBundle:UnidadEstudio')->getUnidadesPlanEstudio($carrera, $incluidas, $filtro);
        $respuesta = $unidades_estudio->getArrayResult();
        
        return new Response(json_encode($respuesta), 200, array('Content-Type' => 'application/json'));
        
    }

}
