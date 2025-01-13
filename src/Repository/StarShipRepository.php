<?php

namespace App\Repository;

use App\Model\StarShip;
use App\Model\StarShipStatusEnum;
use Psr\Log\LoggerInterface;

readonly class StarShipRepository
{
    private array $starShips;

    public function __construct(private LoggerInterface $logger)
    {
        $this->starShips = [
            new StarShip(
                1,
                'USS Espresso (NCC-1234-C)',
                'Latte',
                'James T. Quick!',
                StarShipStatusEnum::COMPLETED
            ),
            new StarShip(
                2,
                'USS Wanderlust (NCC-2024-W)',
                'Delta Tourist',
                'Kathryn Journeyway',
                StarShipStatusEnum::WAITING
            ),
            new StarShip(
                3,
                'USS Voyager (NCC-74656)',
                'Intrepid',
                'Kathryn Janeway',
                StarShipStatusEnum::COMPLETED
            ),
            new StarShip(
                4,
                'USS Enterprise (NCC-1701-D)',
                'Galaxy',
                'Jean-Luc Picard',
                StarShipStatusEnum::IN_PROGRESS
            ),
            new StarShip(
                5,
                'USS Defiant (NX-74205)',
                'Defiant',
                'Benjamin Sisko',
                StarShipStatusEnum::WAITING
            ),
        ];

    }

    public function findAll(): array
    {
        $this->logger->info("StarShips Retrieved");
        return $this->starShips;
    }

    public function findOne(int $id): ?StarShip
    {
        foreach ($this->starShips as $starShip) {
            if ($starShip->getId() === $id) {
                return $starShip;
            }
        }
        return null;
    }
}
