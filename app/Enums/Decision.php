<?php

declare(strict_types=1);

namespace App\Enums;

enum Decision: string
{
    case SUBMITTED = 'submitted';

    case ACCEPTED = 'accepted';

    case REJECTED = 'rejected';
}
