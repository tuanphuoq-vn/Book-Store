<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function() {
    return redirect()->Route('home');
});
Route::get('/home','homecontroller@gethome')->name('home');
Route::get('/admin/loaisach','admincontroller@getloaisach')->name('admin/loaisach');
Route::get('/danhmuc/{id}','homecontroller@getsachkinhte')->name('danhmuc/');
Route::get('/danhmuc/{id}/{tacgia}','homecontroller@danhmuc_tacgia')->name('danhmuc/tacgia');


Route::get('loaisach/{id}','homecontroller@getsachmoi')->name('loaisach/');
Route::get('sanpham/{id}','homecontroller@chitietsanpham')->name('chitietsanpham');
Route::get('/kh_login','admincontroller@getlogin')->name('kh_login');
Route::get('/kh_logout','admincontroller@kh_logout')->name('kh_logout');
Route::get('add-to-card/{id}',[
    'as'=>'themvaogiohang',
    'uses'=>'homecontroller@getAddToCart'
]);
Route::get('delete-cart/{id}',[
    'as'=>'xoagiohang',
    'uses'=>'homecontroller@getDelItemCart'
]);
Route::get('update-cart/{id}-{qty}',[
    'as'=>'capnhatgiohang',
    'uses'=>'homecontroller@getUpdateItemCart'
]);
Route::get('dat-hang/',[
    'as'=>'getdathang',
    'uses'=>'homecontroller@getCheckout'
]);
Route::post('dat-hang/',[
    'as'=>'postdathang',
    'uses'=>'qlidonhangcontroller@postCheckout'
]);
Route::post('/timkiem/',[
    'as'=>'timkiem',
    'uses'=>'homecontroller@timkiem'
]);
Route::get('/searching/',[
    'as'=>'timkiem_key',
    'uses'=>'homecontroller@timkiem_key'
]);
Route::group(['prefix' => 'admin','as'=>'admins'], function() {
   	Route::get('/login','admincontroller@getlogin')->name('getlogin');
    Route::post('/admin','admincontroller@postlogin')->name('admin');
    Route::get('/qlkhachhang','admincontroller@qlkhachhang')->name('qlkhachhang');
    Route::get('/qlkhachhang/addusers','admincontroller@getkhachhang')->name('qlkhachhang/addusers');
	Route::post('qlkhachhang/postkh','admincontroller@postkhachhang')->name('qlkhachhang/postkh');
	Route::post('qlkhachhang/editkh','admincontroller@editkhachhang')->name('qlkhachhang/editkh');
	Route::post('qlkhachhang/deletekh','admincontroller@deletekhachhang')->name('qlkhachhang/deletekh');
    Route::get('/qlsach','admincontroller@qlsach')->name('qlsach');
    Route::post('/qlsach/insert','admincontroller@insertdatas')->name('qlsach/insert');
    Route::post('qlsach/update','admincontroller@sach_update')->name('qlsach/update');
    Route::post('/qlsach/delete/','admincontroller@qlsach_delete')->name('qlsach/delete');
    Route::get('/qldanhmuc','qldanhmuccontroller@qldanhmuc')->name('qldanhmuc');
    Route::post('/qldanhmuc/insert','qldanhmuccontroller@qldanhmuc_insert')->name('qldanhmuc/insert');
    Route::post('/qldanhmuc/update','qldanhmuccontroller@qldanhmuc_update')->name('qldanhmuc/update');
    Route::post('/qldanhmuc/delete/','qldanhmuccontroller@qldanhmuc_delete')->name('qldanhmuc/delete');
    Route::get('/qldondathang','qlidonhangcontroller@qldondathang')->name('qldondathang');
    Route::post('/qldondathangs/delete','qlidonhangcontroller@qldonhang_delete')->name('delete_donhang');
    Route::get('/qldondathang/{id_donhang}','qlidonhangcontroller@qlchitietdonhang')->name('chitietdonhang');
    Route::post('/qldondathang/delete','qlidonhangcontroller@qlchitietdonhang_delete')->name('chitietdonhang/delete');
    Route::get('/qlchitietsach','admincontroller@qlchitietsach')->name('qlchitietsach');
    Route::get('/qlchitietsach/insert','admincontroller@qlchitietsach_insert')->name('qlchitietsach/insert');
    Route::post('/qlchitietsach/insert/post','admincontroller@qlchitietsach_insert_post')->name('qlchitietsach/insert/post');

});
Route::get('reset-session', function() {
    session()->forget('cart');
    session()->flush();
});
    
