<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInitialTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('people', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('gender')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Run the down migration.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('people');
    }
}
