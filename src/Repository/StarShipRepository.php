<?php

namespace App\Repository;

use App\Model\StarShip;
use Psr\Log\LoggerInterface;

class StarShipRepository
{
    public function __construct(private readonly LoggerInterface $logger)
    {
    }
    public function findStarShips(): array
    {
        $this->logger->info("StarShip Retrieved");
        return [
            new StarShip(1, 'USS Espresso (NCC-1234-C)', 'Latte', 'James T. Quick!', 'repaired'),
            new StarShip(2, 'USS Wanderlust (NCC-2024-W)', 'Delta Tourist', 'Kathryn Journeyway', 'under construction'),
            new StarShip(3, 'USS Voyager (NCC-74656)', 'Intrepid', 'Kathryn Janeway', 'returned'),
            new StarShip(4, 'USS Enterprise (NCC-1701-D)', 'Galaxy', 'Jean-Luc Picard', 'destroyed'),
            new StarShip(5, 'USS Defiant (NX-74205)', 'Defiant', 'Benjamin Sisko', 'active'),
        ];
    }
}