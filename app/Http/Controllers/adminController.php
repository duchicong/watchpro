<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Hash;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class adminController extends Controller
{
     
  	public function getLogout(){
      Auth::logout();
      return redirect('admin/login');
    }
}
