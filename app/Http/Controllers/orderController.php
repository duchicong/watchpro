<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\DatHang;
use App\ChiTietDatHang;
use DB;
use App\KhachHang;

class orderController extends Controller
{
    public function getlist()
    {
        // $order = DatHang::paginate(10);
        $order = DB::table('dat_hang')
            ->join('khach_hang', 'khach_hang.id', '=', 'dat_hang.id_khachhang')  
            ->select('dat_hang.id','dat_hang.trang_thai','dat_hang.created_at','dat_hang.total','khach_hang.ten_khach_hang','khach_hang.email_khach_hang','khach_hang.sdt_khach_hang','khach_hang.dia_chi_khach_hang')
            ->paginate(10);
        return view('back-end.orders.list',compact('order'));
    }

    public function getdetail($id)
    {
        // $order = DatHang::find($id);
        $order = DB::table('dat_hang')
            ->join('khach_hang','dat_hang.id_khachhang','=','khach_hang.id')
            ->where('dat_hang.id', $id)
            ->first();
     
        $order_detail = DB::table('chi_tiet_dat_hang')
            ->join('sanpham', 'sanpham.id', '=', 'chi_tiet_dat_hang.id_san_pham')
            ->select('chi_tiet_dat_hang.id','chi_tiet_dat_hang.gia_tien','sanpham.anh','sanpham.gioi_thieu','sanpham.ten_san_pham','chi_tiet_dat_hang.soluong_sub')
            ->where('id_dat_hang',$id)
            ->get();
        
        return view('back-end.orders.detail',compact('order','order_detail','id'));
    }
    public function postdetail(Request $req,$id)
    {
        $order = DatHang::find($id);

        $order->trang_thai = 1;
        $order->save();
           
      
        return redirect()->route('getorder');
    }


     public function getdel($id)
    {       
        $oder = DatHang::where('id',$id)->first();
        if ($oder->trang_thai == 1) {
            return redirect()->back()
            ->with(['flash_level'=>'result_msg','flash_massage'=>'Không thể hủy đơn hàng số: '.$id.' vì đã được xác nhận!']);
        } else {
            $order = DatHang::find($id);
            $order->delete();
            return redirect()->route('getorder','id');
        }
    }
}
