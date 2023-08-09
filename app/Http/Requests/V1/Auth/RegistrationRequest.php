<?php

declare(strict_types=1);

namespace App\Http\Requests\V1\Auth;

use App\Http\Payloads\V1\Auth\NewUser;
use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

final class RegistrationRequest extends FormRequest
{
    /**
     * @return array<string, array<int,Password|string|null>>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Password::defaults()],
        ];
    }

    /**
     * @return NewUser
     */
    public function payload(): NewUser
    {
        return NewUser::fromArray(
            data: [
                'name' => $this->string('name')->toString(),
                'email' => $this->string('email')->toString(),
                'password' => Hash::make(
                    value: $this->string('password')->toString(),
                ),
            ],
        );
    }
}
