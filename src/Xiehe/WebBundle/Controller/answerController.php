<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/9/22
 * Time: 11:13
 */
namespace Xiehe\WebBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Response;
use Xiehe\WebBundle\Entity;

/**
 * @Route("/answer")
 */
class answerController extends Controller
{
    /**
     * @Route("/{id}",
     * requirements={"id":"\d+"})
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository("XieheWebBundle:answer")->find($id);

        return $entity;
    }
}
