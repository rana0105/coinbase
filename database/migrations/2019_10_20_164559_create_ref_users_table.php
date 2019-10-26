<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRefUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ref_users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('ref_from_id')->nullable();
            $table->string('ref_from_refcode')->nullable();
            $table->integer('ref_to_id')->nullable();
            $table->string('ref_to_refcode')->nullable();
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
        Schema::dropIfExists('ref_users');
    }
}
