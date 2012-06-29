<?php

namespace UES\RegAcadBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class PlanEstudioController extends Controller
{
    /**
     * @Route("/plan_estudio/registro")
     * @Template()
     */
    public function registroAction()
    {
        return array();
    }
}
