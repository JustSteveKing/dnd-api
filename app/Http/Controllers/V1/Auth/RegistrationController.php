<?php

declare(strict_types=1);

namespace App\Http\Controllers\V1\Auth;

use App\Http\Requests\V1\Auth\RegistrationRequest;
use App\Http\Responses\V1\TokenResponse;
use App\Services\IdentityService;
use Illuminate\Contracts\Support\Responsable;
use JustSteveKing\Tools\Http\Enums\Status;
use Throwable;

final readonly class RegistrationController
{
    public function __construct(
        private IdentityService $service
    ) {}

    /**
     * @param RegistrationRequest $request
     * @return Responsable
     * @throws Throwable
     */
    public function __invoke(RegistrationRequest $request): Responsable
    {
        $token = $this->service->token(
            user: $this->service->user(
                payload: $request->payload(),
            ),
            name: (string) $request->headers->get('X-CLIENT-NAME', $request->ip()),
        );

        return new TokenResponse(
            token: $token,
            status: Status::CREATED,
        );
    }
}
