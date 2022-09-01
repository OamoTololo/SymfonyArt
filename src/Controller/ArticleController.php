<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Routing\AnnotationRoute;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

class ArticleController
{
    /**
     * @Route("/")
     * @Method({"GET"})
     */
    public  function home()
    {
        return new Response('<html><body>Hello</body></html>');
    }
}