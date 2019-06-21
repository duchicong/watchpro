<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('chu_de')->unique();
            $table->string('slug');
            $table->text('noi_dung')->nullable();           
            $table->text('mieu_ta')->nullable();
            $table->text('link_anh')->nullable();
            $table->string('tac_gia')->nullable();
            $table->integer('trang_thai');
            $table->integer('danh_muc_id')->unsigned();
            $table->foreign('danh_muc_id')->references('id')->on('blog_category')->onDelete('cascade');
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
        Schema::dropIfExists('blogs');
    }
}
