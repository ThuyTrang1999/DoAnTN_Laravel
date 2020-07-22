<?php

namespace App;

class Cart
{
    public $sanpham = null;
    public $TongSL = 0;
    public $TongTien= 0;

    public function __construct($cart){
    	if($cart){
    		$this->sanpham = $cart->sanpham;
            $this->TongSL = $cart->TongSL;
            $this->TongTien = $cart->TongTien;
            
    	}
    }

    public function AddCart($products, $id){

    	$newSanpham = ['quanty'=>0,'price'=>$products->price,'ttsanpham'=>$products];
    	if($this->sanpham){
    		if(array_key_exists($id, $this->sanpham)){
    			$newSanpham = $this->sanpham[$id];
    		}
    	}
        $newSanpham['quanty']++;
        $newSanpham['price']= $newSanpham['quanty'] ;
        
        $this->sanpham[$id] = $newSanpham;
        $this->TongSL++;
        $this->TongTien += $newSanpham['price'];

       
       
    }
}
