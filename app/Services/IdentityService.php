<?php

declare(strict_types=1);

namespace App\Services;

use App\Commands\Identity\CreateNewUser;
use App\Commands\Identity\CreateTokenForUser;
use App\Http\Payloads\V1\Auth\NewUser;
use App\Models\User;
use Laravel\Sanctum\NewAccessToken;
use Throwable;

final readonly class IdentityService
{
    /**
     * @param CreateNewUser $user
     * @param CreateTokenForUser $token
     */
    public function __construct(
        private CreateNewUser $user,
        private CreateTokenForUser $token,
    ) {}

    /**
     * @param NewUser $payload
     * @return User
     * @throws Throwable
     */
    public function user(NewUser $payload): User
    {
        return $this->user->handle(
            payload: $payload,
        );
    }

    /**
     * @param User $user
     * @param string $name
     * @param array<int,string> $abilities
     * @return NewAccessToken
     * @throws Throwable
     */
    public function token(User $user, string $name, array $abilities = ['*']): NewAccessToken
    {
        return $this->token->handle(
            user: $user,
            name: $name,
            abilities: $abilities,
        );
    }
}
