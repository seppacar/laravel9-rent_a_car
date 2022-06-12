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
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('car_id');
            $table->date('rezdate');
            $table->time('reztime');
            $table->date('returndate');
            $table->time('returntime');
            $table->integer('days');
            $table->float('price', 8, 2);
            $table->integer('amount');
            $table->string('ip', 20)->nullable();
            $table->string('note')->nullable();
            $table->string('status', 20)->default('Waiting Payment');
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
        Schema::dropIfExists('reservations');
    }
};
