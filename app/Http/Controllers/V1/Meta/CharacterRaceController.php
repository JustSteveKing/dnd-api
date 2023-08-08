<?php

declare(strict_types=1);

namespace App\Http\Controllers\V1\Meta;

use App\Enums\CharacterRace;
use App\Http\Resources\V1\Meta\CharacterRaceResource;
use App\Http\Responses\V1\CollectionResponse;
use Illuminate\Contracts\Support\Responsable;
use Illuminate\Http\Request;

final class CharacterRaceController
{
    public function __invoke(Request $request): Responsable
    {
        return new CollectionResponse(
            data: CharacterRaceResource::collection(
                resource: CharacterRace::cases(),
            ),
        );
    }
}
