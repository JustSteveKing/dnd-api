<?php

declare(strict_types=1);

use App\Http\Controllers\V1\Media\ImageController;
use Illuminate\Support\Facades\Route;

Route::get('images/{path}', ImageController::class)->name('images');
