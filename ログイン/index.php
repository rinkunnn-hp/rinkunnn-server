<?php

    session_start();


    //ログイン機能
    $message = '';
    if(isset($_POST['login'])){
        if ($_POST['email'] == 'kagakubu@kagakubu.com' && $_POST['password'] == 'okafu'){ // ③

            $_SESSION["USER"] = '岡大附属中学校科学部';
            header("Location: top.php");
            exit;
        }
        if ($_POST['email'] == 'rinkun2078@gmail.com' && $_POST['password'] == 'rinkun-test'){
            $_SESSION["USER"] = 'オーナー';
            header("Location: オーナー.php");
            exit;
        }
        if ($_POST['email'] == 'kagakubu@gizyutu.com' && $_POST['password'] == 'password'){
            $_SESSION["USER"] = '安井先生';
            header("Location: 安井先生.php");
            exit;
        }
        if ($_POST['email'] == 'kagakubu@gizyutu.com' && $_POST['password'] == 'password'){
            $_SESSION["USER"] = '大森';
            header("Location: 大森.php");
            exit;
        }
       else {
            // ⑤
            $message = 'メールアドレスかパスワードが間違っています。';
 }
    }

?>

<!DOCTYPE html>
<html>
<head>
    <title>ログイン機能</title>
</head>

<body>
<h1>ログイン機能</h1>
<p style="color: red"><?php echo $message ?></p>
<form method="post" action="index.php">
    <label for="email">メールアドレス</label>
    <input id="email" type="email" name="email">
    <br>
    <label for="password">パスワード</label>
    <input id="password" type="password" name="password">
    <br>
    <input type="submit" name="login" value="ログイン">
</form>

</body>
</html>
