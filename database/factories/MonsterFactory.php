<?php

declare(strict_types=1);

namespace Database\Factories;

use App\DataObjects\Stats;
use App\Enums\MonsterType;
use App\Models\Monster;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

final class MonsterFactory extends Factory
{
    protected $model = Monster::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'type' => MonsterType::HUMANOID,
            'summary' => $this->faker->paragraphs(nb: 2, asText: true),
            'story' => $this->faker->paragraphs(nb: 5, asText: true),
            'level' => $this->faker->numberBetween(0, 100),
            'stats' => Stats::fromArray(
                data: [
                    'health' => 1,
                    'speed' => 1,
                    'strength' => 1,
                    'dexterity' => 1,
                    'constitution' => 1,
                    'intelligence' => 1,
                    'wisdom' => 1,
                    'charisma' => 1,
                    'mana' => 1,
                ],
            ),
            'user_id' => User::factory(),
        ];
    }
}
