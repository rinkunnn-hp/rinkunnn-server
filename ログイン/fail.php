サンプルコード
<form enctype="multipart/form-data"  action="./fail.php" method="POST">
  <input type="hidden" name="name" value="value" />
  アップロード: <input name="userfile" type="file" />
  <input type="submit" value="ファイル送信" />
</form>

<?php 
  $uploaddir = '/var/www/html/gizyutu';
  $upload = $uploaddir . basename($_FILES['userfile']['name']);
  move_uploaded_file($_FILES['userfile']['tmp'], $upload)
?>