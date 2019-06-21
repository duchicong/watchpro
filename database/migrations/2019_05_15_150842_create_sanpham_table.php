<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSanphamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sanpham', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ten_san_pham')->unique();
            $table->string('slug');
            $table->string('tags')->nullable();
            $table->text('gioi_thieu')->nullable();
            $table->text('noi_dung')->nullable();
            $table->integer('gia_tien');
            $table->integer('chiet_khau')->nullable();
            $table->string('anh')->nullable();
            $table->string('thuong_hieu')->nullable();
            $table->string('hang_san_xuat')->nullable();
            $table->string('kieu_dang')->nullable();
            $table->string('nang_luong_su_dung')->nullable();
            $table->string('do_chiu_nuoc')->nullable();
            $table->string('duong_kinh_mat')->nullable();
            $table->string('chat_lieu_day')->nullable();
            $table->string('chat_lieu_mat')->nullable();
            $table->string('chat_lieu_vo')->nullable();
            $table->string('kich_thuoc')->nullable();
            $table->string('bao_hanh')->default('10 năm');
            $table->integer('trang_thai')->default('1');
            $table->integer('id_danhmucsanpham')->unsigned();
            $table->foreign('id_danhmucsanpham')->references('id')->on('loaisanpham')->onDelete('cascade');
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
        Schema::dropIfExists('sanpham');
    }
}
