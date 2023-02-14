<?php
    namespace App;
    class Cart{
        public $products = null; //Danh sách sản phẩm 
        public $totalQuantity = 0; //Tổng số lượng của 1 sản phẩm trong giỏ
        public $totalPrice = 0; //$totalQuantity*price 1sanr phẩm
        public function __construct($cart) //$cart là 1 giỏ hàng
        {
            if($cart){
                $this->products = $cart->products;
            }
        }
        public function AddCart($product, $id){
            $newproduct = ['product'=>$product, 'price'=>$product->price, 'quantity'=>0];
            if($this->products){ //Nếu giỏ hàng đã có sản phẩm đó rồi ==> Mảng products != null
                if(array_key_exists($id, $this->products)){
                    //Danh sách sản phẩm trong giỏ hàng đã tồn tại 1 sản phẩm có mã là $id
                    //==> Lấy sản phẩm trong giỏ hàng ra để tăng số lượng lên 1
                    $newproduct = $this->products[$id];
                }
                $newproduct['quantity']+=1; //Tăng số lượng sản phẩm lên 1
                //Số tiền mới = Số lượng mới * Giá tiền sản phẩm đó
                $newproduct['price'] = $product->price * $newproduct['quantity'];
                $this->products[$id]=$newproduct;
            }
        }
    }
?>