<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resetpassword extends Model
{
    protected $table = 'password_resets';
    protected $fillable = ['*'];
    public $timestamps = false;
}
