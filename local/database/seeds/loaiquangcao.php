<?php

use Illuminate\Database\Seeder;

class loaiquangcao extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('loaiquangcao')->insert(array(
           array(''=>'slide','created_at'=>Carbon::now()->format('Y-m-d H:i:s'),'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')),
           array('tenloaiquangcao'=>'Quảng cáo sản phẩm','created_at'=>Carbon::now()->format('Y-m-d H:i:s'),'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')),
            array('tenloaiquangcao'=>'Quảng cáo cho thương hiệu','created_at'=>Carbon::now()->format('Y-m-d H:i:s'),'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')),

       ));
    }
}
