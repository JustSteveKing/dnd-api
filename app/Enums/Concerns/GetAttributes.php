<?php

declare(strict_types=1);

namespace App\Enums\Concerns;

use App\Enums\Attributes\Description;
use App\Enums\Attributes\Media;
use BackedEnum;
use Illuminate\Support\Str;
use ReflectionClassConstant;

trait GetAttributes
{
    /**
     * @param BackedEnum $enum
     * @return string
     */
    public static function description(BackedEnum $enum): string
    {
        $reflection = new ReflectionClassConstant(
            class: self::class,
            constant: $enum->name
        );
        $attributes = $reflection->getAttributes(
            name: Description::class,
        );

        if (0 === count($attributes)) {
            return Str::headline(
                value: $enum->value,
            );
        }

        return $attributes[0]->newInstance()->value;
    }

    /**
     * @param BackedEnum $enum
     * @return string
     */
    public static function media(BackedEnum $enum): string
    {
        $reflection = new ReflectionClassConstant(
            class: self::class,
            constant: $enum->name
        );
        $attributes = $reflection->getAttributes(
            name: Media::class,
        );

        if (0 === count($attributes)) {
            return Str::headline(
                value: $enum->value,
            );
        }

        return $attributes[0]->newInstance()->value;
    }
}
