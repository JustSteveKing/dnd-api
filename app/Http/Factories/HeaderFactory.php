<?php

declare(strict_types=1);

namespace App\Http\Factories;

final class HeaderFactory
{
    /**
     * @return array<string,string>
     */
    public static function default(): array
    {
        return [
            'Content-Type' => 'application/vnd.api+json',
        ];
    }
}
