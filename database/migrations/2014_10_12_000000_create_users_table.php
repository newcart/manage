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
        Schema::create('users', function (Blueprint $table) {
            $table->id('user_id');
            $table->string('code', 16);
            $table->string('name');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('email');
            $table->integer('gsm');
            $table->integer('telephone');
            $table->unsignedBigInteger('user_type_id');
            $table->boolean('status');
            $table->string('last_ip');
            $table->string('api_key');
            $table->string('secret_key');
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::table('users', function (Blueprint $table) {
           $table->foreign('user_type_id')->references('type_id')->on('user_types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
