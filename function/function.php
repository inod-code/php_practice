<?php
// アクセスURL：http://localhost/function/function.php

define('TAX',1.08);


say_hello('inoue');
say_hello('daisuke');

say_hello2();
say_hello2('tanaka');

say_hello3('naho',31);



function say_hello($name){
    echo 'hi '.$name.'<br><br>';
}

function say_hello2($name='hoge'){
    echo 'hi2 '.$name.'<br><br>';
}

function say_hello3($name,$age){
    echo 'hi2 '.$name.':age '.$age.'<br><br>';
}



$price=1000;
echo '税抜:'.$price.'<br>';

$price2=calc($price);
echo '税込:'.$price2;
echo '<br>';
echo $price.'←関数を通した後';
echo '<br>';

function calc($price){
    $price = $price * TAX;
    return $price;
}