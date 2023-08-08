<?php

declare(strict_types=1);

namespace App\Http\Resources\V1\Meta;

use App\Enums\CharacterClass;
use Illuminate\Http\Request;
use TiMacDonald\JsonApi\JsonApiResource;

/**
 * @property-read CharacterClass $resource
 */
final class CharacterClassResource extends JsonApiResource
{
    public function toType(Request $request): string
    {
        return 'Character Class';
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
            'description' => CharacterClass::description(
                enum: $this->resource,
            ),
            'media' => CharacterClass::media(
                enum: $this->resource,
            ),
        ];
    }
}
