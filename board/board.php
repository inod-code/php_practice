<?php
 // アクセスURL：http://localhost/board/board.php

$data='';
$fp=fopen('data.txt','r');

$flg=true;
$count=0;

while($flg===true){
    $res = fgets($fp);
    if($res===false) $flg=false;
    $data .= $res;
    $count++;
    if($count % 2 === 0) $data .= '<br>';
}

fclose($fp);

if(isset($_POST['send'])===true){
    $name=$_POST['name'];
    $comment=$_POST['comment'];

    if($name !== '' && $comment !== ''){
        $fp = fopen('data.txt','a'); //aは追加記載
        if(flock($fp,LOCK_EX)===true){
            fwrite($fp,$name."\n".$comment."\n");
            flock($fp,LOCK_UN);
        }
        fclose($fp);
    }else{
        echo '名前、またはコメントが記入されていません';
    }
}
?>

<html>
    <head>
        <meta http-equiv="Content-Type" content="txt/html;charset=utf-8" />
        <title>掲示板</title>
    </head>
    <body>
        <form method="post" action="">
            名前
            <input type="text" name="name" value=""/>
            コメント
            <textarea name="comment" rows="8" cols="30"></textarea>
            <input type="submit" name="send" value="書き込む"/>
        </form>

        <!-- ここに、書き込まれたデータを表示する -->
        <?php echo $data;?>
    </body>
</html>