<?php

namespace App\Models;

use App\Enums\Decision;
use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Submission extends Model
{
    use HasFactory;
    use HasUlids;

    protected $fillable = [
        'decision',
        'campaign_id',
        'character_id',
        'user_id',
    ];

    protected $casts = [
        'decision' => Decision::class,
    ];

    public function campaign(): BelongsTo
    {
        return $this->belongsTo(
            related: Campaign::class,
            foreignKey: 'campaign_id',
        );
    }

    public function character(): BelongsTo
    {
        return $this->belongsTo(
            related: Character::class,
            foreignKey: 'character_id',
        );
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(
            related: User::class,
            foreignKey: 'user_id',
        );
    }
}
