<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMonansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement('set foreign_key_checks=0');
        Schema::create('lv2_monan', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tenmonan', 255);
            $table->float('dongia', 8, 2);
            $table->string('gioithieu', 255);
            $table->string('hinhanh', 255);
            $table->string('slug', 255);
            $table->integer('DMMA_id')->unsigned();
            $table->foreign('DMMA_id')->references('id')->on('lv2_DMmonan')->onDelete('cascade');
            $table->integer('ddiem_id')->unsigned();
            $table->foreign('ddiem_id')->references('id')->on('lv2_diadiem')->onDelete('cascade');
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
        Schema::dropIfExists('lv2_monan');
    }
}
