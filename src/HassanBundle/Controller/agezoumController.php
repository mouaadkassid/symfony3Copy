<?php

namespace HassanBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class agezoumController extends Controller
{
    /**
     * @Route("/agezoumroute")
     */
    public function indexAction()
    {
        return $this->render('@Hassan/agezoum/index.html.twig', array(
            // ...
        ));
    }

}
