<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDatHangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dat_hang', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('soluong');  // tổng số lượng sản phẩm
            $table->integer('total');    // tổng tiền của các sản phẩm
            $table->string('type'); // hình thức thanh toán
            $table->tinyInteger('trang_thai');// trạng thái đơn hàng?
            $table->string('ghi_chu'); 
            $table->integer('id_khachhang')->unsigned();
            $table->foreign('id_khachhang')->references('id')->on('khach_hang')->onDelete('cascade');
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
        Schema::dropIfExists('dat_hang');
    }
}
