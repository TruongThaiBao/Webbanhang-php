<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    //Action cho trang Index
    public function home(){
        // return "My Home Page";
        $query = DB::table("product")
        ->join('category','product.cateid','=','category.cateid')
        ->where('product.hot','=','1')
        ->select('category.catename','product.productid','product.productname','product.price','product.quantity','product.picture')
        ->take(3) //Số sản phẩm muốn lấy ra để thể hiện trên page
        ->get();

        return view("homepage")->with(['ds'=>$query]);
    }

    public function detail($pro,$id){
        $query = DB::table("product")
        ->join('category','product.cateid','=','category.cateid')
        ->where('product.productid','=',$id)
        ->select('category.catename','product.productid','product.productname','product.price','product.quantity','product.picture')
        ->first();
        return view('detail')->with(['ds'=>$query]);
    }
}
