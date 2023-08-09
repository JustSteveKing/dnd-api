<?php

declare(strict_types=1);

namespace App\Http\Controllers\V1\Auth;

use App\Http\Requests\V1\Auth\LoginRequest;
use App\Http\Responses\V1\TokenResponse;
use App\Services\IdentityService;
use Illuminate\Contracts\Support\Responsable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Throwable;

final readonly class LoginController
{
    /**
     * @param IdentityService $service
     */
    public function __construct(
        private IdentityService $service,
    ) {}

    /**
     * @param LoginRequest $request
     * @return TokenResponse
     * @throws Throwable
     * @throws ValidationException
     */
    public function __invoke(LoginRequest $request): Responsable
    {
        $request->authenticate();

        $token = $this->service->token(
            user: Auth::user(),
            name: (string) $request->headers->get('X-CLIENT-NAME', $request->ip()),
        );

        return new TokenResponse(
            token: $token,
        );
    }
}
