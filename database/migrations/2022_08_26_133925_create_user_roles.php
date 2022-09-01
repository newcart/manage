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
        Schema::create('user_roles', function (Blueprint $table) {
            $table->id('role_id');
            $table->unsignedBigInteger('user_type_id');
            $table->unsignedBigInteger('service_id');
            $table->boolean('can_view');
            $table->boolean('can_create');
            $table->boolean('can_update');
            $table->boolean('can_delete');
            $table->boolean('status');
            $table->timestamps();
        });

        Schema::table('user_roles', function (Blueprint $table) {
           $table->foreign('user_type_id')->references('user_type_id')->on('users');
           $table->foreign('service_id')->references('service_id')->on('services');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_roles');
    }
};
