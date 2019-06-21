<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\AddBlogRequest;
use App\Http\Requests\EditBlogRequest;
use App\BlogCategory;
use App\Blog;
use Redirect;
use DateTime,File,Input,DB;

class BlogController extends Controller
{
    public function index(){
    	$data = DB::table('blogs')
                ->join('blog_category', 'blogs.danh_muc_id', '=', 'blog_category.id')
                ->orderBy('blogs.updated_at','desc')
                ->select('blogs.id','blogs.link_anh','blogs.chu_de','blogs.slug','blog_category.ten_danh_muc','blogs.mieu_ta','blogs.trang_thai','blogs.danh_muc_id')
                ->paginate(15);
    	return view('back-end.blogs.list',['data'=>$data]);
    }
    public function addblog(){
    	$cat = BlogCategory::select('id','ten_danh_muc')->get();
    	return view('back-end.blogs.add',['cat'=>$cat]);
    }
    public function postblog(AddBlogRequest $rq){
    	$post = new Blog();
    	$post->chu_de = $rq->txtChuDe;
    	$post->slug = str_slug($rq->txtChuDe,'-');
    	$post->noi_dung = $rq->txtNoiDung;
    	$post->mieu_ta = $rq->txtMieuTa;
    	$post->tac_gia = $rq->txtTacGia;
    	$post->trang_thai = $rq->sltTrangThai;
    	$post->danh_muc_id = $rq->sltDanhMuc;
    	$post->created_at = new datetime;
        if ($rq->hasFile('txtAnh')) {
            $filename = $rq->file('txtAnh')->getClientOriginalName();
            $post->link_anh = $filename;      
            $rq->file('txtAnh')->move('public/uploads/blogs/',$filename);
        }
    	$post -> save();
    	return redirect('admin/blog')->with(['flash_level'=>'result_msg','flash_massage'=>' Đã thêm thành công !']);
    }
    public function editblog($id){
    	$data = Blog::where('id',$id)->first();
    	$cat= BlogCategory::get();
    	return view('back-end.blogs.edit',['cat'=>$cat, 'data'=>$data]);
    }
    public function postedit(EditBlogRequest $rq,$id)
    {
    	$update = Blog::find($id);
    	$update->chu_de = $rq->txtChuDe;
    	$update->slug = str_slug($rq->txtChuDe,'-');
    	$update->noi_dung = $rq->txtNoiDung;
    	$update->mieu_ta = $rq->txtMieuTa;
    	$update->tac_gia = $rq->txtTacGia;
    	$update->trang_thai = $rq->sltTrangThai;
    	$update->danh_muc_id = $rq->sltDanhMuc;
    	$update->updated_at = new datetime;

    	$file_path = public_path('uploads/blogs/').$update->link_anh;
    	 if ($rq->hasFile('txtAnh')) {
            if (file_exists($file_path))
            {
                unlink($file_path);
            }
            $filename = $rq->file('txtAnh')->getClientOriginalName();
            $update->link_anh = $filename;       
            $rq->file('txtAnh')->move('public/uploads/blogs/',$filename);
        }
    	$update->save();
    	return Redirect::back()->with(['flash_level'=>'result_msg','flash_massage'=>' Đã sửa thành công !']);
    }
    public function delblog($id){
		$delblog = Blog::find($id);
		$delblog->delete();
		return Redirect()->route('getblog')->with(['flash_level'=>'result_msg','flash_massage'=>'Đã xóa !']);
   	}
}
