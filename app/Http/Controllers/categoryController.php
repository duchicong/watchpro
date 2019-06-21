<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\AddCategoryRequest;
use App\Http\Requests\EditCategoryRequest;
use App\LoaiSanPham;
use DateTime,File,Input,DB;

class categoryController extends Controller 
{
	public function getadd(){

	  return view('back-end.category.add');
	}
	public function postadd(AddCategoryRequest $req){
	  $cat = new LoaiSanPham();
	  $cat ->ten_loai_san_pham = $req ->txtCateName;
	  $cat ->gioi_thieu = $req ->txtre_intro;
	  $cat ->slug_loai_san_pham = str_slug($req->txtCateName,'-');
	  $cat->created_at = new DateTime;

	  if ($req->hasFile('txtimg')) {
		$filename = $req->file('txtimg')->getClientOriginalName();
    	$cat->anh = $filename;    	
    	$req->file('txtimg')->move('public/uploads/products/',$filename);
	  }

	  $cat ->save();
	  return redirect()->back()->with(['flash_level'=>'result_msg','flash_massage'=>' Đã thêm thành công !']);
	}

	public function getedit($id){
     	$data = LoaiSanPham::where('id', $id)->first();
	return view('back-end.category.edit',compact('data'));
	}
	public function posteditcatpro(EditCategoryRequest $req,$id){
		$cat = LoaiSanPham::find($id);
		$cat->ten_loai_san_pham = $req->txtCateName;
		$cat->gioi_thieu = $req->txtre_intro;
		$cat->slug_loai_san_pham = str_slug($req->txtCateName,'-');
		$cat->updated_at = new DateTime;

		$file_path = public_path('uploads/products/'.$cat->anh);
    	 if ($req->hasFile('txtimg')) {
            if (file_exists($file_path))
                {
                    unlink($file_path);
                }
            
            $filename = $req->file('txtimg')->getClientOriginalName();
            $cat->anh = $filename;       
            $req->file('txtimg')->move('public/uploads/products/',$filename);
        }

		$cat->save();

		return redirect()->back()->with(['flash_level'=>'result_msg','flash_massage'=>' Đã sửa thành công']);;
	}

	public function getlist(){
		$cat_list = LoaiSanPham::all();
		return view('back-end.category.cat-list', compact('cat_list'));
	}
   	public function getdel($id){
		$del_cat = LoaiSanPham::find($id);
		$del_cat ->delete();
		return redirect()->route('getcate');
   }
}
