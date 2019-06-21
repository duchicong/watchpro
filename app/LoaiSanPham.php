<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LoaiSanPham extends Model
{
    protected $table ='loaisanpham';
	protected $fillable =['*'];
	
	public function sanpham()
	{
		return $this->hasMany('App\SanPham','id_danhmucsanpham');
	}
}
