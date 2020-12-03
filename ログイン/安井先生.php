<?php

session_start();

//ログイン済みかを確認
if (!isset($_SESSION['USER'])) {
    header('Location: index.php');
    exit;
}

//ログアウト機能
if(isset($_POST['logout'])){
    
    $_SESSION = [];
    session_destroy();

    header('Location: index.php');
    exit;
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>トップ画面</title>
</head>

<body>
<h1>トップ画面</h1>
<p><?php echo $_SESSION['USER'] ?>でログイン中</p>
<br>
<a href="./2020部内ロボコン計画書.docx">ロボコン計画書</a>
<br>
<form method="post" action="安井先生.php">
    <input type="submit" name="logout" value="ログアウト">
</form>
