<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlansSpecsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plans_specs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('plan_id');
            $table->integer('free_sms');
            $table->integer('free_calls');
            $table->integer('free_gb');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('plans_specs');
    }
}
