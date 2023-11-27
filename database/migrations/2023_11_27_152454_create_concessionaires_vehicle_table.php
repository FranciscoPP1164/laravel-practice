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
        Schema::create('concessionaire_vehicle', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('concessionaire_id')->constrained();
            $table->foreignUuid('vehicle_id')->constrained();
            $table->string('color')->default('white');
            $table->float('price');
            $table->bigInteger('stock')->default(0);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('concessionaire_vehicle');
    }
};
