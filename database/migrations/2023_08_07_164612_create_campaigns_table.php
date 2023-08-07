<?php

declare(strict_types=1);

use App\Enums\CampaignStatus;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    public function up(): void
    {
        Schema::create('campaigns', static function (Blueprint $table): void {
            $table->ulid('id')->primary();

            $table->string('title');
            $table->string('status')->default(CampaignStatus::PLANNING->value);

            $table->text('storyline')->nullable();
            $table->json('objectives')->nullable();

            $table->unsignedInteger('progress')->default(0);

            $table
                ->foreignUlid('map_id')
                ->index()
                ->constrained()
                ->cascadeOnDelete();

            $table
                ->foreignUlid('user_id')
                ->index()
                ->comment('The Dungeon Master')
                ->constrained()
                ->cascadeOnDelete();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('campaigns');
    }
};
