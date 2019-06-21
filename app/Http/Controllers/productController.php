<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use App\Http\Requests\AddProductsRequest;
use App\Http\Requests\EditProductsRequest;
use App\Http\Requests;
use App\Sanpham;
use App\LoaiSanPham;
use App\DetailImg;
use Auth;
use DateTime,File,Input,DB, Redirect;

class productController extends Controller
{
    public function getlist(){
    	$product = Sanpham::paginate(20);
        $checkcat = LoaiSanPham::get();
        if(count($checkcat)>0){
            return view('back-end.products.list', compact(['product']));
        }else{
            return Redirect::away('danh-muc-loai-san-pham/add');
        }
    	
    }

    public function getadd(){

  		$cate = LoaiSanPham::all();

    	return view('back-end.products.add',compact('cate'));
    }

    public function postadd(AddProductsRequest $req){

    	$pro = new Sanpham();

     	$pro->ten_san_pham = $req->txtname;
    	$pro->slug = str_slug($req->txtname,'-');
        $pro->tags = $req->txttags;
    	$pro->gioi_thieu = $req->txtre_Intro;
        $pro->noi_dung = $req->txtReview;
    	$pro->gia_tien = $req->txtGiatien;
        $pro->khuyen_mai = $req->txtkhuyen_mai;
    	$pro->chiet_khau = $req->txtChietkhau;
    	$pro->thuong_hieu = $req->inputTxtThuonghieu;
    	$pro->hang_san_xuat = $req->txtHangsx;
    	$pro->kieu_dang = $req->txtKieudang;
    	$pro->nang_luong_su_dung = $req->txtNangluong;
    	$pro->do_chiu_nuoc = $req->txtDochiunuoc;
    	$pro->duong_kinh_mat = $req->txtDkmat;
    	$pro->chat_lieu_day = $req->txtclDay;
    	$pro->chat_lieu_mat = $req->txtclMat;
    	$pro->chat_lieu_vo = $req->txtclVo;
    	$pro->kich_thuoc = $req->txtkichthuoc;
    	$pro->trang_thai = $req->txttrangthai;
    	$pro->bao_hanh = $req->txtBaohanh;
        $pro->tinh_trang = $req->txtTinhtrang;
    	$pro->id_danhmucsanpham = $req->sltCate;
    	$pro->created_at = new datetime;
    	if ($req->hasFile('txtimg')) {
            $filename = $req->file('txtimg')->getClientOriginalName();
            $pro->anh = $filename;      
            $req->file('txtimg')->move('public/uploads/products/',$filename);
        }
    	$pro->save();
        $pro_id = $pro->id;
        $postimgs = new DetailImg();
        $postimgs->pro_id = $pro_id;
        if ($req->hasFile('txtdetail_img')) {
            $df = $req->file('txtdetail_img');
            foreach ($df as $row) {
                $img_detail = new DetailImg();
                if (isset($row)) {
                    $name_img= $row->getClientOriginalName();
                    $img_detail->imgs = $name_img;
                    $img_detail->pro_id = $pro_id;
                    $img_detail->created_at = new datetime;
                    $row->move('public/uploads/products/details/',$name_img);
                    $img_detail->save();
                }
            }
        }

	return redirect()->route('geteditpro', $pro_id)->with(['flash_level'=>'result_msg','flash_massage'=>' Đã thêm thành công !']);
    }

    public function getedit($id){
        $link = DB::table('sanpham')
                ->join('loaisanpham', 'sanpham.id_danhmucsanpham', '=', 'loaisanpham.id')
                ->where('sanpham.id',$id)
                ->select('sanpham.slug','loaisanpham.slug_loai_san_pham')
                ->first();
    	$cate = LoaiSanPham::all();
    	$edit_pro = Sanpham::where('id', $id)->first();
        $detail_img = DetailImg::where('pro_id',$id)->select('imgs')->get();
    	return view('back-end.products.edit-products', compact(['edit_pro','cate', 'detail_img','link']));
    }

    public function postedit(Request $req,$id){

    	$edit_pro = Sanpham::find($id);
        $edit_pro->ten_san_pham = $req->txtname;
        $edit_pro->slug = str_slug($req->txtname,'-');
        $edit_pro->tags = $req->txttags;
        $edit_pro->gioi_thieu = $req->txtre_Intro;
        $edit_pro->gia_tien = $req->txtGiatien;
        $edit_pro->khuyen_mai = $req->txtkhuyen_mai;
        $edit_pro->chiet_khau = $req->txtChietkhau;
        $edit_pro->thuong_hieu = $req->inputTxtThuonghieu;
        $edit_pro->hang_san_xuat = $req->txtHangsx;
        $edit_pro->kieu_dang = $req->txtKieudang;
        $edit_pro->nang_luong_su_dung = $req->txtNangluong;
        $edit_pro->do_chiu_nuoc = $req->txtDochiunuoc;
        $edit_pro->duong_kinh_mat = $req->txtDkmat;
        $edit_pro->chat_lieu_day = $req->txtclDay;
        $edit_pro->chat_lieu_mat = $req->txtclMat;
        $edit_pro->chat_lieu_vo = $req->txtclVo;
        $edit_pro->kich_thuoc = $req->txtkichthuoc;
        $edit_pro->trang_thai = $req->sltCate;
        $edit_pro->bao_hanh = $req->txtBaohanh;
        $edit_pro->tinh_trang = $req->txtTinhtrang;
        $edit_pro->trang_thai = $req->txttrangthai;
        $edit_pro->id_danhmucsanpham = $req->sltCate;
        $edit_pro->updated_at = new datetime;

        $file_path = public_path('uploads/products/').$edit_pro->anh;        
        if ($req->hasFile('txtimg')) {
            if (file_exists($file_path))
                {
                    unlink($file_path);
                }
            
            $filename = $req->file('txtimg')->getClientOriginalName();
            $edit_pro->anh = $filename;       
            $req->file('txtimg')->move('public/uploads/products/',$filename);
        }
        $edit_pro->save(); 
        // update gallery images for detail_imgs
        $updateimgs = new DetailImg();
        $updateimgs->pro_id = $edit_pro->id;
        if ($req->hasFile('txtdetail_img')) {
            $detail = DetailImg::where('pro_id',$id)->get();
            $df = $req->file('txtdetail_img');
            foreach ($detail as $row) {                
               $dt = DetailImg::find($row->id);
               $pt = public_path('uploads/products/details/').$dt->imgs; 
               // dd($pt);   
                if (file_exists($pt))
                {
                    unlink($pt);
                }
               $dt->delete();                              
            }
            foreach ($df as $row) {
                $img_detail = new DetailImg();
                if (isset($row)) {
                    $name_img = $row->getClientOriginalName();
                    $img_detail->imgs = $name_img;
                    $img_detail->pro_id = $id;
                    $img_detail->created_at = new datetime;
                    $row->move('public/uploads/products/details/',$name_img);
                    $img_detail->save();
                }
            }
        }
        return redirect()->route('geteditpro', $id);      
    }

    public function getdel($id){
    	$delpro = Sanpham::find($id);
        $delpro->delete();
        return redirect()->route('getpro');
    }

    public function getSearch(Request $req){
      $product = Sanpham::where('ten_san_pham','like','%'.$req->key.'%')
                                        ->orWhere('thuong_hieu',$req->key)
                                        ->get();
    return view('back-end.products.search',compact('product'));
    }
}
