<?php

declare(strict_types=1);

namespace App\Models;

use App\Enums\CharacterClass;
use App\Enums\CharacterRace;
use App\Models\Dispatchables\CharacterCreated;
use Illuminate\Database\Eloquent\Casts\AsArrayObject;
use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

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
        'stats' => AsArrayObject::class,
    ];

    protected $dispatchesEvents = [
        'created' => CharacterCreated::class,
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(
            related: User::class,
            foreignKey: 'user_id',
        );
    }

    public function submissions(): HasMany
    {
        return $this->hasMany(
            related: Submission::class,
            foreignKey: 'character_id',
        );
    }
}
