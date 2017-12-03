<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDMQuansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lv2_DMquan', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tenquan', 100)->unique();
            $table->integer('DMTT_id')->unsigned();
            $table->foreign('DMTT_id')->references('id')->on('lv2_DMtinhthanh')->onDelete('cascade');
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
        Schema::dropIfExists('lv2_DMquan');
    }
}
