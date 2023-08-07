<?php

declare(strict_types=1);

namespace App\Casts;

use App\DataObjects\Objective;
use Illuminate\Contracts\Database\Eloquent\CastsAttributes;
use Illuminate\Database\Eloquent\Model;

final class ObjectiveCast implements CastsAttributes
{
    /**
     * @param Model $model
     * @param string $key
     * @param array<int,array> $value
     * @param array $attributes
     * @return array<int,Objective>
     */
    public function get(Model $model, string $key, mixed $value, array $attributes): array
    {
        return array_map(
            callback: static fn (array $objective): Objective => Objective::fromArray(
                data: $objective,
            ),
            array: $value,
        );
    }

    /**
     * @param Model $model
     * @param string $key
     * @param array<int,Objective> $value
     * @param array $attributes
     * @return array
     */
    public function set(Model $model, string $key, mixed $value, array $attributes): array
    {
        return array_map(
            callback: static fn (Objective $objective): array => $objective->toArray(),
            array: $value,
        );
    }
}
