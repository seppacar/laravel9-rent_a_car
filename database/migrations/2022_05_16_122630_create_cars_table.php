<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id');
            $table->foreignId('user_id');
            $table->string('title');
            $table->string('keywords')->nullable();
            $table->string('description')->nullable();
            $table->string('image')->nullable();
            $table->string('detail')->nullable();
            $table->float('price')->nullable();
            $table->string('transmission_type', 10)->nullable();
            $table->string('brand')->nullable();
            $table->string('model')->nullable();
            $table->string('make')->nullable();
            $table->integer('seats')->nullable();
            $table->integer('doors')->nullable();
            $table->integer('horsepower')->nullable();
            $table->integer('engine_capacity')->nullable();
            $table->string('fuel_type', 10)->nullable();
            $table->integer('boot_capacity')->nullable();
            $table->string('status', 8)->default('passive');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cars');
    }
};
