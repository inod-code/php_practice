<?php
// アクセスURL：http://localhost/contact/if.php
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<title>if文</title>
</head>
<body>

<?php
echo 'イノデー';
echo '<br>';
echo 'inod';
echo '<br>';

$x='10';

// ==大体同じ
// ===ちゃんと（変数の型が）同じ
echo '<br>';

$id ='';
if($id===''){
    echo 'empty';
}else{
    echo 'not empty';
}
echo '<br>';

if($x==='10'){
    echo '10';
}else{
    echo 'not 10';
}
echo '<br><br>';

// 下記を変更すると条件が変わる
$my_score = 90; //数字

if($my_score>='80'){
    echo '優';
}elseif($my_score>='60'){
    echo '良';
}elseif($my_score>='40'){
    echo '可';
}else{
    echo '不可';
}
echo '<br>';

$a=10;
$c=7;

// &&(アンパサンド)→両方とも一致(AND条件)
// ||(バーティカルバー/ライン、縦線)→片方満たせばOK（OR条件）
if ($a===10 || $c===8){
    echo 'OK';
}else{
    echo 'NG';
}
echo '<br>';

// !==(!=)否定
// $a === '' ←空白、未入力
$a = '1';
if(empty($a) === true){
    echo '空(です）';
}
echo '<br>';
if($a !== ''){
    echo '値が入っています。';
} else {
    echo '空白です';
}
?>
</body>
</html>