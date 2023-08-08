<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

final class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasUlids;
    use Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function maps(): HasMany
    {
        return $this->hasMany(
            related: Map::class,
            foreignKey: 'user_id',
        );
    }

    public function campaigns(): HasMany
    {
        return $this->hasMany(
            related: Campaign::class,
            foreignKey: 'user_id',
        );
    }

    public function locations(): HasMany
    {
        return $this->hasMany(
            related: Location::class,
            foreignKey: 'user_id',
        );
    }

    public function items(): HasMany
    {
        return $this->hasMany(
            related: Item::class,
            foreignKey: 'user_id',
        );
    }

    public function characters(): HasMany
    {
        return $this->hasMany(
            related: Character::class,
            foreignKey: 'user_id',
        );
    }

    public function submissions(): HasMany
    {
        return $this->hasMany(
            related: Submission::class,
            foreignKey: 'user_id',
        );
    }

    public function monsters(): HasMany
    {
        return $this->hasMany(
            related: Monster::class,
            foreignKey: 'user_id',
        );
    }
}
