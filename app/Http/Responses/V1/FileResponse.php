<?php

declare(strict_types=1);

namespace App\Http\Responses\V1;

use Illuminate\Contracts\Support\Responsable;
use JustSteveKing\Tools\Http\Enums\Status;
use Symfony\Component\HttpFoundation\BinaryFileResponse;

final readonly class FileResponse implements Responsable
{
    public function __construct(
        private string $path,
        private Status $status = Status::OK,
    ) {
    }

    public function toResponse($request): BinaryFileResponse
    {
        return new BinaryFileResponse(
            file: $this->path,
            status: $this->status->value,
            headers: [],
            public: true,
            autoEtag: true,
            autoLastModified: true,
        );
    }
}
