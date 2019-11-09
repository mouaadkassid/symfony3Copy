<?php

namespace BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class BlogController extends Controller
{
    /**
     * @Route("/blog", name="blog_list ")
     */
    public function indexAction()
    {
        return $this->render('@Blog/Blog/index.html.twig', array(
            // ...
        ));
    }

    public function showAction($id, $anne, $titre, $ext)
    {
        return new Response("Article numero : $id\t anne : $anne\t title : $titre\t ext : $ext");
    }

}


