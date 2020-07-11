<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User as user;
use Cookie;
use Session;
use Redirect;
use DB;
use App\khachhang as khachhang;
use App\chitietsach;
use App\sach as sach;
use App\loaisach as loaisach;
use App\nhaxuatban as nhaxuatban;
use Illuminate\Support\Facades\Validator;
class admincontroller extends Controller
{
    function getlogin(){
    	return View('admin.login');
    }
    function getkhachhang(){
        return View('admin.adduser');  
    }
    function postkhachhang(Request $req){
        $khachhang=new khachhang;
        $khachhang->ten=$req->txthoten;
        $khachhang->username=$req->txtusername;
        $khachhang->password=bcrypt($req->PassWord);
        $khachhang->sdt=$req->Phonenumber;
        $khachhang->diachi=$req->txtdiachi;
        $khachhang->mail=$req->email;
        $khachhang->save();
        
        return View('admin.login')->with(['thongbao'=>'Tạo tài khoản thành công!']);
    }
    function getloaisach(){
        return View('admin.loaisach');
    }
   function sachmoi(){
    return View('page.danhmucsanpham.sachmoi');
   }
    function postlogin(Request $request){
    //     $this->validate($request,[
    //         'username'=>'min:10',
    //     ],
    //     ['username.min'=>"min length is 10"]
    // );
    	$username=$request->username;
    	$password=$request->pass;
        $khachhang_login=DB::table('khachhang')->where('username','=',$username)->get();
        $minutes = 30;
        $login=['username'=>$username,'password'=>$password,'maquyen'=>1];
    	if(\Auth::attempt($login)){
              Cookie::queue(Cookie::make('name',$username, $minutes));
   			return View('admin.qlkhachhang');
    	}
    	elseif(count($khachhang_login)>0){
            if(\Hash::check($password,$khachhang_login[0]->password)){
                Cookie::queue(Cookie::make('khachhang_login',$username, 60));
                return redirect('home');
            }

            else{
                Session::flash('message', "Vui lòng kiểm tra lại tài khoản mật khẩu!");
                return Redirect::back();   
            }
        }
        else{
             Session::flash('message', "Vui lòng kiểm tra lại tài khoản mật khẩu!");
                return Redirect::back(); 
        }
    }
    function kh_logout(){
        Cookie::queue(Cookie::forget('khachhang_login'));
        return redirect('home');
    }
    function qlkhachhang(){
        return View('admin.qlkhachhang');
    }
    function editkhachhang(Request $req){
            $id=$req->id;
            $userData = khachhang::find($id);
            $userData->ten = request('ten');
            $userData->username = request('username');
            if(request('password')!=""){
            $userData->password = bcrypt(request('password'));
            $userData->sdt = request('sdt');
            $userData->diachi = request('diachi');
            $userData->mail = request('mail');
            $userData->save();
            return json_encode(array('statusCode'=>200));   
            }
            else{
            $userData->sdt = request('sdt');
            $userData->diachi = request('diachi');
            $userData->mail = request('mail');
            $userData->save();
            return json_encode(array('statusCode'=>200));
            }
            


    }
    function deletekhachhang(Request $req){
        $id=$req->id;
        $res=khachhang::where('id',$id)->delete();
        return json_encode(array('statusCode'=>200));
    }
    function qlsach(){
        $_loaisach=loaisach::all();
        $_nhaxuatban=nhaxuatban::all();
        $_sach=DB::table('sach')
              ->where('hidden','=',0)
            ->join('loaisach','loaisach.id', '=', 'sach.maloai')
            ->join('nhaxuatban','nhaxuatban.id', '=', 'sach.manhaxuatban')
            ->select('sach.*', 'loaisach.tenloai','nhaxuatban.tennhaxuatban')
            ->get();
        return View('admin.qlsach',compact('_sach','_loaisach','_nhaxuatban'));
    }
    function insertdatas(Request $req){
        $sach=new sach();
        $image = $req->file('select_file');
        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move('public/image/anhsanpham', $new_name);
        $sach->maloai=$req->loaisach;
        $sach->manhaxuatban=$req->nxb;
        $sach->tensach=$req->tensach;
        $sach->tacgia=$req->tacgia;
        $sach->soluong=$req->soluong;
        $sach->dongia=$req->dongia;
        $sach->luotxem=$req->luotxem;
        $sach->luotmua=$req->luotmua;
        $sach->khuyenmai=$req->khuyenmai;
        $sach->anhbia=$new_name;
        $sach->tap=$req->tap;
        $sach->sotap=$req->sotap;
        $sach->save();
        return response()->json([
       'success'   => 'add Successfully'   
      ]);
    }
    function sach_update(Request $req){
        $id=$req->ud_masach;
        $sach=sach::find($id);
        $sach->maloai=$req->ud_loaisach;
        $sach->manhaxuatban=$req->ud_nxb;
        $sach->tensach=$req->ud_tensach;
        $sach->tacgia=$req->ud_tacgia;
        $sach->soluong=$req->ud_soluong;
        $sach->dongia=$req->ud_dongia;
        $sach->luotxem=$req->ud_luotxem;
        $sach->luotmua=$req->ud_luotmua;
        $sach->khuyenmai=$req->ud_khuyenmai;
        //$sach->anhbia=$req->ud_anhbia;
        $sach->tap=$req->ud_tap;
        $sach->sotap=$req->ud_sotap;
        $sach->save();
         return response()->json([
        'ok'   => 'update Successfully'   
      ]);
    }
    function qlsach_delete(Request $req){
        $id=$req->id;
        $sach=sach::find($id);
        $sach->hidden=1;
        $sach->save();
        return response()->json([
       'success'   => 'Delete Successfully' ,
      ]);
    }
    function qlchitietsach(){
        $chitietsach=chitietsach::all();
        return view('admin.qlchitietsach',compact('chitietsach'));
    }
    function qlchitietsach_insert(){
        return view('admin.chitietsach_add');
    }
    function qlchitietsach_insert_post(Request $req){
        $chitietsach = new chitietsach();
        $chitietsach->masach=$req->tensach;
        $chitietsach->mangonngu=$req->ngonngu;
        $chitietsach->sotrang=$req->sotrang;
        $chitietsach->namxuatban=$req->namxuatban;
        $chitietsach->noidung=$req->noidung;
        $chitietsach->kichthuoc=$req->kichthuoc;
        $chitietsach->trongluong=$req->trongluong;
        $chitietsach->ngayphathanh=$req->ngayphathanh;
        $chitietsach->save();
        echo('oke');
    }
    
}
