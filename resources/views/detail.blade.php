@extends('layouts.userlayout')
@section("main")
<br>
<h2 class="text-center">Chi Tiết Sản Phẩm</h2>
<div>

    <div class="col-4">
        <img class="img-thumbnail" src="{{asset('uploads/'.$ds->picture)}}" alt="">
    </div>
    <div class="col-4">
        <div>{{$ds->productname}}</div>
        <div>{{$ds->catename}}</div>
        <div>{{number_format($ds->price,0)}}</div>
        <div><a href="{{url('gio-hang/'.$ds->productid.'.html')}}">Thêm vào giỏ hàng</a></div>
    </div>

</div>
@endsection