<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImgMonansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lv2_img_monan', function (Blueprint $table) {
            $table->increments('id');
            $table->string('images', 255);
            $table->integer('monan_id')->unsigned();
            $table->foreign('monan_id')->references('id')->on('lv2_monan')->onDelete('cascade');
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
        Schema::dropIfExists('lv2_img_monan');
    }
}
