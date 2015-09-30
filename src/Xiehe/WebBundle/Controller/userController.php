<?php

namespace Xiehe\WebBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Response;
use Xiehe\WebBundle\Entity\user;


/**
 * @Route("/user")
 */
class userController extends Controller
{
    /**
     * @Route("/new")
     */
    public function newAction()
    {
        $user = new user();
        $form = $this->createFormBuilder($user)
            ->add("email","email",array("label"=>"邮箱"))
            ->add("password","password",array("label"=>"密码"))
            ->add("name",null,array("label"=>"真实姓名"))
            ->add("nickname",null,array("label"=>"昵称"))
            ->add("submit","submit",array("label"=>"确认","attr"=>array("formnovalidate"=>"formnovalidate")))
            ->getForm();

       $form->handleRequest($this->getRequest());
        if($form->isValid()){
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();
        }
        return $this->render("user/new.user.html.twig",array("form"=>$form->createView()));
    }
}
