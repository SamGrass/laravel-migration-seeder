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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('company', 60);
            $table->string('arrival_station', 60);
            $table->string('departure_station', 60);
            $table->dateTime('arrival_time');
            $table->dateTime('departure_time');
            $table->smallInteger('code',)->unsigned();
            $table->tinyInteger('wagons')->unsigned();
            $table->tinyInteger('is_in_time')->default(true);
            $table->tinyInteger('is_cancelled')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
