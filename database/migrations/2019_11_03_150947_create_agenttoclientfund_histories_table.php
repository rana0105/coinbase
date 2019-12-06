<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAgenttoclientfundHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agenttoclientfund_histories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('from_agent')->nullable();
            $table->integer('to_client')->nullable();
            $table->integer('amount')->nullable();
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
        Schema::dropIfExists('agenttoclientfund_histories');
    }
}
