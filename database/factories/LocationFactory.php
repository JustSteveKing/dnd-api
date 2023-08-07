<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Enums\LocationType;
use App\Models\Campaign;
use App\Models\Location;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

final class LocationFactory extends Factory
{
    protected $model = Location::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->words(asText: true),
            'type' => LocationType::TOWN,
            'description' => $this->faker->paragraphs(asText: true),
            'user_id' => User::factory(),
            'campaign_id' => Campaign::factory(),
        ];
    }
}
