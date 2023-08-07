<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Enums\Decision;
use App\Models\Campaign;
use App\Models\Character;
use App\Models\Submission;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

final class SubmissionFactory extends Factory
{
    protected $model = Submission::class;

    public function definition(): array
    {
        return [
            'decision' => Decision::SUBMITTED,
            'campaign_id' => Campaign::factory(),
            'character_id' => Character::factory(),
            'user_id' => User::factory(),
        ];
    }
}
