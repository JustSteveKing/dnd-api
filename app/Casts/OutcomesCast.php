<?php

declare(strict_types=1);

namespace App\Casts;

use App\DataObjects\Outcome;
use Illuminate\Contracts\Database\Eloquent\CastsAttributes;
use Illuminate\Database\Eloquent\Model;

final class OutcomesCast implements CastsAttributes
{
    /**
     * @param Model $model
     * @param string $key
     * @param mixed $value
     * @param array $attributes
     * @return array<int,Outcome>
     */
    public function get(Model $model, string $key, mixed $value, array $attributes): array
    {
        return array_map(
            callback: static fn (array $outcome): Outcome => Outcome::fromArray(
                data: $outcome,
            ),
            array: $value,
        );
    }

    /**
     * @param Model $model
     * @param string $key
     * @param array<int,Outcome> $value
     * @param array $attributes
     * @return array<int,array>
     */
    public function set(Model $model, string $key, mixed $value, array $attributes): array
    {
        return array_map(
            callback: static fn (Outcome $outcome): array => $outcome->toArray(),
            array: $value,
        );
    }
}
