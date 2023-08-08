<?php

declare(strict_types=1);

use App\Http\Controllers\V1\Meta;
use Illuminate\Support\Facades\Route;

Route::get('character-classes', Meta\CharacterClassController::class)->name('character:class');
Route::get('character-races', Meta\CharacterRaceController::class)->name('character:races');
Route::get('location-types', Meta\LocationTypeController::class)->name('location:types');
Route::get('monster-types', Meta\MonsterTypeController::class)->name('monster:types');
