<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class nxbtableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('nhaxuatban')->insert(array(
        	array('tennhaxuatban'=>'Chibooks','logo'=>'chibooks__00524.jpg','diachi'=>'số 23 thị trấn Mỹ Hào-Hưng Yên','email'=>'Chibooks'.'@gmai.com','fax'=>'04337792','created_at'=>Carbon::now()->format('Y-m-d H:i:s'),'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')),
            array('tennhaxuatban'=>'Cổ Nguyệt','logo'=>'co-nguyet__27730.jpg','diachi'=>'số 23 thị trấn Mỹ Hào-Hưng Yên','email'=>'CoNguyetBooks'.'@gmai.com','fax'=>'04337792','created_at'=>Carbon::now()->format('Y-m-d H:i:s'),'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')),
            array('tennhaxuatban'=>'Dtbooks','logo'=>'dtbooks__93550.jpg','diachi'=>'số 23 thị trấn Mỹ Hào-Hưng Yên','email'=>'Dtbooks'.'@gmai.com','fax'=>'04337792','created_at'=>Carbon::now()->format('Y-m-d H:i:s'),'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')),
            array('tennhaxuatban'=>'First News - Trí Việt','logo'=>'first-news-tri-viet__62371.jpg','diachi'=>'số 23 thị trấn Mỹ Hào-Hưng Yên','email'=>'TriVietbooks'.'@gmai.com','fax'=>'04337792','created_at'=>Carbon::now()->format('Y-m-d H:i:s'),'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')),
            array('tennhaxuatban'=>'Fujibooks','logo'=>'noimage.jpg','diachi'=>'số 23 thị trấn Mỹ Hào-Hưng Yên','email'=>'Fujibooks'.'@gmai.com','fax'=>'04337792','created_at'=>Carbon::now()->format('Y-m-d H:i:s'),'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')),
            array('tennhaxuatban'=>'Hương Giang','logo'=>'huong-giang__04646.jpg','diachi'=>'số 23 thị trấn Mỹ Hào-Hưng Yên','email'=>'HuongGiang'.'@gmai.com','fax'=>'04337792','created_at'=>Carbon::now()->format('Y-m-d H:i:s'),'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')),
            array('tennhaxuatban'=>'Hương Trang','logo'=>'huong-trang__90150.jpg','diachi'=>'số 23 thị trấn Mỹ Hào-Hưng Yên','email'=>'huong-trang'.'@gmai.com','fax'=>'04337792','created_at'=>Carbon::now()->format('Y-m-d H:i:s'),'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')),
            array('tennhaxuatban'=>'Huy Hoàng','logo'=>'huy-hoang-book__45019.jpg','diachi'=>'số 23 thị trấn Mỹ Hào-Hưng Yên','email'=>'huy-hoang-book'.'@gmai.com','fax'=>'04337792','created_at'=>Carbon::now()->format('Y-m-d H:i:s'),'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')),
            array('tennhaxuatban'=>'IPM','logo'=>'ipm__74608.jpg','diachi'=>'số 23 thị trấn Mỹ Hào-Hưng Yên','email'=>'ipm_book'.'@gmai.com','fax'=>'04337792','created_at'=>Carbon::now()->format('Y-m-d H:i:s'),'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')),
            array('tennhaxuatban'=>'Lantabra','logo'=>'lantabra__40646.jpg','diachi'=>'số 23 thị trấn Mỹ Hào-Hưng Yên','email'=>'lantabra'.'@gmai.com','fax'=>'04337792','created_at'=>Carbon::now()->format('Y-m-d H:i:s'),'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')),
            array('tennhaxuatban'=>'Limbooks','logo'=>'limbooks__45149.jpg','diachi'=>'số 23 thị trấn Mỹ Hào-Hưng Yên','email'=>'limbooks'.'@gmai.com','fax'=>'04337792','created_at'=>Carbon::now()->format('Y-m-d H:i:s'),'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')),
            array('tennhaxuatban'=>'Long Minh','logo'=>'longminhbooks__48154.jpg','diachi'=>'số 23 thị trấn Mỹ Hào-Hưng Yên','email'=>'longminhbooks'.'@gmai.com','fax'=>'04337792','created_at'=>Carbon::now()->format('Y-m-d H:i:s'),'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')),
            array('tennhaxuatban'=>'Minh Châu Books','logo'=>'minh-chau__76192.jpg','diachi'=>'số 23 thị trấn Mỹ Hào-Hưng Yên','email'=>'minhchau'.'@gmai.com','fax'=>'04337792','created_at'=>Carbon::now()->format('Y-m-d H:i:s'),'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')),
            array('tennhaxuatban'=>'Minh Long','logo'=>'minh-long__77539.jpg','diachi'=>'số 23 thị trấn Mỹ Hào-Hưng Yên','email'=>'minhlong'.'@gmai.com','fax'=>'04337792','created_at'=>Carbon::now()->format('Y-m-d H:i:s'),'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')),
            array('tennhaxuatban'=>'Thái Hà','logo'=>'thai-ha__24637.jpg','diachi'=>'số 23 thị trấn Mỹ Hào-Hưng Yên','email'=>'thaihabooks'.'@gmai.com','fax'=>'04337792','created_at'=>Carbon::now()->format('Y-m-d H:i:s'),'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')),
            array('tennhaxuatban'=>'Minh Thắng','logo'=>'minh-thang__91108.jpg','diachi'=>'số 23 thị trấn Mỹ Hào-Hưng Yên','email'=>'minhthang'.'@gmai.com','fax'=>'04337792','created_at'=>Carbon::now()->format('Y-m-d H:i:s'),'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')),
            array('tennhaxuatban'=>'Newstarbooks','logo'=>'newstarbook__33512.jpg','diachi'=>'số 23 thị trấn Mỹ Hào-Hưng Yên','email'=>'newstarbooks'.'@gmai.com','fax'=>'04337792','created_at'=>Carbon::now()->format('Y-m-d H:i:s'),'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')),
            array('tennhaxuatban'=>'Ngòi Bút Việt','logo'=>'noimage.jpg','diachi'=>'số 23 thị trấn Mỹ Hào-Hưng Yên','email'=>'Ngoibutviet'.'@gmai.com','fax'=>'04337792','created_at'=>Carbon::now()->format('Y-m-d H:i:s'),'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')),
            array('tennhaxuatban'=>'Người Trẻ Việt','logo'=>'nguoi-tre-viet__42925.jpg','diachi'=>'số 23 thị trấn Mỹ Hào-Hưng Yên','email'=>'NguoiTreViet'.'@gmai.com','fax'=>'04337792','created_at'=>Carbon::now()->format('Y-m-d H:i:s'),'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')),
            array('tennhaxuatban'=>'Nhã Nam','logo'=>'nha-nam__37691.jpg','diachi'=>'số 23 thị trấn Mỹ Hào-Hưng Yên','email'=>'NhaNam'.'@gmai.com','fax'=>'04337792','created_at'=>Carbon::now()->format('Y-m-d H:i:s'),'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')),
            array('tennhaxuatban'=>'NXB Kim Đồng','logo'=>'nxb-kim-dong__54705.jpg','diachi'=>'số 23 thị trấn Mỹ Hào-Hưng Yên','email'=>'NXBKimĐong'.'@gmai.com','fax'=>'04337792','created_at'=>Carbon::now()->format('Y-m-d H:i:s'),'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')),
            array('tennhaxuatban'=>'NXB Phụ Nữ','logo'=>'nxb-phu-nu__56562.jpg','diachi'=>'số 23 thị trấn Mỹ Hào-Hưng Yên','email'=>'NXBPhuNu'.'@gmai.com','fax'=>'04337792','created_at'=>Carbon::now()->format('Y-m-d H:i:s'),'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')),
            array('tennhaxuatban'=>'NXB Trẻ','logo'=>'nxb-tre__00732.jpg','diachi'=>'số 23 thị trấn Mỹ Hào-Hưng Yên','email'=>'NXBTre'.'@gmai.com','fax'=>'04337792','created_at'=>Carbon::now()->format('Y-m-d H:i:s'),'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')),
            array('tennhaxuatban'=>'NXB Tổng Hợp','logo'=>'nxb-tong-hop__37997.jpg','diachi'=>'số 23 thị trấn Mỹ Hào-Hưng Yên','email'=>'NXBTongHop'.'@gmai.com','fax'=>'04337792','created_at'=>Carbon::now()->format('Y-m-d H:i:s'),'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')),
            array('tennhaxuatban'=>'Owlbooks','logo'=>'owlbooks__29030.jpg','diachi'=>'số 23 thị trấn Mỹ Hào-Hưng Yên','email'=>'Owlbooks'.'@gmai.com','fax'=>'04337792','created_at'=>Carbon::now()->format('Y-m-d H:i:s'),'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'))

        ));
    }
}
