<?php

declare(strict_types=1);

namespace App\Controller;

use App\Repository\StarShipRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/api/starships')]
class StarShipApiController extends AbstractController
{
    #[Route('', methods: ['GET'])]
    public function getCollection(StarShipRepository $repository): Response
    {
        return $this->json($repository->findAll());
    }

    #[Route('/{id<\d+>}', methods: ['GET'])]
    public function get(int $id, StarShipRepository $repository): Response
    {
        $starship = $repository->findOne($id);

        if (!$starship) {
            throw $this->createNotFoundException("Starship not found");
        }

        return $this->json($starship);
    }
}