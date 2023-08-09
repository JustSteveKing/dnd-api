<?php

declare(strict_types=1);

namespace App\Commands\Identity;

use App\Models\User;
use Illuminate\Database\DatabaseManager;
use Laravel\Sanctum\NewAccessToken;
use Throwable;

final readonly class CreateTokenForUser
{
    public function __construct(
        private DatabaseManager $database,
    ) {}

    /**
     * @param User $user
     * @param string $name
     * @param array<int,string> $abilities
     * @return NewAccessToken
     * @throws Throwable
     */
    public function handle(User $user, string $name, array $abilities = ['*']): NewAccessToken
    {
        return $this->database->transaction(
            callback: fn () => $user->createToken(
                name: $name,
                abilities: $abilities,
            ),
            attempts: 2,
        );
    }
}
