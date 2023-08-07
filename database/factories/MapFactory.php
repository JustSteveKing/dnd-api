<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\Map;
use Illuminate\Database\Eloquent\Factories\Factory;

final class MapFactory extends Factory
{
    protected $model = Map::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->words(asText: true),
            'description' => $this->faker->paragraphs(asText: true),
        ];
    }
}
