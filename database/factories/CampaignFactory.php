<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Enums\CampaignStatus;
use App\Models\Campaign;
use App\Models\Map;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

final class CampaignFactory extends Factory
{
    protected $model = Campaign::class;

    public function definition(): array
    {
        return [
            'title' => $this->faker->words(asText: true),
            'status' => CampaignStatus::PLANNING,
            'storyline' => $this->faker->paragraphs(asText: true),
            'objectives' => [],
            'progress' => 0,
            'map_id' => Map::factory(),
            'user_id' => User::factory(),
        ];
    }
}
