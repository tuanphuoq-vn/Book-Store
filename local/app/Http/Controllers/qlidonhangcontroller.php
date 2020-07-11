<?php

namespace App\Http\Controllers;
use App\chitietdondathang;
use App\dondathang;
use Session;
use App\khachhang;
use Cookie;

use Illuminate\Http\Request;

class qlidonhangcontroller extends Controller
{
    function postCheckout(Request $req){
    	$cart=Session::get('cart');
    	if($req->hasCookie('khachhang_login') == false){
    		return redirect('kh_login');
    	}
    	else{
    		$dondathang =new dondathang();
    		$kh_login=Cookie::get('khachhang_login');
    		$id_kh=khachhang::where('username',$kh_login)->get();
    		$dondathang->id_khachhang=$id_kh[0]->id;
    		$dondathang->tongtien=$cart->totalPrice;
    		$dondathang->phuongthucthanhtoan=$req->payment_method;
    		$dondathang->hoten=$req->name;
    		$dondathang->gioitinh=$req->gender;
    		$dondathang->email=$req->email;
    		$dondathang->diachi=$req->address;
    		$dondathang->sodienthoai=$req->phone;
    		$dondathang->ghichu=$req->notes;
    		$dondathang->save();

    		foreach($cart->items as $carts){
    			$chitietdondathang =new chitietdondathang();
    			$chitietdondathang->id_dondathang=$dondathang->id;
    			$chitietdondathang->id_sach=$carts['item']->id;
    			$chitietdondathang->soluong=$carts['qty'];
    			$chitietdondathang->dongia=$carts['price'];
    			$chitietdondathang->save();
    		}
    		$thongbao="Đặt hàng thành công!";
    		session()->forget('cart');
    		return View('page.sanpham.checkout')->with(['thongbao'=>$thongbao]);
    		
    	}

    }
    function qldondathang(){
        $dondathang=dondathang::all();
        return view('admin.qldonhang',compact('dondathang'));
                  
    }
    function qlchitietdonhang($id_donhang){
        $chitietdondathang=chitietdondathang::where('id_dondathang',$id_donhang)->get();
        return view('admin.qlchitietdonhang',compact('chitietdondathang'));
    }
    function qlchitietdonhang_delete(Request $req){
        $id=$req->id;
        $cthd=chitietdondathang::find($id);
        $hd=dondathang::find($cthd->id_dondathang);
        $hd_tongtien=$hd->tongtien;
        $cthd_tongtien=$cthd->soluong*$cthd->dongia;
        $hd->tongtien=$hd_tongtien-$cthd_tongtien;
        $hd->save();
        $cthd->delete();
        return response()->json([
       'success'   => 'Delete Successfully!',
      ]);
    }
    function qldonhang_delete(Request $req)
    {
        $id=$req->id;
        $ctdonhang=chitietdondathang::where('id_dondathang',$id)->delete();
        $donhang=dondathang::find($id)->delete();
        return response()->json([
       'success'   => 'Delete Successfully!',
      ]);
    }
}
