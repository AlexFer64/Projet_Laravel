<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableSauceDislikeUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_sauce_dislike_user', function (Blueprint $table) {
            $table->id();
            $table->string('sauce_id');
            $table->string('user_id');
            $table->timestamps();
        
            $table->foreign('sauce_id')->references('id')->on('sauces')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_sauce_dislike_user');
    }
}
