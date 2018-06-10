<?php

namespace Wandson\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Wandson\AdminBundle\AdminBundle;

/**
 * @Route("/users")
 */
class UserController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        $users = $this->getDoctrine()->getRepository("AdminBundle:User")->findAll();

        return $this->render('@Admin/User/index.html.twig', ['users' => $users]);
    }
}
