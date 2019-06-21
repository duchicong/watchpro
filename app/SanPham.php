<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SanPham extends Model
{
    protected $table ='sanpham';
	protected $fillable =['*'];

	public function loaisanpham()
	{
		return $this->belongsTo('App\LoaiSanPham','id_danhmucsanpham');
	}
    public function chitiet_dathang()
    {
        return $this->hasOne('App\ChiTietDatHang','id_san_pham');
    }
}
