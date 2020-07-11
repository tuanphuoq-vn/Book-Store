<?php

use Illuminate\Database\Seeder;

class phanquyen extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('phanquyen')->insert(array(
           array('tenquyen'=>'admin','mota'=>'Quản lý toàn bộ website','created_at'=>Carbon::now()->format('Y-m-d H:i:s'),'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')),
           array('tenquyen'=>'ql nhập hàng','mota'=>'Quản lý thao tác nhập hàng và kho','created_at'=>Carbon::now()->format('Y-m-d H:i:s'),'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')),
           array('tenquyen'=>'ql bán hàng','mota'=>'Quản lý thao tác bán hàng','created_at'=>Carbon::now()->format('Y-m-d H:i:s'),'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')),
       ));
    }
}
