<?php

namespace AnnotBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class AnnotController extends Controller
{
    /**
     * @Route("/Annot")
     */
    public function indexAction()
    {
        return $this->render('@Annot/Annot/index.html.twig', array(
            // ...
        ));
    }

}
