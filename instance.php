<?php

class Product{

    //変数
    private $product = [];

    //関数

    function _＿coonstruct($product){
        $this->product = $product;
    }

    public function getProduct(){
        echo $this->product;
    }

    public function addProduct($item){
        $this->product .=$item;
    }

    public static function getStaticProduct($str){
        echo $str;
    }

}

$instance = new Product('テスト');

$instance->getProduct();
echo '<br>';

$instance->addProduct('追加分');
echo '<br>';

$instance->getProduct();
echo '<br>';

Product::getStaticProduct('静的');
echo '<br>';