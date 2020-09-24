<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Groceries extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('groceries', function (Blueprint $table) {
            $table->bigIncrements('id');
        });

        Schema::table('groceries', function (Blueprint $table) {
            //
            $table->string('name');
            $table->integer('amount');
            $table->float('price');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('groceries', function (Blueprint $table) {
            //
        });
    }
}
