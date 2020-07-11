<?php

use Illuminate\Database\Seeder;

class khachhangtableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {	DB::table('khachhang')->insert(array(
    	array('ten' => 'Lưu Tùng Dương',
            'username' => 'luutungduong',
            'password' => bcrypt('duong1998'),
            'sdt' => '0326347291',
            'diachi' => 'Khoái Châu-Hưng Yên',
            'mail' => 'luutungduong1411@gmail.com'
        	),
        array('ten' => 'Đỗ Như Biên',
            'username' => 'donhubien',
            'password' => bcrypt('bien1998'),
            'sdt' => '0332369291',
            'diachi' => 'Khoái Châu-Hưng Yên',
            'mail' => 'donhubien@gmail.com'
   			),
        array('ten' => 'Nguyễn Tuấn Anh',
            'username' => 'nguyentuananh',
            'password' => bcrypt('tuananh1998'),
            'sdt' => '0326347292',
            'diachi' => 'Khoái Châu-Hưng Yên',
            'mail' => 'anhnguyen@gmail.com'
        	),
        array('ten' => 'Nguyễn Huy Hoài Nam',
            'username' => 'nguyenhuyhoainam',
            'password' => bcrypt('nam1998'),
            'sdt' => '0326347294',
            'diachi' => 'Vĩnh phúc',
            'mail' => 'namvp@gmail.com'
        	),
        array('ten' => 'Đỗ Đắc Hoàng',
            'username' => 'hoangvoi',
            'password' => bcrypt('hoang1998'),
            'sdt' => '0326347295',
            'diachi' => 'Khoái Châu-Hưng Yên',
            'mail' => 'hoangvoi@gmail.com'
        	),
        array('ten' => 'Hà Ngọc Anh',
            'username' => 'hangocanh',
            'password' => bcrypt('ngocanh1998'),
            'sdt' => '0326347296',
            'diachi' => 'Mỹ Hào-Hưng Yên',
            'mail' => 'hangocanh@gmail.com'
        	),
        array('ten' => 'Lê Ngọc Anh',
            'username' => 'lengocanh',
            'password' => bcrypt('ngocanh1998'),
            'sdt' => '0326347297',
            'diachi' => 'Khoái Châu-Hưng Yên',
            'mail' => 'lengocanh@gmail.com'
        	),
        array('ten' => 'Nguyễn Thị Đào',
            'username' => 'nguyenthidao',
            'password' => bcrypt('dao1998'),
            'sdt' => '0326347298',
            'diachi' => 'Văn Giang-Hưng Yên',
            'mail' => 'nguyenthidao@gmail.com'
        	),
        array('ten' => 'Trần Chí Doãn',
            'username' => 'trantridoan',
            'password' => bcrypt('doan1998'),
            'sdt' => '0326347299',
            'diachi' => 'Văn Lâm-Hưng Yên',
            'mail' => 'trantridoan@gmail.com'
        	),
        array('ten' => 'Đào Thị Duyên',
            'username' => 'daothiduyen',
            'password' => bcrypt('duyen1998'),
            'sdt' => '0326347210',
            'diachi' => 'Khoái Châu-Hưng Yên',
            'mail' => 'daothiduyen@gmail.com'),
        ));
    }
}
