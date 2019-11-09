<?php

namespace BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

use BlogBundle\Entity\Post;
use BlogBundle\Entity\Image;

class PosteeController extends Controller
{

    /**
     * @Route("/post/create")
     */
    public function createAction(){
        $em = $this->getDoctrine()->getManager();

        $post = new Post();
        $post->setTitle("titre 10");
        $post->setDescription("Lorem ipsum 10");
        $post->setSlug("titre-10");
        $post->setActive(1);


        //objet image
        $image = new Image();
        $image->setUrl("https://vignette.wikia.nocookie.net/naruto/images/0/09/Naruto_newshot.png/revision/latest?cb=20170621101134");
        $image->setAlt("NARUTO 10");
        // $em->persist($image);
        // $em->flush();

        // $post->setImage($image);
        $em->persist($post);
        $em->flush();

        return new Response("create function");
    }


    /**
     * @Route("/post/show")
     */
    public function showAction(){


        $em = $this->getDoctrine()->getManager();

        /*
        $query = $em->createQuery("SELECT p.title FROM BlogBundle:Post p wHERE p.active = :etat AND p.slug like :sluge ORDER BY p.title DESC");
        $query->setParameter("etat", 1);
        $query->setParameter("sluge", "titre-2");
        $posts = $query->getResult();
        */

        $repo = $this->getDoctrine()->getRepository("BlogBundle:Post");
        $query = $repo->createQueryBuilder("p")
            ->andWhere("p.active = :etat")
            ->andWhere("p.title like :titre")
            ->orderBy("p.title", "DESC")
            ->setParameters(["etat" => 1, "titre" => '% 2'])
            ->getQuery();
        $posts = $query->getResult();


        echo "<pre> ", print_r($posts), "</pre>";

        return new Response("bla bla");

        // return $this->render("@Blog/Postee/show.html.twig", ["posts" => $posts]);
    }

    /**
     * @Route("/post")
     */
    public function indexAction()
    {
    	$datas = [
    		["id" => 1,
    		"titre" => "Page numero 1",
    		"date" => "01-01-2019",
    		"post" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque possimus, unde eaque expedita iure cupiditate, laudantium perferendis placeat laboriosam voluptate!"],
    		["id" => 2,
    		"titre" => "Page numero 2",
    		"date" => "01-01-2019",
    		"post" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque possimus, unde eaque expedita iure cupiditate, laudantium perferendis placeat laboriosam voluptate!"],
    		["id" => 3,
    		"titre" => "Page numero 3",
    		"date" => "01-01-2019",
    		"post" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque possimus, unde eaque expedita iure cupiditate, laudantium perferendis placeat laboriosam voluptate!"]
    	];

        return $this->render('@Blog/Postee/index.html.twig', ["datas" => $datas]);
        return $this->appel();
    }

    public function appel(){
    	return new Response("je suis dans la fonction appel");
    }

}





