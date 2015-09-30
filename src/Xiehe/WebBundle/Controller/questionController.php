<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/9/22
 * Time: 11:12
 */
namespace Xiehe\WebBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\User\User;
use Xiehe\WebBundle\Entity;

/**
 * @Route("/question")
 */
class questionController extends Controller
{
    /**
     * @Route("/{id}",
     * requirements={"id":"\d+"});
     */
    public function showAction($id)
    {
        $entity = $this->getDoctrine()->getRepository("XieheWebBundle:question")->find($id);


    }

    /**
     * @Route("/new")
     */
    public function newAction()
    {
        return $this->render("question/new.question.html.twig");
    }


}
