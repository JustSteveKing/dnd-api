<?php

declare(strict_types=1);

namespace App\Enums\Attributes;

use Attribute;

#[Attribute]
final readonly class Media
{
    public function __construct(
        public string $value,
    ) {
    }
}
