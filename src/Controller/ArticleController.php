<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Routing\AnnotationRoute;
use Symfony\Bundle\FrameworkExtraBundle\Configuration\Method;

class ArticleController extends controller
{
    /**
     * @Route("/")
     * @Method({"GET"})
     */
    public  function home()
    {
       // return new Response('<html><body>Hello</body></html>');

        return $this->render('articles/home.html.twig');
    }
}