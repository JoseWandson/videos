<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * @Route("/posts")
 * @package AppBundle\Controller
 */
class PostController extends Controller
{
    /**
     * @Route("/")
     * @return Response
     */
    public function indexAction()
    {
        $posts = $this->getDoctrine()->getRepository("AppBundle:Post")->findAll();

        return $this->render("posts/posts.html.twig", ['posts' => $posts]);
    }

    /**
     * @Route("/post/{slug}")
     * @return Response
     */
    public function singleAction($slug)
    {
        $data = ['slug' => $slug];
        return $this->render("posts/single.html.twig", $data);
    }
}
