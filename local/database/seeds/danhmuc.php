<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class danhmuc extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('nhaxuatban')->insert(array(
         	array('tendanmuc'=>'Nổi bật','anhdaidien'=>'dm_noibat.jpg','thutu'=>'1','madanhmucha'=>'0','created_at'=>Carbon::now()->format('Y-m-d H:i:s'),'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')),
         	array('tendanmuc'=>'Sách kinh tế','anhdaidien'=>'dm_sachkinhte.jpg','thutu'=>'2','madanhmucha'=>'0','created_at'=>Carbon::now()->format('Y-m-d H:i:s'),'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')),
         	array('tendanmuc'=>'Văn học nước ngoài','anhdaidien'=>'dm_vhnuocngoai.jpg','thutu'=>'3','madanhmucha'=>'0','created_at'=>Carbon::now()->format('Y-m-d H:i:s'),'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')),
         	array('tendanmuc'=>'Văn học trong nước','anhdaidien'=>'dm_vhtrongnuoc.jpg','thutu'=>'4','madanhmucha'=>'0','created_at'=>Carbon::now()->format('Y-m-d H:i:s'),'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')),
         	array('tendanmuc'=>'Sách kĩ năng sống','anhdaidien'=>'dm_kinnangsaong.jpg','thutu'=>'5','madanhmucha'=>'0','created_at'=>Carbon::now()->format('Y-m-d H:i:s'),'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')),
         	array('tendanmuc'=>'Sách tuổi teen','anhdaidien'=>'dm_tuoiteen.jpg','thutu'=>'6','madanhmucha'=>'0','created_at'=>Carbon::now()->format('Y-m-d H:i:s'),'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')),
         	array('tendanmuc'=>'Học Ngoại Ngữ','anhdaidien'=>'dm_ngoaingu.jpg','thutu'=>'7','madanhmucha'=>'0','created_at'=>Carbon::now()->format('Y-m-d H:i:s'),'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')),
         	array('tendanmuc'=>'Sách thiếu nhi','anhdaidien'=>'dm_thieunhi.jpg','thutu'=>'8','madanhmucha'=>'0','created_at'=>Carbon::now()->format('Y-m-d H:i:s'),'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')),
         	array('tendanmuc'=>'Thưởng thức đời sống','anhdaidien'=>'dm_thuongthucdoisong.jpg','thutu'=>'9','madanhmucha'=>'0','created_at'=>Carbon::now()->format('Y-m-d H:i:s'),'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')),
         	array('tendanmuc'=>'Sách chuyên nghành','anhdaidien'=>'dm_chuyennganh.jpg','thutu'=>'10','madanhmucha'=>'0','created_at'=>Carbon::now()->format('Y-m-d H:i:s'),'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')),
         	array('tendanmuc'=>'Văn phòng phẩm- Quà Tặng','anhdaidien'=>'dm_vanphongpham.jpg','thutu'=>'11','madanhmucha'=>'0','created_at'=>Carbon::now()->format('Y-m-d H:i:s'),'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')),
         	array('tendanmuc'=>'Công ty phát hành','anhdaidien'=>'dm_nxb.jpg','thutu'=>'12','madanhmucha'=>'0','created_at'=>Carbon::now()->format('Y-m-d H:i:s'),'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'))
         	
         ));
    }
}
