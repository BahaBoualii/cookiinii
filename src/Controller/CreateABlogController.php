<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CreateABlogController extends AbstractController
{
    #[Route('/create/a/blog', name: 'app_create_a_blog')]
    public function index(): Response
    {
        return $this->render('create_a_blog/index.html.twig');
    }
}
