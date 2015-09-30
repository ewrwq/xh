<?php

namespace Xiehe\WebBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        /** @var $userManager \FOS\UserBundle\Model\UserManagerInterface */
        $userManager = $this->get('fos_user.user_manager');

        $user=$this->getUser();
        return $this->render("default/index.html.twig",array("user"=>$user));
    }

    /**
     * @Route("/hello/{name}")
     */
    public function helloAction($name)
    {
        //return array('name' => $name);
        return $this->render("default/hello.html.twig",array("name"=>$name));
    }
}
