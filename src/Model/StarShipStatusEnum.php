<?php

namespace App\Model;

enum StarShipStatusEnum: string
{
    case WAITING = 'waiting';
    case IN_PROGRESS = 'in_progress';
    case COMPLETED = 'completed';
}
