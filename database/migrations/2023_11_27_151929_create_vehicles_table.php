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
        Schema::create('vehicles', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('model', 30)->unique();
            $table->tinyInteger('number_of_wheels')->default(4);
            $table->enum('transmission', ['manual', 'automatic'])->default('manual');
            $table->integer('gasoline_capacity');
            $table->enum('rate', ['0', '1', '2', '3', '4', '5'])->default('0');
            $table->foreignUuid('brand_id')->constrained();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehicles');
    }
};
