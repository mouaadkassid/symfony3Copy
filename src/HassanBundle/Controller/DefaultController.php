<?php

namespace HassanBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('HassanBundle:Default:index.html.twig');
    }
}
