<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\PostOrderRequest;
use App\Helper\Cart;
use App\LoaiSanPham;
use App\Sanpham;
use App\DatHang;
use App\KhachHang;
use App\ChiTietDatHang;
use App\DetailImg;
use App\User;
use DB,Datetime, Redirect,count,paginate, Mail, Auth;

class ShopController extends Controller
{
    public function getcatenam(){
    	$kieu_dang = 'Đồng hồ nam';
    	$showall = DB::table('sanpham')
    	->join('loaisanpham','sanpham.id_danhmucsanpham','=','loaisanpham.id')
    	->where('kieu_dang',$kieu_dang)
    	->orderBy('updated_at','DESC')
    	->select('sanpham.*','loaisanpham.slug_loai_san_pham')
    	->paginate(15);
    	return view('category.categories',compact(['showall','kieu_dang']));
    }
    public function getcatenu(){
    	$kieu_dang = 'Đồng hồ nữ';
    	$showall = DB::table('sanpham')
    	->join('loaisanpham','sanpham.id_danhmucsanpham','=','loaisanpham.id')
    	->where('kieu_dang',$kieu_dang)
    	->orderBy('updated_at','DESC')
    	->select('sanpham.*','loaisanpham.slug_loai_san_pham')
    	->paginate(15);
    	return view('category.categories',compact(['showall','kieu_dang']));
    }
    // Giỏ hàng
    public function addcart($id, cart $cart)
    {
        $pro = Sanpham::where('id',$id)->first();
        $cart->add($pro);
        return redirect()->back()
        ->with('success','Đã thêm vào giỏ hàng thành công');
        // return Redirect::back();
    }
    public function viewcart(cart $cart){
        return view ('detail.card', compact('cart'))
        ->with('slug','Chi tiết đơn hàng');
    }
    public function getupdatecart($id,$qty,$dk, cart $cart)
    {
      if ($dk=='up') {
         $qt = $qty+1;
         $cart->update_carts($id, $qt);
         return redirect()->route('getviewcart');// cái nay là update qty san pham
      } elseif ($dk=='down') {
         $qt = $qty-1;
         $cart->update_carts($id, $qt);
         return redirect()->route('getviewcart');
      } else {
         return redirect()->route('getviewcart');
      }
      dd($qty);
    }
    public function getdeletecart($id, cart $cart)
    {
     $cart->delete_cart($id);
     return redirect()->route('getviewcart');
    }
    public function delcart(cart $cart){
      $cart->clear_cart();
      return redirect()->route('index');
    }

    // Order
    public function getoder(cart $cart){
      return view ('detail.oder', compact('cart'))->with('slug','Xác nhận');
    }
    public function postoder(cart $cart,PostOrderRequest $rq){

      $khachhang= new KhachHang();
      $khachhang->ten_khach_hang= $rq->txthoten;
      $khachhang->email_khach_hang= $rq->txtmail;
      $khachhang->sdt_khach_hang= $rq->txttel;
      $khachhang->dia_chi_khach_hang= $rq->txtaddress;
      $khachhang->save();

      $dathang= new DatHang();
      $dathang->id_khachhang=$khachhang->id;
      $dathang->ghi_chu=$rq->txtnote;
      $dathang->soluong=$cart->totalqty();
      $dathang->total=$rq->txttotal;
      $dathang->type=$rq->txtthanhtoan;
      $dathang->trang_thai=0;

      $dathang->save();

      foreach ($cart->items as $item) {
        $chitiet= new ChiTietDatHang();
        $chitiet->soluong_sub= $item->qty;
        $chitiet->gia_tien= $item['gia_tien'];
        $chitiet->khuyen_mai= $item['khuyen_mai'];
        if($item['khuyen_mai'] > 0){
          $chitiet->subtotal= $item['khuyen_mai'] * $item->qty;
        }else{
          $chitiet->subtotal= $item['gia_tien'] * $item->qty;
        }
        
        $chitiet->id_san_pham= $item['id'];
        $chitiet->id_dat_hang= $dathang->id;
        $chitiet->save();

      }

      $data = [
        'hoten'=>$rq->txthoten,
        'sdt'  =>$rq->txttel,
        'address'=>$rq->txtaddress,
        'mesage'=>$rq->txtnote
      ];

      $info = DB::table('dat_hang')
      ->join('chi_tiet_dat_hang','chi_tiet_dat_hang.id_dat_hang','=','dat_hang.id')
      ->join('khach_hang','khach_hang.id','=','dat_hang.id_khachhang')
      ->join('sanpham','sanpham.id','=','chi_tiet_dat_hang.id_san_pham')
      ->where('dat_hang.id',$dathang->id)->get();
      // dd($info);

      $email = ['hotrowatchpro247@gmail.com', $rq->txtmail];
      Mail::send('detail.mailproduct', ['data'=>$data, 'info'=>$info, 'khachhang'=>$khachhang],function($msg) use ($data, $email, $info,$khachhang) {
        $msg->from('hotrowatchpro247@gmail.com','Hỗ trợ WatchPro');
        $msg->to($khachhang->email_khach_hang,'Cảm ơn quý khách')->subject('Thông tin đặt hàng');
      });
      Session(['cart'=>[]]);
      echo "<script>alert('Bạn vui lòng kiểm tra Email thông tin đơn đặt hàng của bạn.');window.location='".url('/')."'</script>";
    }
}
