<?php

declare(strict_types=1);

namespace App\Enums;

enum ItemType: string
{
    case WEAPON = 'weapong';
    case POTION = 'potion';
    case ARTIFACT = 'artifact';
}
