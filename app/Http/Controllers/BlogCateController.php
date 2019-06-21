<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\BlogCategory;
use App\Http\Requests\AddBlogCategoryRequest;
use DateTime;

class BlogCateController extends Controller
{
    public function index(){
    	$data = BlogCategory::all();
    	return view('back-end.category-blog.cat-list',['data'=>$data]);
    }
    public function AddCate(){
    	return view('back-end.category-blog.add');
    }
    public function postadd(AddBlogCategoryRequest $rq){
		$catblog = new BlogCategory();
		$catblog	->ten_danh_muc= $rq->txtCateName;
		$catblog	->slug = str_slug($rq->txtCateName,'-');
		$catblog	->mieu_ta = $rq->txtMieuTa;
      	$catblog	->created_at = new DateTime;
      	$catblog	->save();
      return redirect()->route('getaddcat')
      ->with(['flash_level'=>'result_msg','flash_massage'=>' Đã thêm thành công !']);
         
   }
   	public function getedit($id){
        $data = BlogCategory::findOrFail($id)->toArray();
        return View('back-end.category-blog.edit',compact('data'));
   	}
   	public function postedit($id, AddBlogCategoryRequest $request){
   	$cat = BlogCategory::find($id);
		$cat->ten_danh_muc = $request->txtCateName;
		$cat->slug = str_slug($request->txtCateName,'-');
		$cat->mieu_ta = $request->txtMieuTa;
		$cat->updated_at = new DateTime;
		$cat->save();
		return redirect()->route('getlistcat')
		->with(['flash_level'=>'result_msg','flash_massage'=>' Đã sửa']);
   	}
   	public function delcate($id){
		$delcate = BlogCategory::find($id);
		$delcate->delete();
		return redirect()->route('getlistcat')->with(['flash_level'=>'result_msg','flash_massage'=>'Đã xóa !']);
   	}
}
