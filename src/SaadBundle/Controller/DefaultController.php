<?php

namespace SaadBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/saad")
     */
    public function indexAction()
    {
        return $this->render('@Saad/Default/index.html.twig');
    }
}
