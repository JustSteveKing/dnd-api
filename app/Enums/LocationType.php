<?php

declare(strict_types=1);

namespace App\Enums;

enum LocationType: string
{
    case TOWN = 'town';
    case DUNGEON = 'dungeon';
    case FOREST = 'forest';
    case FIELD = 'field';
}
