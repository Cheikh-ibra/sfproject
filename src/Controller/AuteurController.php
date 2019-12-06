<?php
namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AuteurController extends AbstractController
{
    /**
     * @param $id
     * @param Request $request
     * @return Response
     * @Route("blog/auteur/{id}",name="blog_one_auteur")
     */
    function showOneAuteurById($id,Request $request)
    {

        $response = new Response();

        $response->setContent("<html><body> $id </body></html>");
        $response->setStatusCode(200);

        return $response;
    }

    /**
     * @param Request $request
     * @return Response
     * @Route("blog/showAllAuteurs",name="blog_auteur")
     */
    function showAll(Request $request)
    {
        $response = new Response();

        $response->setContent("<html><body> tous les auteurs </body></html>");
        $response->setStatusCode(200);

        return $response;
    }

    /**
     * @param $id
     * @param Request $request
     * @return Response
     * @Route("blog/editAuteur/{id}",name="blog_edit_auteur")
     */
    function editAuteur($id,Request $request)
    {
        $response = new Response();

        $response->setContent("<html><body>  editer auteur </body></html>");
        $response->setStatusCode(200);

        return $response;
    }

    /**
     * @param Request $request
     * @return Response
     * @Route("blog/createAuteur/",name="blog_create_auteur")
     */
    function createAuteur(Request $request)
    {
        $response = new Response();

        $response->setContent("<html><body>  crée un auteur </body></html>");
        $response->setStatusCode(200);

        return $response;
    }

    /**
     * @param $id
     * @param Request $request
     * @return Response
     *  * @Route("blog/deleteAuteur/{id}",name="blog_delete_auteur")
     */
    function deleteAuteur($id,Request $request)
    {
        $response = new Response();

        $response->setContent("<html><body>  suprimer un auteur </body></html>");
        $response->setStatusCode(200);

        return $response;
    }



}