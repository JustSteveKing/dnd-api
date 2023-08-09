<?php

declare(strict_types=1);

namespace App\Http\Controllers\V1\Media;

use App\Http\Responses\V1\FileResponse;

use function explode;
use function file_exists;

use Illuminate\Contracts\Support\Responsable;
use Illuminate\Http\Request;
use InvalidArgumentException;

use function is_dir;

use JustSteveKing\Tools\Http\Enums\Status;

use function resource_path;

final class ImageController
{
    public function __invoke(Request $request, string $path): Responsable
    {
        $parts = explode(
            separator: '-',
            string: $path,
        );

        if ( ! is_dir(resource_path("images/{$parts[0]}"))) {
            throw new InvalidArgumentException(
                message: 'Media type does not exist: ' . $parts[0],
                code: Status::UNPROCESSABLE_CONTENT->value,
            );
        }

        if ( ! file_exists(resource_path("images/{$parts[0]}/{$parts[1]}.png"))) {
            throw new InvalidArgumentException(
                message: 'Media does not exist: ' . $parts[1],
                code: Status::UNPROCESSABLE_CONTENT->value,
            );
        }

        return new FileResponse(
            path: resource_path(
                "images/{$parts[0]}/{$parts[1]}.png",
            ),
        );
    }
}
