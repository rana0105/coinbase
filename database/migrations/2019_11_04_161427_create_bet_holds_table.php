<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBetHoldsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bet_holds', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('betid')->nullable();
            $table->string('betname')->nullable();
            $table->integer('betprice')->nullable();
            $table->integer('clientid')->nullable();
            $table->integer('quantity')->default(0)->nullable();
            $table->boolean('status')->default(0)->nullable();
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
        Schema::dropIfExists('bet_holds');
    }
}
