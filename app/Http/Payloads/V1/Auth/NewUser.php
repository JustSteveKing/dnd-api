<?php

declare(strict_types=1);

namespace App\Http\Payloads\V1\Auth;

use App\Models\User;
use Laravel\Sanctum\NewAccessToken;

final class NewUser
{
    /**
     * @param string $name
     * @param string $email
     * @param string $password
     * @param string|null $user
     * @param NewAccessToken|null $token
     */
    public function __construct(
        private readonly string $name,
        private readonly string $email,
        private readonly string $password,
        public null|string $user = null,
        public null|NewAccessToken $token = null,
    ) {}

    public function user(string $id): NewUser
    {
        $this->user = $id;

        return $this;
    }

    /**
     * @return array{name:string,email:string,password:string}
     */
    public function toArray(): array
    {
        return [
            'name' => $this->name,
            'email' => $this->email,
            'password' => $this->password,
        ];
    }

    /**
     * @param array{name:string,email:string,password:string} $data
     * @return NewUser
     */
    public static function fromArray(array $data): NewUser
    {
        return new NewUser(
            name: $data['name'],
            email: $data['email'],
            password: $data['password'],
        );
    }
}
