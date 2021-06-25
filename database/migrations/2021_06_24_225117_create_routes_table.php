<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoutesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('routes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('start_city_id')->nullable();
            $table->foreign('start_city_id')->references('id')->on('cities')->cascadeOnDelete()->cascadeOnUpdate();
            $table->unsignedBigInteger('end_city_id')->nullable();
            $table->foreign('end_city_id')->references('id')->on('cities')->cascadeOnDelete()->cascadeOnUpdate();
            $table->softDeletes();
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
        Schema::dropIfExists('routes');
    }
}