// Route::get('/editmk',function(){
//             $userData = \App\User::find(1);
//             $userData->password = bcrypt('admin');       
//             $userData->save();
//             return json_encode(array('statusCode'=>200));
// });
// Route::get('/dropforeignkey', function() {
// 	Schema::table('sach', function ($table) {
//    $table->dropForeign('sach_matacgia_foreign');
//    	});
//     echo "success";
// });
// Route::get('/insertid', function() {
	
//     DB::table('sach')->insert(array(
//     array(
//     'maloai' => 1, 
//     'manhaxuatban' => rand(1,31),
//     'tensach' => 'Loạn Thế Vi Vương – Trọn Bộ 4 Tập (Tặng Kèm Poster, Số Lượng Có Hạn)',//
//     'tacgia' => 'Cố Tuyết Nhu',//
//     'soluong' => 30,
// 	'dongia' => 462000,//
// 	'luotxem' => 0,
// 	'luotmua' => 0,
// 	'khuyenmai' => rand(10,25),
// 	'anhbia' => 'loan-the-vi-vuong-1__92808_thum_135'.'.jpg',//
// 	'tap' => 0,//
// 	'sotap' => 4),//
// 	array(
//     'maloai' => 1, 
//     'manhaxuatban' => rand(1,31),
//     'tensach' => 'VĂN HÀO LƯU LẠC',//
//     'tacgia' => 'Asagiri Kafka - Harukawa Sango',//
//     'soluong' => 30,
// 	'dongia' => 35000,//
// 	'luotxem' => 0,
// 	'luotmua' => 0,
// 	'khuyenmai' => rand(10,25),
// 	'anhbia' => 'bia_1_van_hao_10_2__96775_thum_135'.'.jpg',//
// 	'tap' => 10,//
// 	'sotap' => 20),//
// 	array(
//     'maloai' => 1, 
//     'manhaxuatban' => rand(1,31),
//     'tensach' => 'Độc Giả Và Nhân Vật Chính Đích Thị Là Chân Tình',//
//     'tacgia' => 'Đồi',//
//     'soluong' => 30,
// 	'dongia' => 99000,//
// 	'luotxem' => 0,
// 	'luotmua' => 0,
// 	'khuyenmai' => rand(10,25),
// 	'anhbia' => 'doc-gia-tap-1-full__47007_thum'.'.jpg',//
// 	'tap' => 1,//
// 	'sotap' => 5),//
// 	array(
//     'maloai' => 1, 
//     'manhaxuatban' => rand(1,31),
//     'tensach' => 'Archimedes Thân Yêu (Trọn Bộ 2 Tập)',//
//     'tacgia' => 'Cửu Nguyệt Hi',//
//     'soluong' => 30,
// 	'dongia' => 219000,//
// 	'luotxem' => 0,
// 	'luotmua' => 0,
// 	'khuyenmai' => rand(10,25),
// 	'anhbia' => 'archimedes-than-yeu__70147_thum_135'.'.jpg',//
// 	'tap' => 0,//
// 	'sotap' => 2),//
// 	array(
//     'maloai' => 1, 
//     'manhaxuatban' => rand(1,31),
//     'tensach' => 'Quỷ Hành Thiên Hạ',//
//     'tacgia' => 'Nhĩ Nhã',//
//     'soluong' => 30,
// 	'dongia' => 190000,//
// 	'luotxem' => 0,
// 	'luotmua' => 0,
// 	'khuyenmai' => rand(10,25),
// 	'anhbia' => 'quy-hanh-thien-ha-tap-6__64425_thum_135'.'.jpg',//
// 	'tap' => 6,//
// 	'sotap' => 8),//
// 	array(
//     'maloai' => 1, 
//     'manhaxuatban' => rand(1,31),
//     'tensach' => '[ Bản thường] AMAGI CÔNG VIÊN RỰC RỠ',//
//     'tacgia' => 'Gatou shouji',//
//     'soluong' => 30,
// 	'dongia' => 130000,//
// 	'luotxem' => 0,
// 	'luotmua' => 0,
// 	'khuyenmai' => rand(10,25),
// 	'anhbia' => 'amagi-cong-vien-ruc-ro-2-cover__43670_image2_800_thum'.'.jpg',//
// 	'tap' => 2,//
// 	'sotap' => 2),//
// 	array(
//     'maloai' => 1, 
//     'manhaxuatban' => rand(1,31),
//     'tensach' => 'Túi canvas chibi SCI 4 - sát thủ phi nhân loại',//
//     'tacgia' => 'Nhĩ Nhã',//
//     'soluong' => 30,
// 	'dongia' => 154000,//
// 	'luotxem' => 0,
// 	'luotmua' => 0,
// 	'khuyenmai' => rand(10,25),
// 	'anhbia' => 'tui-sci-chibi__34828_thum_135'.'.jpg',//
// 	'tap' => 0,//
// 	'sotap' => 1),//
// 	array(
//     'maloai' => 1, 
//     'manhaxuatban' => rand(1,31),
//     'tensach' => 'Tiệm Quan Tài Số 7 (Trọn Bộ 2 Tập)',//
//     'tacgia' => 'Niệm Tiểu Duệ',//
//     'soluong' => 30,
// 	'dongia' => 219000,//
// 	'luotxem' => 0,
// 	'luotmua' => 0,
// 	'khuyenmai' => rand(10,25),
// 	'anhbia' => 'tiem-quan-tai-so-7-tap-1__72791_image2_800_thum'.'.jpg',//
// 	'tap' => 0,//
// 	'sotap' => 2),//
// 	array(
//     'maloai' => 1, 
//     'manhaxuatban' => rand(1,31),
//     'tensach' => 'SWORD ART ONLINE PROGRESSIVE 003	',//
//     'tacgia' => 'Reki Kawahara',//
//     'soluong' => 30,
// 	'dongia' => 159000,//
// 	'luotxem' => 0,
// 	'luotmua' => 0,
// 	'khuyenmai' => rand(10,25),
// 	'anhbia' => 'cover_1_sao_pro_3_2__40365_thum_135'.'.jpg',//
// 	'tap' => 0,//
// 	'sotap' => 3),//
// 	array(
//     'maloai' => 1, 
//     'manhaxuatban' => rand(1,31),
//     'tensach' => 'Vũ Điệu Của Làn Da',//
//     'tacgia' => 'Okyanmama',//
//     'soluong' => 30,
// 	'dongia' => 109000,//
// 	'luotxem' => 0,
// 	'luotmua' => 0,
// 	'khuyenmai' => rand(10,25),
// 	'anhbia' => 'vu-dieu-lan-da__77406_thum_135'.'.jpg',//
// 	'tap' => 0,//
// 	'sotap' => 1),//
// 	array(
//     'maloai' => 1, 
//     'manhaxuatban' => rand(1,31),
//     'tensach' => 'Mãi Mãi Là Bao Xa (Tái Bản 2015, Bổ Sung Ngoại Truyện Mới)',//
//     'tacgia' => 'Diệp Lạc Vô Tâm',//
//     'soluong' => 30,
// 	'dongia' => 126000,//
// 	'luotxem' => 0,
// 	'luotmua' => 0,
// 	'khuyenmai' => rand(10,25),
// 	'anhbia' => 'mai-mai-la-bao-xa__89605_thum_135'.'.jpg',//
// 	'tap' => 0,//
// 	'sotap' => 1),//
// 	array(
//     'maloai' => 1, 
//     'manhaxuatban' => rand(1,31),
//     'tensach' => 'Tháng Năm Qua',//
//     'tacgia' => 'Tĩnh Thủy Biên',//
//     'soluong' => 30,
// 	'dongia' => 125000,//
// 	'luotxem' => 0,
// 	'luotmua' => 0,
// 	'khuyenmai' => rand(10,25),
// 	'anhbia' => '_thang-nam-qua__47480_thum_135'.'.jpg',//
// 	'tap' => 0,//
// 	'sotap' => 1),//
// 	array(
//     'maloai' => 1, 
//     'manhaxuatban' => rand(1,31),
//     'tensach' => 'Anh Hùng Ca',//
//     'tacgia' => 'Lại Nhĩ',//
//     'soluong' => 30,
// 	'dongia' => 219000,//
// 	'luotxem' => 0,
// 	'luotmua' => 0,
// 	'khuyenmai' => rand(10,25),
// 	'anhbia' => 'anh-hung-ca-tap-1__03619_thum_135'.'.jpg',//
// 	'tap' => 1,//
// 	'sotap' => 10),//
// 	array(
//     'maloai' => 1, 
//     'manhaxuatban' => rand(1,31),
//     'tensach' => 'Sự Trỗi Dậy Và Suy Tàn Của Đế Chế Thứ Ba - Lịch Sử Đức Quốc Xã',//
//     'tacgia' => 'William L. Shirer',//
//     'soluong' => 30,
// 	'dongia' => 219000,//
// 	'luotxem' => 0,
// 	'luotmua' => 0,
// 	'khuyenmai' => rand(10,25),
// 	'anhbia' => 'de-che-thu-3__65097_thum_135'.'.jpg',//
// 	'tap' => 0,//
// 	'sotap' => 1),//
// 	array(
//     'maloai' => 1, 
//     'manhaxuatban' => rand(1,31),
//     'tensach' => 'Người Sống Sót',//
//     'tacgia' => 'Tần Minh',//
//     'soluong' => 30,
// 	'dongia' => 159000,//
// 	'luotxem' => 0,
// 	'luotmua' => 0,
// 	'khuyenmai' => rand(10,25),
// 	'anhbia' => 'nguoi-song-sot__26195_thum_135'.'.jpg',//
// 	'tap' => 0,//
// 	'sotap' => 1),//
// 	array(
//     'maloai' => 1, 
//     'manhaxuatban' => rand(1,31),
//     'tensach' => 'Nhóc Nicolas: Những Chuyện Chưa Kể ',//
//     'tacgia' => 'Goscinny',//
//     'soluong' => 30,
// 	'dongia' => 109000,//
// 	'luotxem' => 0,
// 	'luotmua' => 0,
// 	'khuyenmai' => rand(10,25),
// 	'anhbia' => 'nhoc-nicolas-nhung-chuyen-chua-ke-tap-3__74732_thum_135'.'.jpg',//
// 	'tap' => 0,//
// 	'sotap' => 1),//
// 	array(
//     'maloai' => 1, 
//     'manhaxuatban' => rand(1,31),
//     'tensach' => 'RE:LIFE',//
//     'tacgia' => 'YayoiSo',//
//     'soluong' => 30,
// 	'dongia' => 75000,//
// 	'luotxem' => 0,
// 	'luotmua' => 0,
// 	'khuyenmai' => rand(10,25),
// 	'anhbia' => 'relife5_biaao_thumb_2__42821_thum_135'.'.jpg',//
// 	'tap' => 5,//
// 	'sotap' => 10),//
// 	array(
//     'maloai' => 1, 
//     'manhaxuatban' => rand(1,31),
//     'tensach' => 'Blonote',//
//     'tacgia' => 'Tablo',//
//     'soluong' => 30,
// 	'dongia' => 98000,//
// 	'luotxem' => 0,
// 	'luotmua' => 0,
// 	'khuyenmai' => rand(10,25),
// 	'anhbia' => 'blonote__18658_thum_135'.'.jpg',//
// 	'tap' => 0,//
// 	'sotap' => 1),//
// 	array(
//     'maloai' => 1, 
//     'manhaxuatban' => rand(1,31),
//     'tensach' => 'BẢY NGÀY ĐẾM NGƯỢC',//
//     'tacgia' => 'Cát Bốc Lặc',//
//     'soluong' => 30,
// 	'dongia' => 119000,//
// 	'luotxem' => 0,
// 	'luotmua' => 0,
// 	'khuyenmai' => rand(10,25),
// 	'anhbia' => 'bay-ngay-dem-nguoc-bia_1_1__38490_thum_135'.'.jpg',//
// 	'tap' => 0,//
// 	'sotap' => 1),//
// 	array(
//     'maloai' => 1, 
//     'manhaxuatban' => rand(1,31),
//     'tensach' => 'Tiệm Đồ Cổ Á Xá',//
//     'tacgia' => 'Huyền Sắc',//
//     'soluong' => 30,
// 	'dongia' => 15000,//
// 	'luotxem' => 0,
// 	'luotmua' => 0,
// 	'khuyenmai' => rand(10,25),
// 	'anhbia' => '74737_11_04_19_tiem-do-co-a-xa-tap-7-truyen-tranh__10110_thum_135'.'.jpg',//
// 	'tap' => 7,//
// 	'sotap' => 10),//
// 	array(
//     'maloai' => 1, 
//     'manhaxuatban' => rand(1,31),
//     'tensach' => 'Quỷ Hành Thiên Hạ',//
//     'tacgia' => 'Nhĩ Nhã',//
//     'soluong' => 30,
// 	'dongia' => 200000,//
// 	'luotxem' => 0,
// 	'luotmua' => 0,
// 	'khuyenmai' => rand(10,25),
// 	'anhbia' => 'quy-hanh-thien-ha-tap-78__57797_thum_135'.'.jpg',//
// 	'tap' => 7,//
// 	'sotap' => 8),//
// 	array(
//     'maloai' => 1, 
//     'manhaxuatban' => rand(1,31),
//     'tensach' => 'Đừng Lãng Phí Những Ngày Đẹp Trời',//
//     'tacgia' => 'Jinie Lynk',//
//     'soluong' => 30,
// 	'dongia' => 78000,//
// 	'luotxem' => 0,
// 	'luotmua' => 0,
// 	'khuyenmai' => rand(10,25),
// 	'anhbia' => 'dung-lang-phi-nhung-ngay-dep-troi__01172_thum_135'.'.jpg',//
// 	'tap' => 0,//
// 	'sotap' => 1)//
// )
// );
//     echo "ok";
    
// });

