<?php

trait ProductTrait{
    public function getProduct(){
        echo 'プロダクト';
    }
}

trait NewsTrait{
    public function getNews(){
        echo 'ニュース';
    }
}

class Product{
    use ProductTrait;
    use NewsTrait;
    
    public function getInformation(){
        echo 'クラスです';
    }
    
    //traitからのオーバーライド（上書き）
    public function getNews(){
        echo 'クラスのニュース';
    }
}

$product = new Product();

$product->getInformation();
echo '<br>';

$product->getProduct();
echo '<br>';

$product->getNews();
echo '<br>';