<?php

declare(strict_types=1);

namespace App\Models\Dispatchables;

use App\DataObjects\Stats;
use App\Models\Character;

final class CharacterCreated
{
    public function __construct(Character $character)
    {
        if ( ! $character->stats) {
            $character->update([
                'stats' => Stats::default(),
            ]);
        }
    }
}
