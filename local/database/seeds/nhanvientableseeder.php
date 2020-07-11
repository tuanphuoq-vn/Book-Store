<?php

use Illuminate\Database\Seeder;

class nhanvientableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('nhanvien')->insert(array(
        	array('ten'=>'Lưu Tùng Dương','sdt'=>'0326347291','diachi'=>'Khoái Châu-Hưng Yên','mail'=>'luutungduong1411@gmail.com','gioitinh'=>'Nam','chucvu'=>'Quản lý website','created_at'=>Carbon::now()->format('Y-m-d H:i:s'),'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')),
        	array('ten'=>'Đỗ Như biên','sdt'=>'0332369291','diachi'=>'Khoái Châu-Hưng Yên','mail'=>'donhubien@gmail.com','gioitinh'=>'Nam','chucvu'=>'Quản lý kho','created_at'=>Carbon::now()->format('Y-m-d H:i:s'),'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')),
        	array('ten'=>'Đỗ Đắc Hoàng','sdt'=>'0326347291','diachi'=>'Khoái Châu-Hưng Yên','mail'=>'dodachoang@gmail.com','gioitinh'=>'Nam','chucvu'=>'Quản lý kho','created_at'=>Carbon::now()->format('Y-m-d H:i:s'),'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')),
        	array('ten'=>'Đỗ Đình Hiếu','sdt'=>'0326347291','diachi'=>'Hưng Yên','mail'=>'dodinhieu@gmail.com','gioitinh'=>'Nam','chucvu'=>'Nhân viên bán hàng','created_at'=>Carbon::now()->format('Y-m-d H:i:s'),'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')),
        	array('ten'=>'Nguyễn Huy Hoài Nam','sdt'=>'0326347291','diachi'=>'Vĩnh phúc','mail'=>'namvp@gmail.com','gioitinh'=>'Nam','chucvu'=>'Quản lý kho','created_at'=>Carbon::now()->format('Y-m-d H:i:s'),'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')),
        	array('ten'=>'Nguyễn Tuấn Anh','sdt'=>'0326347291','diachi'=>'Khoái Châu-Hưng Yên','mail'=>'nguyentuananh@gmail.com','gioitinh'=>'Nam','chucvu'=>'Quản lý sản phẩm','created_at'=>Carbon::now()->format('Y-m-d H:i:s'),'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')),

       ));
    }
}
