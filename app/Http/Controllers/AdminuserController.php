<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\User;
use Datetime;
use Hash;

class AdminuserController extends Controller
{
   public function getlist()
   {
      $ad = User::paginate(10);
      return view('back-end.admin_mem.list',compact('ad'));
   }
   public function getadd()
   {
      return view('back-end.admin_mem.add');
   }

  public function postadd(Request $req){
    $add_ad = new User();
    $add_ad ->name = $req ->txtName;
    $add_ad ->email = $req ->txtEmail;
    $add_ad ->password = Hash::make($req->txtPass);
    $add_ad ->phone = $req->txtPhone;
    $add_ad ->address = $req->txtAddress;
    $add_ad ->status = $req->sltCate;
    $add_ad ->created_at = new datetime();
    $add_ad ->save();
    return redirect()->route('getnv');
  }

   public function getedit($id)
   {
      $edit_ad = User::find($id);
      return view('back-end.admin_mem.edit',compact('edit_ad','id'));
   }
   public function postedit(Request $req,$id)
   {
    $edit_ad = User::find($id);
    $edit_ad ->name = $req ->txtName;
    $edit_ad ->email = $req ->txtEmail;
    $edit_ad ->phone = $req->txtPhone;
    $edit_ad ->address = $req->txtAddress;
    $edit_ad ->status = $req->sltCate;
    $edit_ad ->updated_at = new datetime();
    $edit_ad ->save();
    return redirect()->route('getnv');
   }
   public function getdel($id){
      $del_ad = User::find($id);
      $del_ad ->delete();
      return redirect()->route('getnv');
   }
}
