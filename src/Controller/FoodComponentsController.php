<?php

namespace App\Controller;

use App\Entity\Meal;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class FoodComponentsController extends AbstractController
{
    #[Route('/food_components/{id}', name: 'app_food_components')]
    public function index(Meal $meal = null ): Response
    {
        return $this->render('food_components/meal.html.twig', ['meal' => $meal]);
    }


}
