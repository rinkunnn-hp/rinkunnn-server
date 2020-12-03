
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
<h2>使い方は聞いてね</h2><br>
<a href="./VSCode-win32-ia32-1.49.3.zip">32bit</a><br>
<a href="./VSCode-win32-x64-1.49.3.zip">64bit</a>
<p><?php echo $_SESSION['USER'] ?>さんでログイン中</p>
<br>
<form method="post" action="top.php">
    <input type="submit" name="logout" value="ログアウト">
</form>
 
</body>
</html>