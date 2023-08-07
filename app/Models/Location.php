<?php

declare(strict_types=1);

namespace App\Models;

use App\Enums\LocationType;
use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

final class Location extends Model
{
    use HasFactory;
    use HasUlids;

    protected $fillable = [
        'name',
        'type',
        'description',
        'user_id',
    ];

    protected $casts = [
        'type' => LocationType::class,
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(
            related: User::class,
            foreignKey: 'user_id',
        );
    }
}
