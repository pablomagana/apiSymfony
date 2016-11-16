<?php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\Controller\FOSRestController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use FOS\RestBundle\View\View;
use AppBundle\Entity\user;
use AppBundle\Entity\orchard;

class orchandarController extends FOSRestController
{
    /**
     * @Rest\Get("/orchandar")
     */
    public function getOrchardAction()
    {
      $restresult = $this->getDoctrine()->getRepository('AppBundle:orchard')->findAll();
        if ($restresult === null) {
          return new View("there are no users exist", Response::HTTP_NOT_FOUND);
     }
        return $restresult;
    }
    /**
     * @Rest\Get("/user")
     */
    public function getUserAction()
    {
      $restresult = $this->getDoctrine()->getRepository('AppBundle:user')->findAll();
        if ($restresult === null) {
          return new View("there are no users exist", Response::HTTP_NOT_FOUND);
     }
        return $restresult;
    }

    /**
    * @Rest\Get("/orchandar/{id}")
    */
    public function idAction($id)
    {
      $singleresult = $this->getDoctrine()->getRepository('AppBundle:orchard')->find($id);
      if ($singleresult === null) {
        return new View("user not found", Response::HTTP_NOT_FOUND);
      }
      return $singleresult;
    }
}
