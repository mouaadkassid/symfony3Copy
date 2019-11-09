<?php

namespace AnnotBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/indexAnnot")
     */
    public function indexAction()
    {
        return $this->render('@Annot/Default/index.html.twig');
    }
}
