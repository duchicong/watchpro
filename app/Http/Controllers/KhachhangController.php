<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KhachHang;
use Datetime;

class KhachhangController extends Controller
{
    public function getlist()
	{
		$cs = KhachHang::paginate(20);
		return view('back-end.customer.list',compact('cs'));
	}
	public function getedit($id)
	{
		$edit_user = KhachHang::where('id',$id)->first();
		return view('back-end.customer.edit',compact('edit_user','id'));
	}

	public function postedit(Request $req,$id){
		$edit_cs = KhachHang::find($id);
		$edit_cs->ten_khach_hang = $req->txtName;
		$edit_cs->dia_chi_khach_hang = $req->txtAddress;
		$edit_cs->sdt_khach_hang = $req->txtPhone;
		$edit_cs->email_khach_hang = $req->txtEmail;
		$edit_cs->updated_at = new datetime();
		$edit_cs->save();  
		return redirect()->route('getcs');

	}

	public function getdel($id){
		$del_cs = KhachHang::find($id);
		$del_cs->delete();
		return redirect()->route('getcs');
	}
}
