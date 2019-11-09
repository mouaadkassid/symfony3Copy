<?php

namespace MouadBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class KassidController extends Controller
{
    /**
     * @Route("/kassid/index")
     */
    public function indexAction()
    {
        return $this->render('@Mouad/Kassid/index.html.twig');
    }

}
