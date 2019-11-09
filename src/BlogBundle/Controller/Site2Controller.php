<?php

namespace BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class Site2Controller extends Controller
{
    /**
     * @Route("/acceuil", name="site_acceuil")
     */
    public function acceuilAction()
    {
        return $this->render('@Blog/Site2/acceuil.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/service", name="site_service")
     */
    public function serviceAction()
    {
        return $this->render('@Blog/Site2/service.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/contact", name="site_contact")
     */
    public function contactAction()
    {
        return $this->render('@Blog/Site2/contact.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/show/{id}", name="site_show")
     */
    public function showAction($id){
        return $this->render("@Blog/Site2/show.html.twig", ["id" => $id]);
    }

}












