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
        Schema::create('use_vouchers', function (Blueprint $table) {
            $table->id();
             $table->string('title')->nullable();
            $table->string('code')->nullable();
            $table->string('image')->nullable();
            $table->string('discount')->nullable();
            $table->string('shop_id')->nullable();
            $table->string('location')->nullable();
            $table->string('shop_category')->nullable();
            $table->string('sub_category')->nullable();
            $table->string('user_email');
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
        Schema::dropIfExists('use_vouchers');
    }
};
