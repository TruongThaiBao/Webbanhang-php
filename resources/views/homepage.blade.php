@extends('layouts.userlayout')
@section("main")
<br>
<div>
    <h2 class="text-center">Sản Phẩm Bán Chạy</h2>
    <div class="d-flex flex-row justify-content-around">
    @foreach($ds as $d)
        <div class="d-flex flex-column align-items-center col-3">
            <div><img class="img-thumbnail" src="{{asset('uploads/'.$d->picture)}}" alt=""></div>
            <div>{{$d->productname}}</div>
            <div>{{$d->catename}}</div>
            <div>{{number_format($d->price,0)}}</div>
            <div>
                <a href="{{url('chi-tiet/pro-'.$d->productid.'.html')}}">Xem chi tiết</a>
            </div>
        </div>
    @endforeach
    </div>
   
</div>
<hr>
<div>
    <h2 class="text-center">Sản Phẩm Hiện Có</h2>
</div>
@endsection