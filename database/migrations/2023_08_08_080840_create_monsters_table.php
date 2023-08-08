<?php

declare(strict_types=1);

use App\Enums\MonsterType;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('monsters', static function (Blueprint $table): void {
            $table->ulid('id')->primary();

            $table->string('name');
            $table->string('type')->default(MonsterType::HUMANOID->value);

            $table->text('summary')->nullable();
            $table->text('story')->nullable();

            $table->unsignedInteger('level')->default(1);

            $table->json('stats')->nullable();

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
        Schema::dropIfExists('monsters');
    }
};
