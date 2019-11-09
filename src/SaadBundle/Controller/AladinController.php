<?php

namespace SaadBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class AladinController extends Controller
{
    /**
     * @Route("/Aladin")
     */
    public function indexAction()
    {
        return $this->render('@Saad/Aladin/index.html.twig', array(
            // ...
        ));
    }

}
