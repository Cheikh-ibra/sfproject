<?php
namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class Test
 * @package App\controller
 */
class Test extends AbstractController
{
    /**
     * @return Response
     * @Route("/test/hello", name="test_hello")
     */
  function maPageDeTest()
  {
      $response = new Response();

      $response->setContent("<html><body> hello word </body></html>");
      $response->setStatusCode(200);

      return $response;
  }
}
