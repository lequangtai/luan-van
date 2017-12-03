<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiadiemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement('set foreign_key_checks=0');
        Schema::create('lv2_diadiem', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tendiadiem', 255);
            $table->string('diachi', 255);
            $table->integer('dienthoai');
            $table->string('email', 255);
            $table->string('mota', 255);
            $table->string('hinhanh', 255);
            $table->string('tinhthanh', 255);
            $table->float('giathapnhat', 8, 2);
            $table->float('giacaonhat', 8, 2);
            $table->time('giomocua');
            $table->time('giodongcua');
            $table->string('slug', 255);
            $table->integer('DMQ_id')->unsigned();
            $table->foreign('DMQ_id')->references('id')->on('lv2_DMquan')->onDelete('cascade');
            $table->integer('users_id')->unsigned();
            $table->foreign('users_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
        DB::statement('set foreign_key_checks=1');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lv2_diadiem');
    }
}
