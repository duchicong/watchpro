<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DatHang extends Model
{
    protected $table = 'dat_hang';
    protected $fillable = ['*'];
    
    public function chitiet_dathang()
	{
		return $this->hasMany('App\ChiTietDatHang','id_dat_hang');
	}
	public function khachhang()
	{
		return $this->belongto('App\KhachHang','id_khachhang');
	}
}
