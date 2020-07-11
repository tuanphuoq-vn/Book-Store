@extends('page.danhmucsanpham.danhmucsach_mater')
@section('title')
Tìm kiếm sản phẩm
@endsection
@section('tendanhmuc')
Tìm kiếm sản phẩm với từ khóa:"{{ $key }}"
@endsection
@section('danhmuc_tieude')
@if(count($sach)<1)
	{{ $error }}
@else
Tìm Kiếm Sản Phẩm Với Từ Khóa: "{{ $key }}" Tìm Thấy {{ count($sach) }} Kết Quả
@endif
@endsection
@section('loaisach')
	@if(count($sach)>=1)
	@foreach($ls as $ls_sach)
		@foreach($loaisach as $loaisachs)
		@if($ls_sach->id==$loaisachs['maloai'])
		<li><a href="{{ route('loaisach/',$loaisachs['maloai']) }}" title="{{$ls_sach['tenloai'] }}">{{ $ls_sach['tenloai'] }} ({{ $loaisachs['sl'] }})</a></li>
		@endif
		@endforeach
	@endforeach
	@endif
@endsection
@section('tacgia')
	@if(count($sach)>=1)
	@foreach($tacgia as $sach_danhmuc_id_tacgia)
        <a href="" title="Nhiều tác giả">
		<li  class="checkbox">
		<i class="fa fa-square-o"></i>{{ $sach_danhmuc_id_tacgia['tacgia'] }}( {{$sach_danhmuc_id_tacgia['sl']}} )<span class="count"></span>
		<span class="delete"></span>
		</li>
		</a>
    @endforeach
	@endif
@endsection
@section('sanpham')
@foreach($sach as $sach_danhmuc_id)
	<div class="product">
		<div class="image">
			<div style="position: relative;">
			<a href="{{ route('chitietsanpham',$sach_danhmuc_id->id) }}"><img src="{{ asset('/public/image/anhsanpham').'/'.$sach_danhmuc_id->anhbia}}" alt="" class=""></a>
			@if($sach_danhmuc_id->khuyenmai>0)
			<span class="saleprice" style="background:url({{ url('public/image/saleprice.png') }}) no-repeat;">{{ $sach_danhmuc_id->khuyenmai }}%</span>
			@endif
			</div>
			<a href="{{ route('chitietsanpham',$sach_danhmuc_id->id) }}"><div class="product_name" title="{{ $sach_danhmuc_id->tensach }}">{{ $sach_danhmuc_id->tensach }}</div></a>
			<div class="product_composer">{{ $sach_danhmuc_id->tacgia }}</div>
			<div class="prices">{{ number_format($sach_danhmuc_id->dongia-$sach_danhmuc_id->dongia*$sach_danhmuc_id->khuyenmai/100,0,",",".")}}₫</div>
			<div class="rootprices">{{ number_format($sach_danhmuc_id->dongia,0,",",".") }}₫</div>
			<div class="rating">
			<span class="fa fa-star checked"></span>
			<span class="fa fa-star checked"></span>
			<span class="fa fa-star checked"></span>
			<span class="fa fa-star"></span>
			<span class="fa fa-star"></span>
			<span class="comment">(30 nhận xét)</span></div>
		</div>
	</div>
	@endforeach
@endsection
@section('nhaxuatban')
@if(count($sach)>0)
@foreach($nxbs as $sach_nxb_id)
    @foreach($nxb as $nhaxuatban)
    @if($nhaxuatban->id==$sach_nxb_id['nxb'])
    <a href="/danh-muc/1/sach-kinh-te.html?field2=4" title="Thái Hà">
	<li  class="checkbox">
		<i class="fa fa-square-o"> {{ $nhaxuatban->tennhaxuatban }}</i> <span class="count">({{ $sach_nxb_id['sl'] }})</span>
		<span class="delete"></span>
	</li>
	</a>
    @else
    @endif
    @endforeach
@endforeach
@else
@endif
@endsection

