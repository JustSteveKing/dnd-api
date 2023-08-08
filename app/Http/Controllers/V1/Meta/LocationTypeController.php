<?php

declare(strict_types=1);

namespace App\Http\Controllers\V1\Meta;

use App\Enums\LocationType;
use App\Http\Resources\V1\Meta\LocationTypeResource;
use App\Http\Responses\V1\CollectionResponse;
use Illuminate\Contracts\Support\Responsable;
use Illuminate\Http\Request;

final class LocationTypeController
{
    public function __invoke(Request $request): Responsable
    {
        return new CollectionResponse(
            data: LocationTypeResource::collection(
                resource: LocationType::cases(),
            ),
        );
    }
}
