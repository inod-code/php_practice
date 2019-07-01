<?php
 // アクセスURL：http://localhost/board/while_foreach_for.php
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<title>ループ処理</title>
</head>
<body>

<?php
// 繰り返し処理：whileの場合
$i=1;
while($i<=10){
    echo $i;
    $i++;
    // インクリメント
}
echo '<br><br>';

for($i=1;$i<=10;$i++){
    echo $i.'<br>';
}
echo '<br><br>';

$arr = [
    'inoue',
    'daisuke',
    'tokyo',
    'PHP'
];

//echo $arr[0];


echo '**********************<br>';
$num = count($arr);
for ($i=0;$i<$num;$i++){
    echo $arr[$i].'<br>';
}
echo '<br><br>';

// 下記で一気に展開できる
foreach ($arr as $key => $value){
    echo $key;
    echo $value . '<br>';
}
echo '<br><br>';

$label_arr = [
    'family_name' => 'inoue',
    'first_name' => 'daiuske',
    'perf' => 'tokyo',
    'language' => 'PHP'
];

foreach ($label_arr as $label => $data){
    echo $label.' : ';
    echo $data . '<br>';
}
echo '<br><br>';

$excel_arr = [
    [
        'family_name' => 'inoue',
        'first_name' => 'daiuske',
        'perf' => 'tokyo',
        'age' => '32',
        'language' => 'PHP'
    ],
    [
        'family_name' => 'nomura',
        'first_name' => 'mamoru',
        'perf' => 'fukuoka',
        'age' => '11',
        'language' => 'Java'       
    ],
    [
        'family_name' => 'sato',
        'first_name' => 'shigeru',
        'perf' => 'oosaka',
        'age' => '25',
        'language' => 'C'       
    ]
];

foreach($excel_arr as $no => $member_data){
    echo 'No:'.$no .'<br>';
    echo 'family_name：'.$member_data['family_name'].'<br>';
    echo 'first_name：'.$member_data['first_name'].'<br>';
    echo 'perf：'.$member_data['perf'].'<br>';
    echo 'age'.$member_data['age'].'<br>';
    echo 'language'.$member_data['language'].'<br>';
    echo '<br><br>';
}

$j=1;
$flg = true;
while ($flg===true){
    if($j===10)
        $flg=false;
    echo $j;
    $j++;
}
echo '<br><br>';


//ファイルポインタ
$fp = fopen('sample.txt','r');
$flg=true;
while($flg===true){
    $res=fgets($fp);
    if($res===false)
        $flg=false;
    echo $res.'<br>';
}
fclose($fp);
echo '<br><br>';

foreach($excel_arr as $member_data){
    if($member_data['age']>=30){
        echo $member_data['family_name'].' 30代<br>';
    }elseif($member_data['age']>=20){
        echo $member_data['family_name'].' 20代<br>';
    }else{
        echo $member_data['family_name'].' 20代と30代以外<br>';
    }
}

echo '<table border="1px">';
echo '<tr>';
echo '<td>family_name</td>';
echo '<td>first_name</td>';
echo '<td>perf</td>';
echo '<td>age</td>';
echo '<td>language</td>';
echo '</tr>';

foreach($excel_arr as $member){
    echo '<tr>';
    echo '<td>'.$member['family_name'].'</td>';
    echo '<td>'.$member['first_name'].'</td>';
    echo '<td>'.$member['perf'].'</td>';
    echo '<td>'.$member['age'].'</td>';
    echo '<td>'.$member['language'].'</td>';
    echo '</tr>';
}
echo '</table>';
?>

</body>
</html>