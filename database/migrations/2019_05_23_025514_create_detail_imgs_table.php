<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetailImgsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_imgs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('imgs');
            $table->integer('pro_id')->unsigned();
            $table->foreign('pro_id')->references('id')->on('sanpham')->onDelete('cascade');
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
        Schema::dropIfExists('detail_imgs');
    }
}
