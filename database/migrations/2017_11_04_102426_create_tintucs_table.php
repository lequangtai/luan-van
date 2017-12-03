<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTintucsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         DB::statement('set foreign_key_checks=0');
        Schema::create('lv2_tintuc', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tieude', 255);
            $table->text('tomtat');
            $table->text('noidung');
            $table->string('hinhanh', 255);
            $table->string('slug', 255);
            $table->integer('trangthai');
            $table->integer('loaitin_id')->unsigned();
            $table->foreign('loaitin_id')->references('id')->on('lv2_loaitin')->onDelete('cascade');
            $table->integer('diadiem_id')->unsigned();
            $table->foreign('diadiem_id')->references('id')->on('lv2_diadiem')->onDelete('cascade');
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
        Schema::dropIfExists('lv2_tintuc');
    }
}
