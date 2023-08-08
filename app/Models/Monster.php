<?php

declare(strict_types=1);

namespace App\Models;

use App\Enums\MonsterType;
use Illuminate\Database\Eloquent\Casts\AsArrayObject;
use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

final class Monster extends Model
{
    use HasFactory;
    use HasUlids;

    protected $fillable = [
        'name',
        'type',
        'summary',
        'story',
        'level',
        'stats',
        'user_id',
    ];

    protected $casts = [
        'type' => MonsterType::class,
        'stats' => AsArrayObject::class,
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(
            related: User::class,
            foreignKey: 'user_id',
        );
    }
}
