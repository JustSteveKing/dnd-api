<?php

declare(strict_types=1);

namespace App\Models;

use App\Casts\ObjectiveCast;
use App\Enums\CampaignStatus;
use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

final class Campaign extends Model
{
    use HasFactory;
    use HasUlids;

    protected $fillable = [
        'title',
        'status',
        'storyline',
        'objectives',
        'progress',
        'map_id',
        'user_id', // The DM
    ];

    protected $casts = [
        'status' => CampaignStatus::class,
        'objectives' => ObjectiveCast::class,
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(
            related: User::class,
            foreignKey: 'user_id',
        );
    }

    public function map(): BelongsTo
    {
        return $this->belongsTo(
            related: Map::class,
            foreignKey: 'map_id',
        );
    }

    public function locations(): HasMany
    {
        return $this->hasMany(
            related: Location::class,
            foreignKey: 'campaign_id',
        );
    }

    public function submissions(): HasMany
    {
        return $this->hasMany(
            related: Submission::class,
            foreignKey: 'campaign_id',
        );
    }
}
