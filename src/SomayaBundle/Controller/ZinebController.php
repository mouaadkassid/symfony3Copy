<?php

namespace SomayaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class ZinebController extends Controller
{
    /**
     * @Route("/Zineb")
     */
    public function indexAction()
    {
        return $this->render('@Somaya/Zineb/index.html.twig', array(
            // ...
        ));
    }

}
