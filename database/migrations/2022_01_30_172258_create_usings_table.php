<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('thing_id');
            $table->unsignedBigInteger('place_id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('amount')->default('1');
            $table->timestamps();

            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usings');
    }
}
