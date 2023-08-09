<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;

Route::middleware(['cache.headers:public;max_age=2628000;etag'])->prefix('meta')->as('meta:')->group(
    base_path('routes/v1/meta.php')
);

Route::middleware(['cache.headers:public;max_age=2628000;etag'])->prefix('media')->as('media:')->group(
    base_path('routes/v1/media.php')
);

Route::prefix('auth')->as('auth:')->group(
    base_path('routes/v1/auth.php'),
);
