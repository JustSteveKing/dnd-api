<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Campaign;
use App\Models\Character;
use App\Models\Item;
use App\Models\Location;
use App\Models\Map;
use App\Models\Submission;
use App\Models\User;
use Illuminate\Database\Seeder;

final class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $user = User::factory()->create([
            'name' => 'Steve McDougall',
            'email' => 'juststevemcd@gmail.com',
        ]);

        $map = Map::factory()->for($user)->create();

        $campaign = Campaign::factory()->for($user)->for($map)->create();

        Location::factory()->for($campaign)->count(10)->create();

        Item::factory()->for($user)->count(10)->create();

        Character::factory()->for($user)->create();

        Character::factory()->count(10)->create();

        Submission::factory()->for($campaign)->count(10)->create();
    }
}
