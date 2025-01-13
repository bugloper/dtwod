<?php

namespace App\Controller;

use App\Repository\StarShipRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MainController extends AbstractController
{
    #[Route('/', name: 'app_main_homepage')]
    public function homepage(StarShipRepository $repository): Response
    {
        $ships =  $repository->findAll();
        $myShip =  $ships[array_rand($ships)];
        return $this->render(
            'main/homepage.html.twig',
            [
                'ships' => $ships,
                'myShip' => $myShip
            ]
        );
    }
}