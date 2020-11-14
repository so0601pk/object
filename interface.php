<?php

ini_set("display_errors",1);
error_reporting(E_ALL);

//抽象クラス　//設定するメソッドを強制
interface ProductInterface{
    //変数　関数
    // public function echoProduct(){
    //     echo '親クラスです';
    // }

    //全てメソッドの内容しか書けないのがインターフェース

    public function getProduct();
}

//抽象クラス　//設定するメソッドを強制
interface NewsInterface{
    //変数　関数
    // public function echoProduct(){
    //     echo '親クラスです';
    // }

    //全てメソッドの内容しか書けないのがインターフェース

    public function getNews();
}

//具象クラス、親クラス（基底クラス・スーパークラス）
class BaseProduct{
    //変数　関数
    public function echoProduct(){
        echo '親クラスです';
    }

    //オーバーライド（上書き）
    public function getProduct(){
        echo '親の関数です';
    }
}

//小クラス（派生クラス・サブクラス） 親クラスの変数や関数が使えるようになる
//インターフェースは複数継承できる
class Product implements ProductInterface, NewsInterface{
    //アクセス修飾子,private（外からアクセス出来ない）, protected（自分と継承したクラス）, piblic(公開)
    //変数
    //クラス内で使える変数
    private $product = [];

    //関数
    //クラスを呼び出した初回の関数
    //$this=このクラスという意味、product=private $product = [];
    function __construct($product){
        $this->product = $product;
    }

    //$productを表示する
    //抽象くらすで書いたメソッドは子クラスでも記載する必要がある
    public function getProduct(){
        echo $this->product;
    }

    //$productに引き数で入ってくる物を追加する
    public function addProduct($item){
        $this->product .= $item;
    }

    public function getNews(){
        echo 'ニュースです';
    }

    public static function getStaticProduct($str){
        echo $str;
    }

}

//インスタンス化している
$instance = new Product('テスト');
var_dump($instance);

$instance->getProduct();
echo '<br>';

//親クラスのメソッド
// $instance->echoProduct();
// echo '<br>';

$instance->addProduct('追加分');
echo '<br>';

$instance->getProduct();
echo '<br>';

$instance->getNews();
echo '<br>';

//静的（static）クラス名::関数名
Product::getStaticProduct('静的');
echo '<br>';