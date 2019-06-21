<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChiTietDatHang extends Model
{
    protected $table ='chi_tiet_dat_hang';
	protected $fillable =['*'];
    public $timestamp = false;

	public function dat_hang()
    {
        return $this->belongsTo('App\DatHang','id_dat_hang');
    }

    public function products()
    {
        return $this->hasOne('App\SanPham','id_san_pham');
    }
}
