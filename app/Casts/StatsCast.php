<?php

declare(strict_types=1);

namespace App\Casts;

use App\DataObjects\Stats;
use Illuminate\Contracts\Database\Eloquent\CastsAttributes;
use Illuminate\Database\Eloquent\Model;

final class StatsCast implements CastsAttributes
{
    /**
     * @param Model $model
     * @param string $key
     * @param array $value
     * @param array $attributes
     * @return mixed
     */
    public function get(Model $model, string $key, mixed $value, array $attributes): Stats
    {
        return Stats::fromArray(
            data: $value,
        );
    }

    /**
     * @param Model $model
     * @param string $key
     * @param Stats $value
     * @param array $attributes
     * @return array
     */
    public function set(Model $model, string $key, mixed $value, array $attributes): array
    {
        return $value->toArray();
    }
}
