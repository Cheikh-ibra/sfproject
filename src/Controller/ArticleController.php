<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends AbstractController
{
    /**
     * @param $id
     * @param Request $request
     * @return Response
     * @Route("blog/article/{id}",name="blog_one_article")
     */
function showOneById($id,Request $request)
{

    $response = new Response();

    $response->setContent("<html><body> $id </body></html>");
    $response->setStatusCode(200);

    return $response;
}

    /**
     * @param Request $request
     * @return Response
     * @Route("blog/showAllArticles
     * ",name="blog_article")
     */
function showAll(Request $request)
{
    $response = new Response();

    $response->setContent("<html><body> hello word </body></html>");
    $response->setStatusCode(200);

    return $response;
}

    /**
     * @param $id
     * @param Request $request
     * @return Response
     * @Route("blog/editArticle/{id}",name="blog_edit_article")
     */
    function editArticle($id,Request $request)
    {
        $response = new Response();

        $response->setContent("<html><body>  editer l'article </body></html>");
        $response->setStatusCode(200);

        return $response;
    }

    /**
     * @param Request $request
     * @return Response
     * @Route("blog/createArticle/",name="blog_create_article")
     */
    function createArticle(Request $request)
    {
        $response = new Response();

        $response->setContent("<html><body>  crée l'article </body></html>");
        $response->setStatusCode(200);

        return $response;
    }

    /**
     * @param $id
     * @param Request $request
     * @return Response
     *  * @Route("blog/deleteArticle/{id}",name="blog_delete_article")
     */
    function deleteArticle($id,Request $request)
    {
        $response = new Response();

        $response->setContent("<html><body>  suprimer l'article </body></html>");
        $response->setStatusCode(200);

        return $response;
    }



}
