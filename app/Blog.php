<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table = "blogs";
    protected $fillable = ['*'];

    public function blogCategory()
	{
		return $this->belongsTo('App\BlogCategory','danh_muc_id');
	}
}
