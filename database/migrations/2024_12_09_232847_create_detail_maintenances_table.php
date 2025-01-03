<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('detail_maintenances', function (Blueprint $table) {
            $table->id();
            // $table->unsignedBigInteger('laboratory_id');
            $table->unsignedBigInteger('maintenance_id');
            $table->unsignedBigInteger('asset_id');
            $table->string('description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_maintenances');
    }
};
