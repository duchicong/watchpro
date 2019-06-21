<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChiTietDatHangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chi_tiet_dat_hang', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('soluong_sub'); // Tính số lượng theo sản phẩm
            $table->integer('gia_tien')->nullable();
            $table->integer('khuyen_mai')->nullable();
            $table->integer('subtotal');    // Tính tiền theo sl sp
            $table->integer('id_san_pham')->unsigned();
            $table->foreign('id_san_pham')->references('id')->on('sanpham');
            $table->integer('id_dat_hang')->unsigned();
            $table->foreign('id_dat_hang')->references('id')->on('dat_hang')->onDelete('cascade');
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
        Schema::dropIfExists('chi_tiet_dat_hang');
    }
}
