<?php

namespace BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class PostController extends Controller
{
    public function indexAction()
    {
        return $this->render('@Blog/Post/index.html.twig', array(
            // ...
        ));
    }

}
