<?php

declare(strict_types=1);

namespace App\Models;

use App\Casts\StatsCast;
use App\Enums\CharacterClass;
use App\Enums\CharacterRace;
use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

final class Character extends Model
{
    use HasFactory;
    use HasUlids;

    protected $fillable = [
        'name',
        'race',
        'class',
        'level',
        'summary',
        'story',
        'stats',
        'user_id',
    ];

    protected $casts = [
        'race' => CharacterRace::class,
        'class' => CharacterClass::class,
        'stats' => StatsCast::class,
    ];
}
