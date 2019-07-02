<?php
// アクセスURL：http://localhost/contact/form.php

$err_msg1='';
$err_msg2='';

$family_name = (isset($_POST['family_name'])===true) ? $_POST['family_name']:'';
$first_name = (isset($_POST['first_name'])===true) ? $_POST['first_name']:'';

if(isset($_POST['send'])===true){
    if($family_name==='') $err_msg1='苗字を入力してください。';
    if($first_name==='') $err_msg2='名前を入力してください';

    if($err_msg1 ==='' && $err_msg2===''){
        echo 'mail send !<br>';
        exit('this task stop!');
    }
}
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<title>問い合わせフォーム</title>
</head>
<body>
    <form method="post" aotion="">
        苗字：<input type="text" name="family_name" value="<?php echo $family_name; ?>"/>
        <?php echo $err_msg1;?><br>
        名前：<input type="text" name="first_name" value="<?php echo $first_name; ?>"/>
        <?php echo $err_msg2;?><br>

        <input type="submit" name="send" value="クリック"/>
    </form>
</body>
</html>
