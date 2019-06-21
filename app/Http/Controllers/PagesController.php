<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Requests;
use App\Slide;
use App\BlogCategory;
use App\Blog;
use App\Helper\Cart;
use App\LoaiSanPham;
use App\Sanpham;
use App\User;
use DB,Datetime, Redirect,count,paginate,Auth;

class PagesController extends Controller
{
    public function index(){
    	// slide
        $slide = Slide::select('chu_de','anh')->get();
        $catpro  = LoaiSanPham::select('*')->limit(3)->get();
        $latest_pro = Sanpham::orderBy('created_at', 'desc')->take(10)->get();

        $latest_pro = DB::table('sanpham')
                ->join('loaisanpham', 'sanpham.id_danhmucsanpham', '=', 'loaisanpham.id')
                ->orderBy('created_at', 'desc')
                ->select('sanpham.*','loaisanpham.slug_loai_san_pham')
                ->get();
        $noi_bat = DB::table('sanpham')
                ->join('loaisanpham', 'sanpham.id_danhmucsanpham', '=', 'loaisanpham.id')
                ->where('tags','like','%nổi bật%')
                ->select('sanpham.*','loaisanpham.slug_loai_san_pham')
                ->get();

        return view('home',[
        	'slide'		=> $slide, 
        	'catpro'	=> $catpro,
        	'latest_pro'=> $latest_pro,
        	'noi_bat'	=> $noi_bat
        ]);
    }
    public function pagelink($pagelink){
    	$data = DB::table('blogs')->where('slug', $pagelink)->first();
    	return view('detail.page',compact('data'));
    }

    public function postlink($postlink=null){
    	if(empty($postlink)){
    		$catnews = DB::table('blogs')->where('danh_muc_id', 2)->get();
    		return view('category.news',compact('catnews'));
    	}else{
    		$data = DB::table('blogs')->where('slug', $postlink)->first();
	    	if($data->slug){
	    		return view('detail.news',compact('data'));
	    	}else{
	    		return Redirect::route('error503');
	    	}
    	}
    	
    	
    }
    // config user =====> chưa xong
    public function showuser(){

        $user_order_detail = DB::table('dat_hang')
            ->join('khach_hang', 'khach_hang.id', '=', 'dat_hang.id_khachhang')  
            ->select('dat_hang.id','dat_hang.trang_thai','dat_hang.created_at','dat_hang.total','khach_hang.ten_khach_hang','khach_hang.email_khach_hang','khach_hang.sdt_khach_hang','khach_hang.dia_chi_khach_hang')
            ->get();
        return view('member.user',compact('user_order_detail'));
    }

    public function editUser($id){
        $data = User::where('id',$id)->first();
        return view('member.edit',['data'=>$data]);
    }
     public function postUser(Request $req,$id){
        $data = User::find($id);
        $data->name = $req->txtName;
        $data->address = $req->txtAddress;
        $data->phone = $req->txtPhone;
        $data->email = $req->txtEmail;
        $data->updated_at = new datetime();
        $data->save();  
        return redirect()->route('thongtinuser');
    }
    // Kiểm tra lỗi slug
    public function error503(){
    	$slide = Slide::select('chu_de','anh')->get();
    	return view('errors.503',['slide'=> $slide]);
    }
    public function checkslug($cate, $product=null){
    	$checkcat = LoaiSanPham::where('slug_loai_san_pham',$cate)->first();
    	$checkpro = SanPham::where('slug',$product)->first();
    	if($checkcat['slug_loai_san_pham'] || $checkpro['slug']){
    		// return $checkcat['slug_loai_san_pham'].'/'.$checkpro['slug'];
    		if($checkpro['slug']!=null){
    			$checkslug = $checkpro['slug'];
    			$data = DB::table('sanpham')
                ->join('loaisanpham', 'sanpham.id_danhmucsanpham', '=', 'loaisanpham.id')
                ->where('slug',$checkslug)
                ->select('sanpham.*','loaisanpham.slug_loai_san_pham','loaisanpham.ten_loai_san_pham')
                ->first(); 
    			return view('detail.product',['data'=>$data]);
    		}else{
                $pro = DB::table('sanpham')
                ->join('loaisanpham', 'sanpham.id_danhmucsanpham', '=', 'loaisanpham.id')
                ->where('slug_loai_san_pham', $cate)
                ->orderBy('created_at', 'desc')
                ->select('sanpham.*','loaisanpham.slug_loai_san_pham')
                ->paginate(12);
                $cat_pro = DB::table('loaisanpham')
                    ->where('slug_loai_san_pham',$cate)
                    ->select('ten_loai_san_pham')->first();
    			return view('category.cate_product',compact(['pro','cat_pro']));
    		}
    	}else{
    		return Redirect::route('error503');
    	}
    	
    }
    // Tìm kiếm sản phẩm
    public function searchpro(Request $req) {
    $searchkey = Sanpham::where('ten_san_pham','like','%'.$req->key.'%')
    ->orWhere('tags','like','%'.$req->key.'%')
    ->get();
    $keyword = $req->key;
    // $searchkey = DB::table('sanpham')
    // ->join('loaisanpham','sanpham.id_danhmucsanpham','=','loaisanpham.id')
    // ->where('sanpham.ten_san_pham','like','%'. $keyword .'%')
    // ->get();
    // ->where('sanpham.tags','like','%'. $keyword .'%')    
    
    return view('modules.searchpro',compact(['searchkey','keyword']));
    }

    public function slide(){
        $data = DB::table('detail_imgs')
        ->join('sanpham','sanpham.id','=','detail_imgs.pro_id')
        ->where('detail_imgs.pro_id',2)
        ->select('detail_imgs.imgs', 'detail_imgs.id')->get();
        $feature = Sanpham::where('id',2)->first();
        return view('test.slide',compact(['data','feature']));
    }
}
