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
        Schema::create('cities', function (Blueprint $table) {
            $table->id('city_id');
            $table->string('code');
            $table->unsignedBigInteger('country_id');
            $table->boolean('status');
            $table->timestamps();
        });

        Schema::table('cities', function (Blueprint $table) {
            $table->foreign('country_id')->references('country_id')->references('countries');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cities');
    }
};
