<?php

declare(strict_types=1);

namespace App\Http\Resources\V1\Meta;

use App\Enums\CharacterRace;
use Illuminate\Http\Request;
use TiMacDonald\JsonApi\JsonApiResource;

/**
 * @property-read CharacterRace $resource
 */
final class CharacterRaceResource extends JsonApiResource
{
    public function toType(Request $request): string
    {
        return 'Character Race';
    }

    public function toId(Request $request): string
    {
        return $this->resource->name;
    }

    public function toAttributes(Request $request): array
    {
        return [
            'name' => $this->resource->name,
            'value' => $this->resource->value,
            'description' => CharacterRace::description(
                enum: $this->resource,
            ),
            'media' => CharacterRace::media(
                enum: $this->resource,
            ),
        ];
    }
}
