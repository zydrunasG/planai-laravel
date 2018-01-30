<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlansFeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plans_fees', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('plan_id');
            $table->integer('price_sms');
            $table->integer('price_calls');
            $table->integer('price_gb');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('plans_fees');
    }
}
