<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDanhgiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lv2_danhgia', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('diem');
            $table->integer('DMDG_id')->unsigned();
            $table->foreign('DMDG_id')->references('id')->on('lv2_DMdanhgia')->onDelete('cascade');
            $table->integer('diadiem_id')->unsigned();
            $table->foreign('diadiem_id')->references('id')->on('lv2_diadiem')->onDelete('cascade');
            $table->integer('users_id')->unsigned();
            $table->foreign('users_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('lv2_danhgia');
    }
}
