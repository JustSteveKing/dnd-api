<?php

declare(strict_types=1);

namespace App\Http\Resources\V1\Meta;

use App\Enums\LocationType;
use Illuminate\Http\Request;
use TiMacDonald\JsonApi\JsonApiResource;

/**
 * @property-read LocationType $resource
 */
final class LocationTypeResource extends JsonApiResource
{
    public function toType(Request $request): string
    {
        return 'Location Type';
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
            'description' => LocationType::description(
                enum: $this->resource,
            ),
            'media' => LocationType::media(
                enum: $this->resource,
            ),
        ];
    }
}
