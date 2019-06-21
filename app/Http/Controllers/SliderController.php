<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PostSliderRequest;
use App\Http\Requests\EditSliderRequest;
use App\Slide;
use Redirect;
use DateTime,File,Input,DB;

class SliderController extends Controller
{
    public function index(){
    	$data = Slide::All();
    	return view('back-end.slider.list',['data'=>$data]);
    }
    public function addslide(){
    	return view('back-end.slider.add');
    }
    public function postslide(PostSliderRequest $rq){
    	$post = new Slide();
    	$post->chu_de = $rq->txtChuDe;

    	if ($rq->hasFile('txtAnh')) {
			$filename = $rq->file('txtAnh')->getClientOriginalName();
	    	$post->anh = $filename;    	
	    	$rq->file('txtAnh')->move('public/uploads/banners/',$filename);
		}
    	$post->save();
    	return Redirect::route('getslide')->with(['flash_level'=>'result_msg','flash_massage'=>' Đã thêm thành công !']);
    }
    public function editslide($id){
    	$data = Slide::where('id',$id)->first();
    	return view('back-end.slider.edit',['data'=>$data]);
    }
    public function posteditslide(EditSliderRequest $rq,$id){
        $update = Slide::find($id);
        $update->chu_de = $rq->txtChuDe;

        $file_path = public_path('uploads/banners/').$update->anh;
         if ($rq->hasFile('txtAnh')) {
            if (file_exists($file_path))
                {
                    unlink($file_path);
                }
            
            $filename = $rq->file('txtAnh')->getClientOriginalName();
            $update->anh = $filename;       
            $rq->file('txtAnh')->move('public/uploads/banners/',$filename);
        }

        $update->save();
        return Redirect::back()->with(['flash_level'=>'result_msg','flash_massage'=>' Đã sửa thành công !']);
    }
    public function delslide($id){
        $delslide = Slide::find($id);
        $delslide->delete();
        return Redirect()->route('getslide')->with(['flash_level'=>'result_msg','flash_massage'=>'Đã xóa !']);
    }
}
