<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetailImg extends Model
{
    protected $table ='detail_imgs';
	protected $fillable =['*'];
	public $timestamp = false;
	public function products()
    {
        return $this->belongsTo('App\SanPham','pro_id');
    }
}
