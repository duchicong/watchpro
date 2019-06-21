<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KhachHang extends Model
{
    protected $table = 'khach_hang';
    protected $fillable = ['*'];

    public function dathang(){
		return $this->hasMany('App\DatHang','id_khachhang');
    }
}
