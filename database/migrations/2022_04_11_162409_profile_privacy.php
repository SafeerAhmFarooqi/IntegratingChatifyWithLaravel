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
        Schema::create('profile_privacies', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id');
            $table->integer('dob_status');
            $table->integer('address_status');
            $table->integer('phone_status');
            $table->integer('about_status');
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
        Schema::dropIfExists('profile_privacies');
    }
};
