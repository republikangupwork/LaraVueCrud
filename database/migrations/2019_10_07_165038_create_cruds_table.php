<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCrudsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cruds', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email');
            $table->string('pay_draw');
            $table->boolean('three_years_in_business');
            $table->integer('years');
            $table->string('fulltime');
            $table->integer('staff_count');
            $table->boolean('on_tool');
            $table->boolean('share_dir_on_tool');
            $table->integer('take_out_money');
            $table->string('pay_freq');
            $table->string('acc_cover');
            $table->string('cover_plus_extra_amt');
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
        Schema::dropIfExists('cruds');
    }
}
