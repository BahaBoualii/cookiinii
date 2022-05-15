<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CommunityPageController extends AbstractController
{
    #[Route('community', name: 'app_community_page')]
    public function index(): Response
    {
        return $this->render('community_page/index.html.twig');
    }
}
