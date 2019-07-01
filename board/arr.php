<?php
 // アクセスURL：http://localhost/board/arr.php

 $var=1;
 $var2='1';
 $name='井上';
 var_dump($var);
 var_dump($var2);
 var_dump($name);

 echo '<br>';
// 配列：arrayで定義、値はカンマで区切る
$arr=array(
    'inoue',
    'daisuke',
    'tokyo',
    'PHP'
);
var_dump($arr);
echo '<br>';
echo '<br>';

echo $arr[0];
echo '<br>';
echo '<br>';

echo $arr[1];
echo '<br>';
echo '<br>';

$arr[4] = 'man';
var_dump($arr);
echo '<br>';
echo '<br>';

$arr[2]='tokyo';
var_dump($arr);
echo '<br>';
echo '<br>';

$label_arr=array(
    'family_name'=>'inoue',
    'first_name'=>'daisuke',
    'pref'=>'tokyo',
    'language'=>'PHP'
);

var_dump($label_arr);
echo '<br>';
echo '<br>';

echo $label_arr['language'];
echo '<br>';
echo '<br>';

$label_arr['hobby']='golf';
var_dump($label_arr);
echo '<br>';
echo '<br>';

$excel_arr=array(
    array(
        'family_name'=>'inoue',
        'first_name'=>'daisuke',
        'perf'=>'tokyo',
        'language'=>'PHP'
    ),
    array(
        'family_name'=>'yamada',
        'first_name'=>'tarou',
        'perf'=>'chiba',
        'language'=>'C'
    ),
    array(
        'family_name'=>'sato',
        'first_name'=>'hanako',
        'perf'=>'kanagawa',
        'language'=>'Java'
    )
);

var_dump($excel_arr);
echo '<br>';
echo '<br>';

var_dump($excel_arr[1]);
echo '<br>';
echo '<br>';

echo $excel_arr[0]['language'];
var_dump($excel_arr);
echo '<br>';
echo '<br>';

echo $excel_arr[1]['perf'];
echo '<br>';
echo '<br>';

$excel_arr[1]['perf']='osaka';
var_dump($excel_arr);
echo '<br>';
echo '<br>';

$excel_arr[3]=array(
    'family_name'=> 'suzuki',
    'first_name'=>'jiro',
    'perf'=>'saitama',
    'language'=> 'Perl'
);
var_dump($excel_arr);
echo '<br>';
echo '<br>';

$arr=array(
    'family_name'=>'suzuki',
    'first_name'=>'jiro',
    'perf'=>'saitama',
    'language'=>'Perl'
);

array_push($excel_arr,$arr);
var_dump($excel_arr);

//コメント追加
