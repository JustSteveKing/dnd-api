<?php

declare(strict_types=1);

namespace Database\Factories;

use App\DataObjects\Stats;
use App\Enums\CharacterClass;
use App\Models\Character;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

final class CharacterFactory extends Factory
{
    protected $model = Character::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'race' => $this->faker->word(),
            'class' => CharacterClass::FIGHTER,
            'level' => $this->faker->numberBetween(0,100),
            'summary' => $this->faker->paragraphs(nb: 2, asText: true),
            'story' => $this->faker->paragraphs(nb: 5, asText: true),
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
