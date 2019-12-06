<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdmintoAgentfundsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adminto_agentfunds', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('from_admin')->nullable();
            $table->integer('to_agent')->nullable();
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
        Schema::dropIfExists('adminto_agentfunds');
    }
}
