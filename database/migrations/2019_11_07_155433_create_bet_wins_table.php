<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBetWinsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bet_wins', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('namewin')->nullable();
            $table->integer('betid')->nullable();
            $table->integer('clientid')->nullable();
            $table->integer('bcount')->nullable();
            $table->integer('bamount')->nullable();
            $table->string('userwincode')->nullable();
            $table->boolean('winstatus')->default(0)->nullable();
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
        Schema::dropIfExists('bet_wins');
    }
}
