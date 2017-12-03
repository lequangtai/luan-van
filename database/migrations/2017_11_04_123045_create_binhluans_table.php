<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBinhluansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lv2_binhluan', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tieude', 255);
            $table->text('noidung');
            $table->dateTime('ngayviet');
            $table->string('hinhanh', 255);
            $table->integer('users_id')->unsigned();
            $table->foreign('users_id')->references('id')->on('users')->onDelete('cascade');
            $table->integer('diadiem_id')->unsigned();
            $table->foreign('diadiem_id')->references('id')->on('lv2_diadiem')->onDelete('cascade');
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
        Schema::dropIfExists('lv2_binhluan');
    }
}
