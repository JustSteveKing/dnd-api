<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Enums\ItemType;
use App\Models\Item;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

final class ItemFactory extends Factory
{
    protected $model = Item::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->words(asText: true),
            'type' => ItemType::ARTIFACT,
            'description' => $this->faker->paragraphs(asText: true),
            'user_id' => User::factory(),
        ];
    }
}
