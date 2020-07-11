<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ngonngu extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('nhaxuatban')->insert(array(
        	array('ten'=>'Tiếng Việt','created_at'=>Carbon::now()->format('Y-m-d H:i:s'),'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')),
        	array('ten'=>'Tiếng Anh','created_at'=>Carbon::now()->format('Y-m-d H:i:s'),'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')),
        	array('ten'=>'Tiếng Trung','created_at'=>Carbon::now()->format('Y-m-d H:i:s'),'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')),
        	array('ten'=>'Tiếng Hàn','created_at'=>Carbon::now()->format('Y-m-d H:i:s'),'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')),
        	array('ten'=>'Tiếng Nhật','created_at'=>Carbon::now()->format('Y-m-d H:i:s'),'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')),

        ));
    }
}
