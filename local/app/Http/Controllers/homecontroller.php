<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\slide as slides;
use DB;
use App\khachhang as khachhang;
use App\chitietsach;
use App\danhmuc as danhmuc;
use App\loaisach as loaisach;
use App\nhaxuatban as nhaxuatban;
use App\sach as sach;
use App\Cart;
use Session;
use App\demphantu;
use Illuminate\Support\Facades\Validator;

class homecontroller extends Controller
{
    function gethome(){
    	$sl=DB::table('quangcao')->where('maloaiquangcao', '=', 1)->get();
        $danhmuc=danhmuc::all();
        $ls=loaisach::all();
        $nxb=nhaxuatban::all();
        $sach=DB::table('sach')->where('hidden','=',0)->get();
    	return View('page.home',compact('sl','danhmuc','ls','nxb','sach'));
    }
    function addusers(){
    	return View('admin.adduser');
    }
    function getsachkinhte(Request $req){
        // $id=$req->id;
        // $danhmuc_id=danhmuc::find($id);
        // dd($danhmuc_id);
        // $sach_danhmuc_id=sach::where('maloai',$danhmuc_id->id)->get();
        $ma_loai=loaisach::where('madanhmuc', $req->id)->select('id')->get();
        $sach=sach::whereIn('maloai',$ma_loai)->get();
        $loaisach=danhmuc::find($req->id);
        // dd($loaisach);
        return View('page.danhmucsanpham.loaisach',compact('sach','loaisach'));
        // dd($sach_danhmuc_id);
     //    if(count( $sach_danhmuc_id)>0){
     //        $array=array();
     //    $array[0]['tacgia']= $sach_danhmuc_id[0]->tacgia;
     //    $array[0]['sl']=0;
     //    $dem=0;
     //    for($i=0;$i<1;$i++){
     //        foreach( $sach_danhmuc_id as $datas){
     //            if($array[$i]['tacgia']!=$datas->tacgia){
     //                $dem+=1;
     //                $array[$dem]['tacgia']=$datas->tacgia;
     //                $array[$dem]['sl']=1;
     //            }
     //            else{
     //                $array[$i]['sl']+=1;
     //            }
     //        }
     //     }
     //    $arrays=array_unique($array,0);
     //    $tacgia=array();
     //    $dem=-1;
     //    foreach($arrays as $ls){
     //         $dem+=1;
     //        $tacgia[$dem]['tacgia']=$ls['tacgia'];
     //        $tacgia[$dem]['sl']=0;
     //    }
     //    for($i=0;$i<count($tacgia);$i++){
     //        foreach ( $sach_danhmuc_id as $sachs) {
     //            if($tacgia[$i]['tacgia']==$sachs->tacgia)
     //            {
     //                $tacgia[$i]['sl']+=1;
     //            }
     //        }
     //   }
     //   $array=array();
     //    $array[0]['nxb']= $sach_danhmuc_id[0]->manhaxuatban;
     //    $array[0]['sl']=0;
     //    $dem=0;
     //    for($i=0;$i<1;$i++){
     //        foreach( $sach_danhmuc_id as $datas){
     //            if($array[$i]['nxb']!=$datas->manhaxuatban){
     //                $dem+=1;
     //                $array[$dem]['nxb']=$datas->manhaxuatban;
     //                $array[$dem]['sl']=1;
     //            }
     //            else{
     //                $array[$i]['sl']+=1;
     //            }
     //        }
     //     }
     //    $arrays=array_unique($array,0);
     //    $nxbs=array();
     //    $dem=-1;
     //    foreach($arrays as $nxb){
     //         $dem+=1;
     //        $nxbs[$dem]['nxb']=$nxb['nxb'];
     //        $nxbs[$dem]['sl']=0;
     //    }
     //    for($i=0;$i<count($nxbs);$i++){
     //        foreach ( $sach_danhmuc_id as $sach_nxb) {
     //            if($nxbs[$i]['nxb']==$sach_nxb->manhaxuatban)
     //            {
     //                $nxbs[$i]['sl']+=1;
     //            }
     //        }
     //    }
     //    }
     //    else{
     //        $error="Danh mục sản phẩm này chưa được bày bán trên website.Vui lòng chọn sản phẩm khác!";
     //    }
    	// return View('page.danhmucsanpham.danhmucsach',compact('id','danhmuc_id','sach_danhmuc_id','$sach_nhaxuatban_id','tacgia','error','nxbs'));
    }
    function danhmuc_tacgia($id,$tacgia){
        $danhmuc_id=danhmuc::find($id);
        $danhmucsach_id=sach::where('maloai',$danhmuc_id->id)->get();
        $danhmucsach_tacgia=sach::where('tacgia',$tacgia)->get();
        if(count($danhmucsach_id)>0){
            $array=array();
        $array[0]['tacgia']= $danhmucsach_id[0]->tacgia;
        $array[0]['sl']=0;
        $dem=0;
        for($i=0;$i<1;$i++){
            foreach( $danhmucsach_id as $datas){
                if($array[$i]['tacgia']!=$datas->tacgia){
                    $dem+=1;
                    $array[$dem]['tacgia']=$datas->tacgia;
                    $array[$dem]['sl']=1;
                }
                else{
                    $array[$i]['sl']+=1;
                }
            }
         }
        $arrays=array_unique($array,0);
        $tacgia=array();
        $dem=-1;
        foreach($arrays as $ls){
             $dem+=1;
            $tacgia[$dem]['tacgia']=$ls['tacgia'];
            $tacgia[$dem]['sl']=0;
        }
        for($i=0;$i<count($tacgia);$i++){
            foreach ( $danhmucsach_id as $sachs) {
                if($tacgia[$i]['tacgia']==$sachs->tacgia)
                {
                    $tacgia[$i]['sl']+=1;
                }
            }
       }
       $array=array();
        $array[0]['nxb']= $danhmucsach_id[0]->manhaxuatban;
        $array[0]['sl']=0;
        $dem=0;
        for($i=0;$i<1;$i++){
            foreach( $danhmucsach_id as $datas){
                if($array[$i]['nxb']!=$datas->manhaxuatban){
                    $dem+=1;
                    $array[$dem]['nxb']=$datas->manhaxuatban;
                    $array[$dem]['sl']=1;
                }
                else{
                    $array[$i]['sl']+=1;
                }
            }
         }
        $arrays=array_unique($array,0);
        $nxbs=array();
        $dem=-1;
        foreach($arrays as $nxb){
             $dem+=1;
            $nxbs[$dem]['nxb']=$nxb['nxb'];
            $nxbs[$dem]['sl']=0;
        }
        for($i=0;$i<count($nxbs);$i++){
            foreach ( $danhmucsach_id as $sach_nxb) {
                if($nxbs[$i]['nxb']==$sach_nxb->manhaxuatban)
                {
                    $nxbs[$i]['sl']+=1;
                }
            }
        }
        }
        else{
            $error="Danh mục sản phẩm này chưa được bày bán trên website.Vui lòng chọn sản phẩm khác!";
        }
        //echo "ok";
        return View('page.danhmucsanpham.danhmucsach_tacgia',compact('id','danhmuc_id','danhmucsach_id','$sach_nhaxuatban_id','tacgia','error','nxbs','danhmucsach_tacgia'));
    }
    function getsachmoi($id){
        $sach=sach::where('maloai',$id)->get();
        $loaisach=loaisach::find($id);
    	return View('page.danhmucsanpham.loaisach',compact('sach','loaisach'));
    }
    function chitietsanpham(Request $request)
    {   $id=$request->id;
        $sach=sach::find($id);
        $nxbs=nhaxuatban::find($sach->manhaxuatban);
        $loaisachs=loaisach::find($sach->maloai);
        $sach_lienquan=sach::where('maloai',$sach->maloai)->get();
        $chitietsanpham=chitietsach::where('masach',$id)->get();
        return View('page.sanpham.ctsanpham',compact('sach','nxbs','chitietsanpham','loaisachs','sach_lienquan'));
    }
    function getAddToCart(Request $req,$id){
        $product=sach::find($id);
        $oldcart=Session('cart')?Session::get('cart'):null;
        $cart=new Cart($oldcart);
        $cart->add($product,$id); 
        $req->session()->put('cart',$cart);
        return redirect()->back();
    }
    function getUpdateItemCart(Request $req,$id,$qty){
        $product=sach::find($id);
        $oldcart=Session::get('cart');
        foreach ($oldcart->items as $carts) {
            if($carts['item']['id']==$id){
                if ($carts['qty']<$qty) {
                    $cart=new Cart($oldcart);
                    $cart->add($product,$id); 
                    $req->session()->put('cart',$cart);
                }
                else
                   {
                    $cart=new Cart($oldcart);
                    $cart->reduceByOne($id);
                    if(count($cart->items)>0){
                        Session::put('cart',$cart);
                     }
                     else{
                        session()->forget('cart');
                     }
                   }
            }
        }
         return redirect()->back(); 
    }
    function getDelItemCart($id){
         $oldcart=Session::has('cart')?Session::get('cart'):null;
         $cart=new Cart($oldcart);
         $cart->removeItem($id);
         if(count($cart->items)>0){
            Session::put('cart',$cart);
         }
         else{
            session()->forget('cart');
         }
          return redirect()->back(); 
    }
    function getCheckout(){
        return View('page.sanpham.checkout');
    }
    function timkiem(Request $req){
      if(request('query')){
         $querys=request('query');
         $data=DB::table('sach')->where('tensach','LIKE','%'.$querys)->orWhere('tensach','LIKE',$querys.'%')->get();
         $output='<ul style="display:block;position:relative;background:white;z-index:1000;list-style-type: none;width:394px;">';
         foreach ($data as $row) {
            $output.="<a href=\"sanpham/$row->id\"><li><img src=\"http://localhost:8080/laravel/sachhay/public/image/anhsanpham/$row->anhbia\" style=\"width:50px;height:70px\">&nbsp;&nbsp;$row->tensach</li></a>";
        }
         $output.='</ul>';
         return response()->json([
        'success'   =>   $output
         ]);
      }
       
    }function timkiem_key(Request $req){
        $key=$req->key;
        $sach=sach::where('tensach','LIKE','%'.$key.'%')->get();
        if(count($sach)==0){ 
            $error="Không Tìm Thấy Sản Phẩm Nào Với Từ Khóa: \" $key \".Vui Lòng Tìm Kiếm Sản Phẩm Khác!";
        }
        else{
            $array=array();
        $array[0]['maloai']=$sach[0]->maloai;
        $array[0]['sl']=0;
        $dem=0;
        for($i=0;$i<1;$i++){
            foreach($sach as $datas){
                if($array[$i]['maloai']!=$datas->maloai){
                    $dem+=1;
                    $array[$dem]['maloai']=$datas->maloai;
                    $array[$dem]['sl']=1;
                }
                else{
                    $array[$i]['sl']+=1;
                }
            }
         }
        $arrays=array_unique($array,0);
        $loaisach=array();
        $dem=-1;
        foreach($arrays as $ls){
             $dem+=1;
            $loaisach[$dem]['maloai']=$ls['maloai'];
            $loaisach[$dem]['sl']=0;
        }
         for($i=0;$i<count($loaisach);$i++){
            foreach ($sach as $sachs) {
                if($loaisach[$i]['maloai']==$sachs->maloai)
                {
                    $loaisach[$i]['sl']+=1;
                }
            }
       }
        $array=array();
        $array[0]['tacgia']= $sach[0]->tacgia;
        $array[0]['sl']=0;
        $dem=0;
        for($i=0;$i<1;$i++){
            foreach( $sach as $datas){
                if($array[$i]['tacgia']!=$datas->tacgia){
                    $dem+=1;
                    $array[$dem]['tacgia']=$datas->tacgia;
                    $array[$dem]['sl']=1;
                }
                else{
                    $array[$i]['sl']+=1;
                }
            }
         }
        $arrays=array_unique($array,0);
        $tacgia=array();
        $dem=-1;
        foreach($arrays as $ls){
             $dem+=1;
            $tacgia[$dem]['tacgia']=$ls['tacgia'];
            $tacgia[$dem]['sl']=0;
        }
        for($i=0;$i<count($tacgia);$i++){
            foreach ( $sach as $sachs) {
                if($tacgia[$i]['tacgia']==$sachs->tacgia)
                {
                    $tacgia[$i]['sl']+=1;
                }
            }
       }
       $array=array();
        $array[0]['nxb']= $sach[0]->manhaxuatban;
        $array[0]['sl']=0;
        $dem=0;
        for($i=0;$i<1;$i++){
            foreach( $sach as $datas){
                if($array[$i]['nxb']!=$datas->manhaxuatban){
                    $dem+=1;
                    $array[$dem]['nxb']=$datas->manhaxuatban;
                    $array[$dem]['sl']=1;
                }
                else{
                    $array[$i]['sl']+=1;
                }
            }
         }
        $arrays=array_unique($array,0);
        $nxbs=array();
        $dem=-1;
        foreach($arrays as $nxb){
             $dem+=1;
            $nxbs[$dem]['nxb']=$nxb['nxb'];
            $nxbs[$dem]['sl']=0;
        }
        for($i=0;$i<count($nxbs);$i++){
            foreach ( $sach as $sach_nxb) {
                if($nxbs[$i]['nxb']==$sach_nxb->manhaxuatban)
                {
                    $nxbs[$i]['sl']+=1;
                }
            }
        }
        }
        return view('page.sanpham.timkiem',compact('key','sach','loaisach','error','tacgia','nxbs'));
    }

}
