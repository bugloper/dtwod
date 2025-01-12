<?php

declare(strict_types=1);

namespace App\Controller;

use App\Model\StarShip;
use App\Repository\StarShipRepository;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class StarShipApiController extends AbstractController
{
    #[Route('/api/starships', name: 'api_starships', methods: ['GET'])]
    public function getCollection(StarShipRepository $repository): Response
    {
        return $this->json($repository->findStarShips());
    }
}