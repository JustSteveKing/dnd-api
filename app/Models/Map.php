<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

final class Map extends Model
{
    use HasFactory;
    use HasUlids;

    protected $fillable = [
        'name',
        'description',
    ];
}
