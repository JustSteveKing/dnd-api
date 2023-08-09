<?php

declare(strict_types=1);

namespace App\Http\Responses\V1;

use App\Http\Factories\HeaderFactory;
use Illuminate\Contracts\Support\Responsable;
use Illuminate\Http\JsonResponse;
use JustSteveKing\Tools\Http\Enums\Status;
use Laravel\Sanctum\NewAccessToken;

final readonly class TokenResponse implements Responsable
{
    public function __construct(
        private NewAccessToken $token,
        private Status $status = Status::OK,
    ) {}

    public function toResponse($request): JsonResponse
    {
        return new JsonResponse(
            data: [
                'token' => $this->token->plainTextToken,
            ],
            status: $this->status->value,
            headers: HeaderFactory::default(),
        );
    }
}
