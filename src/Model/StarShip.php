<?php

namespace App\Model;

class StarShip
{
    public function __construct(
        private int    $id,
        private string $name,
        private string $class,
        private string $captain,
        private StarShipStatusEnum $status,
    )
    {

    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getClass(): string
    {
        return $this->class;
    }

    /**
     * @param string $class
     */
    public function setClass(string $class): void
    {
        $this->class = $class;
    }

    /**
     * @return string
     */
    public function getCaptain(): string
    {
        return $this->captain;
    }

    /**
     * @param string $captain
     */
    public function setCaptain(string $captain): void
    {
        $this->captain = $captain;
    }

    /**
     * @return string
     */
    public function getStatus(): StarShipStatusEnum
    {
        return $this->status;
    }

    /**
     * @param string $status
     */
    public function setStatus(string $status): void
    {
        $this->status = $status;
    }

    public function getStatusString(): string
    {
        return $this->status->value;
    }

    public function getStatusImageFileName(): string
    {
        return match ($this->status)
        {
            StarShipStatusEnum::WAITING => '/images/status-waiting.png',
            StarShipStatusEnum::IN_PROGRESS => '/images/status-in-progress.png',
            StarShipStatusEnum::COMPLETED => '/images/status-complete.png',
        };
    }
}