<?php

declare(strict_types=1);

use App\Enums\ItemType;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    public function up(): void
    {
        Schema::create('items', static function (Blueprint $table): void {
            $table->ulid('id')->primary();

            $table->string('name');
            $table->string('type')->default(ItemType::ARTIFACT->value);

            $table->text('description')->nullable();

            $table
                ->foreignUlid('user_id')
                ->index()
                ->constrained()
                ->cascadeOnDelete();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('items');
    }
};
