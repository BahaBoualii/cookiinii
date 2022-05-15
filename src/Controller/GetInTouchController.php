<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class GetInTouchController extends AbstractController
{
    #[Route('/get/in/touch', name: 'app_get_in_touch')]
    public function index(): Response
    {
        return $this->render('get_in_touch/index.html.twig');
    }
}
