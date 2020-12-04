
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>sample</title>
</head>
<body>
<p><?php

if (is_uploaded_file($_FILES["upfile"]["tmp_name"])) {
  if (move_uploaded_file($_FILES["upfile"]["tmp_name"], "files/" . $_FILES["upfile"]["name"])) {
    echo "完成しました。<br> 保存期間はあなたのファイル名と同じファイル名のファイルがアップロードされるまでです。<br><a href=./files/" . $_FILES["upfile"]["name"] . " download>あなたのダウンロードリンク</a>";
  } else {
    echo "ファイルをアップロードできません。";
  }
} else {
  echo "ファイルが選択されていません。";
}

?></p>
</body>
</html>
