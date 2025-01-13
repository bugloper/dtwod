<?php

namespace App\Controller;

use App\Repository\StarShipRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class StarShipController extends AbstractController
{
    #[Route('/starship/{id<\d+>}', name: 'app_starship_show', methods: ['GET'])]
    public function show(int $id, StarShipRepository $repository): Response
    {
        $starship = $repository->findOne($id);
        if(!$starship) {
            throw $this->createNotFoundException('No starship found for id '.$id);
        }
        return $this->render(
            'starship/show.html.twig',
            ['ship' => $starship]
        );
    }
}
