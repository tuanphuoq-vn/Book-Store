<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;


class loaisach extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('loaisach')->insert(array(
       	array('madanhmuc'=>'1','tenloai'=>'Sách bán chạy','anhbia'=>'sachbanchay.jpg','created_at'=>Carbon::now()->format('Y-m-d H:i:s'),'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')),
       	array('madanhmuc'=>'1','tenloai'=>'Sách mới','anhbia'=>'sachmoi.jpg','created_at'=>Carbon::now()->format('Y-m-d H:i:s'),'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')),
       	array('madanhmuc'=>'1','tenloai'=>'Sắp phát hành','anhbia'=>'sapphathanh.jpg','created_at'=>Carbon::now()->format('Y-m-d H:i:s'),'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')),
       	array('madanhmuc'=>'1','tenloai'=>'Sách giảm giá','anhbia'=>'sachgiamgia.jpg','created_at'=>Carbon::now()->format('Y-m-d H:i:s'),'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')),
       	array('madanhmuc'=>'2','tenloai'=>'Tài chính - Kế toán','anhbia'=>'taichinhketoan.jpg','created_at'=>Carbon::now()->format('Y-m-d H:i:s'),'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')),
       	array('madanhmuc'=>'2','tenloai'=>'Quản Trị - Lãnh đạo','anhbia'=>'quantrilanhdao.jpg','created_at'=>Carbon::now()->format('Y-m-d H:i:s'),'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')),
		array('madanhmuc'=>'2','tenloai'=>'Marketing - Bán hàng','anhbia'=>'marketing.jpg','created_at'=>Carbon::now()->format('Y-m-d H:i:s'),'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')),  	
       	array('madanhmuc'=>'2','tenloai'=>'Kỹ năng làm việc','anhbia'=>'kynanglamviec.jpg','created_at'=>Carbon::now()->format('Y-m-d H:i:s'),'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')),
       	array('madanhmuc'=>'2','tenloai'=>'Kinh tế học','anhbia'=>'kinhtehoc.jpg','created_at'=>Carbon::now()->format('Y-m-d H:i:s'),'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')),
       	array('madanhmuc'=>'2','tenloai'=>'Khởi nghiệp','anhbia'=>'khoinghiep.jpg','created_at'=>Carbon::now()->format('Y-m-d H:i:s'),'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')),
       	array('madanhmuc'=>'2','tenloai'=>'Danh nhân - Tập đoàn','anhbia'=>'doanhnhantapdoan.jpg','created_at'=>Carbon::now()->format('Y-m-d H:i:s'),'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')),
       	array('madanhmuc'=>'2','tenloai'=>'Bài học kinh doanh','anhbia'=>'baihockinhdoanh.jpg','created_at'=>Carbon::now()->format('Y-m-d H:i:s'),'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')),
       	array('madanhmuc'=>'3','tenloai'=>'Tiểu sử - Hồi ký','anhbia'=>'hoiky.jpg','created_at'=>Carbon::now()->format('Y-m-d H:i:s'),'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')),
       	array('madanhmuc'=>'3','tenloai'=>'Truyện lịch sử - Kiếm hiệp','anhbia'=>'kiemhiep.jpg','created_at'=>Carbon::now()->format('Y-m-d H:i:s'),'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')),
       	array('madanhmuc'=>'3','tenloai'=>'Truyện ngắn - Tản văn','anhbia'=>'truyenngan.jpg','created_at'=>Carbon::now()->format('Y-m-d H:i:s'),'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')),
       	array('madanhmuc'=>'3','tenloai'=>'Tác phẩm kinh điển','anhbia'=>'kinhdien.jpg','created_at'=>Carbon::now()->format('Y-m-d H:i:s'),'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')),
       	array('madanhmuc'=>'3','tenloai'=>'Huyền bí - Giả tưởng','anhbia'=>'giatuong.jpg','created_at'=>Carbon::now()->format('Y-m-d H:i:s'),'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')),
       	array('madanhmuc'=>'3','tenloai'=>'Truyện trinh thám - Kinh dị','anhbia'=>'kinhdi.jpg','created_at'=>Carbon::now()->format('Y-m-d H:i:s'),'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')),
       	array('madanhmuc'=>'3','tenloai'=>'Tiểu thuyết tình cảm - Lãng mạn','anhbia'=>'langman.jpg','created_at'=>Carbon::now()->format('Y-m-d H:i:s'),'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')),
       	array('madanhmuc'=>'3','tenloai'=>'Tiểu thuyết đam mỹ','anhbia'=>'tieuthuyetdammy.jpg','created_at'=>Carbon::now()->format('Y-m-d H:i:s'),'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')),
       	array('madanhmuc'=>'3','tenloai'=>'Bách hợp','anhbia'=>'bachhop.jpg','created_at'=>Carbon::now()->format('Y-m-d H:i:s'),'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')),
       	array('madanhmuc'=>'4','tenloai'=>'Tiểu thuyết','anhbia'=>'tieuthuyet.jpg','created_at'=>Carbon::now()->format('Y-m-d H:i:s'),'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')),
       	array('madanhmuc'=>'4','tenloai'=>'Truyện ngắn - Tản văn','anhbia'=>'tanvan.jpg','created_at'=>Carbon::now()->format('Y-m-d H:i:s'),'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')),
       	array('madanhmuc'=>'4','tenloai'=>'Huyền bí - Giả tưởng','anhbia'=>'huyenbi.jpg','created_at'=>Carbon::now()->format('Y-m-d H:i:s'),'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')),
       	array('madanhmuc'=>'4','tenloai'=>'Phóng sự - Ký sự','anhbia'=>'kysu.jpg','created_at'=>Carbon::now()->format('Y-m-d H:i:s'),'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')),
       	array('madanhmuc'=>'4','tenloai'=>'Trinh thám - Kinh dị','anhbia'=>'trinhtham.jpg','created_at'=>Carbon::now()->format('Y-m-d H:i:s'),'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')),
       	array('madanhmuc'=>'4','tenloai'=>'Tiểu sử - Hồi ký','anhbia'=>'tieusu.jpg','created_at'=>Carbon::now()->format('Y-m-d H:i:s'),'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')),
       	array('madanhmuc'=>'5','tenloai'=>'Kĩ năng sống','anhbia'=>'tieusu.jpg','created_at'=>Carbon::now()->format('Y-m-d H:i:s'),'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')),
       	array('madanhmuc'=>'5','tenloai'=>'Nghệ thuật sống đẹp','anhbia'=>'tieusu.jpg','created_at'=>Carbon::now()->format('Y-m-d H:i:s'),'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')),
       	array('madanhmuc'=>'6','tenloai'=>'Văn học teen','anhbia'=>'tieusu.jpg','created_at'=>Carbon::now()->format('Y-m-d H:i:s'),'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')),
       	array('madanhmuc'=>'6','tenloai'=>'Hướng nghiệp - Kỹ năng','anhbia'=>'tieusu.jpg','created_at'=>Carbon::now()->format('Y-m-d H:i:s'),'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')),
       	array('madanhmuc'=>'6','tenloai'=>'Light Novel','anhbia'=>'tieusu.jpg','created_at'=>Carbon::now()->format('Y-m-d H:i:s'),'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')),
       	array('madanhmuc'=>'6','tenloai'=>'Truyện tranh','anhbia'=>'tieusu.jpg','created_at'=>Carbon::now()->format('Y-m-d H:i:s'),'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')),
       	array('madanhmuc'=>'7','tenloai'=>'Từ điển','anhbia'=>'tieusu.jpg','created_at'=>Carbon::now()->format('Y-m-d H:i:s'),'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')),
       	array('madanhmuc'=>'7','tenloai'=>'Sách học tiếng Anh','anhbia'=>'tieusu.jpg','created_at'=>Carbon::now()->format('Y-m-d H:i:s'),'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')),
       	array('madanhmuc'=>'7','tenloai'=>'Sách học tiếng Hoa','anhbia'=>'tieusu.jpg','created_at'=>Carbon::now()->format('Y-m-d H:i:s'),'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')),
       	array('madanhmuc'=>'7','tenloai'=>'Sách học tiếng Nhật','anhbia'=>'tieusu.jpg','created_at'=>Carbon::now()->format('Y-m-d H:i:s'),'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')),
       	array('madanhmuc'=>'8','tenloai'=>'Truyện cổ tích - Thần thoại','anhbia'=>'tieusu.jpg','created_at'=>Carbon::now()->format('Y-m-d H:i:s'),'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')),
       	array('madanhmuc'=>'8','tenloai'=>'Vừa học vừa chơi','anhbia'=>'tieusu.jpg','created_at'=>Carbon::now()->format('Y-m-d H:i:s'),'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')),
       	array('madanhmuc'=>'8','tenloai'=>'Kiến thức - Kĩ năng','anhbia'=>'tieusu.jpg','created_at'=>Carbon::now()->format('Y-m-d H:i:s'),'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')),
       	array('madanhmuc'=>'8','tenloai'=>'Văn học','anhbia'=>'tieusu.jpg','created_at'=>Carbon::now()->format('Y-m-d H:i:s'),'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')),
       	array('madanhmuc'=>'8','tenloai'=>'Truyện kể cho bé','anhbia'=>'tieusu.jpg','created_at'=>Carbon::now()->format('Y-m-d H:i:s'),'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')),
       	array('madanhmuc'=>'9','tenloai'=>'Văn hóa - Du lịch','anhbia'=>'tieusu.jpg','created_at'=>Carbon::now()->format('Y-m-d H:i:s'),'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')),
       	array('madanhmuc'=>'9','tenloai'=>'Chăm sóc sức khỏe','anhbia'=>'tieusu.jpg','created_at'=>Carbon::now()->format('Y-m-d H:i:s'),'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')),
       	array('madanhmuc'=>'9','tenloai'=>'Phong thủy - Nhà cửa','anhbia'=>'tieusu.jpg','created_at'=>Carbon::now()->format('Y-m-d H:i:s'),'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')),
       	array('madanhmuc'=>'9','tenloai'=>'Nấu ăn','anhbia'=>'tieusu.jpg','created_at'=>Carbon::now()->format('Y-m-d H:i:s'),'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')),
       	array('madanhmuc'=>'9','tenloai'=>'Giải trí - Thể thao','anhbia'=>'tieusu.jpg','created_at'=>Carbon::now()->format('Y-m-d H:i:s'),'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')),
       	array('madanhmuc'=>'10','tenloai'=>'Giáo dục','anhbia'=>'tieusu.jpg','created_at'=>Carbon::now()->format('Y-m-d H:i:s'),'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')),
       	array('madanhmuc'=>'10','tenloai'=>'Công nghệ thông tin','anhbia'=>'tieusu.jpg','created_at'=>Carbon::now()->format('Y-m-d H:i:s'),'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')),
       	array('madanhmuc'=>'10','tenloai'=>'Lịch sử - Địa lý','anhbia'=>'tieusu.jpg','created_at'=>Carbon::now()->format('Y-m-d H:i:s'),'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')),
       	array('madanhmuc'=>'10','tenloai'=>'Khoa học tự nhiên','anhbia'=>'tieusu.jpg','created_at'=>Carbon::now()->format('Y-m-d H:i:s'),'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')),
       	array('madanhmuc'=>'10','tenloai'=>'Mỹ thuật - Kiến trúc','anhbia'=>'tieusu.jpg','created_at'=>Carbon::now()->format('Y-m-d H:i:s'),'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')),
       	array('madanhmuc'=>'10','tenloai'=>'Chính trị - Triết học','anhbia'=>'tieusu.jpg','created_at'=>Carbon::now()->format('Y-m-d H:i:s'),'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')),
       	array('madanhmuc'=>'10','tenloai'=>'Doanh nhân - Người nổi tiếng','anhbia'=>'tieusu.jpg','created_at'=>Carbon::now()->format('Y-m-d H:i:s'),'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')),
       	array('madanhmuc'=>'10','tenloai'=>'Tâm linh - Tôn giáo','anhbia'=>'tieusu.jpg','created_at'=>Carbon::now()->format('Y-m-d H:i:s'),'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')),
       	array('madanhmuc'=>'10','tenloai'=>'Y Dược','anhbia'=>'tieusu.jpg','created_at'=>Carbon::now()->format('Y-m-d H:i:s'),'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')),
       	array('madanhmuc'=>'10','tenloai'=>'Khoa học xã hội','anhbia'=>'tieusu.jpg','created_at'=>Carbon::now()->format('Y-m-d H:i:s'),'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')),
       	array('madanhmuc'=>'11','tenloai'=>'Hộp bút - Bút bi','anhbia'=>'tieusu.jpg','created_at'=>Carbon::now()->format('Y-m-d H:i:s'),'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')),
       	array('madanhmuc'=>'11','tenloai'=>'Bình nước,bình giữ nhiệt','anhbia'=>'tieusu.jpg','created_at'=>Carbon::now()->format('Y-m-d H:i:s'),'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')),
       	array('madanhmuc'=>'11','tenloai'=>'Thiệp,Qùa tặng','anhbia'=>'tieusu.jpg','created_at'=>Carbon::now()->format('Y-m-d H:i:s'),'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')),
       ));
    }
}
