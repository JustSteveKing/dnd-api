<?php

declare(strict_types=1);

namespace App\Enums;

enum CampaignStatus: string
{
    case PLANNING = 'planning';
    case STARTED = 'started';
    case FINISHED = 'finished';
}
