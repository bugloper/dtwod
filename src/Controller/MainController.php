<?php

namespace App\Controller;

use App\Repository\StarShipRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MainController extends AbstractController
{
    #[Route('/')]
    public function homepage(StarShipRepository $repository): Response
    {
        $starShips =  $repository->findStarShips();
        $myShip =  $starShips[array_rand($starShips)];
        return $this->render(
            'main/homepage.html.twig',
            [
                'starShips' => $starShips,
                'myShip' => $myShip
            ]
        );
    }
}