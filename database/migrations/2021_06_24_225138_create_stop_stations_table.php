<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStopStationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stop_stations', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(\App\Models\Route::class)->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->unsignedBigInteger('from_city_id')->nullable();
            $table->foreign('from_city_id')->references('id')->on('cities')->cascadeOnDelete()->cascadeOnUpdate();
            $table->unsignedBigInteger('to_city_id')->nullable();
            $table->foreign('to_city_id')->references('id')->on('cities')->cascadeOnDelete()->cascadeOnUpdate();
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
        Schema::dropIfExists('stop_stations');
    }
}
