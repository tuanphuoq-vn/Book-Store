<?php

namespace App\Providers;

use Illuminate\Http\Request;
use App\slide as slides;
use DB;
use App\khachhang as khachhang;
use App\ngonngu;
use App\danhmuc as danhmuc;
use App\loaisach as loaisach;
use App\nhaxuatban as nhaxuatban;
use App\sach as sach;
use App\Cart;
use Session; 
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {   
        $sl=DB::table('quangcao')->where('maloaiquangcao', '=', 1)->get();
        $khachhang=khachhang::all();
        $danhmuc=danhmuc::all();
        $ls=loaisach::all();
        $nxb=nhaxuatban::all();
        $sach=sach::all();
        $ngonngu=ngonngu::all();
        view()->share(['sl'=>$sl,'danhmuc'=>$danhmuc,'ls'=>$ls,'nxb'=>$nxb,'sach'=>$sach,'khachhang'=>$khachhang,'ngonngu'=>$ngonngu]);
         view()->composer('page.header',function($view){
             if(Session('cart')){
                $oldcart=Session::get('cart');
                $cart=new Cart($oldcart);
                $view->with(['cart'=>Session::get('cart'),'product_cart'=>$cart->items,'totalPrice'=>$cart->totalPrice,'totalQty'=>$cart->totalQty]);
            }
             
         });

    }
}
