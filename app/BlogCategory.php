<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BlogCategory extends Model
{
    protected $table = "blog_category";
    protected $fillable = ['*'];

    public function blogs()
	{
		return $this->hasMany('App\Blog','danh_muc_id');
	}
}
