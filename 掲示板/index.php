<head>
		<title>りんの物置場</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="/assets/css/main.css" />
		<link rel="stylesheet" href="style.css" />
		<noscript><link rel="stylesheet" href="/assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header" class="alt">
						<a href="/index.html" class="logo"><strong>RN</strong> <span>りんの物置場</span></a>
						<nav>
							<a href="#menu">メニュー</a>
						</nav>
					</header>
			</div>

					<nav id="menu">
						<ul class="links">
							<li><a href="/index.html">ホーム</a></li>
							<li><a href="/youtube">Youtube DL</a></li>
							<li><a href="/ダウンロードリンク作成">ダウンロードリンク作成</a></li>
							<li><a href="/掲示板">掲示板</a></li>
						</ul>
					</nav>


		<!-- Scripts -->
			<script src="/assets/js/jquery.min.js"></script>
			<script src="/assets/js/jquery.scrolly.min.js"></script>
			<script src="/assets/js/jquery.scrollex.min.js"></script>
			<script src="/assets/js/browser.min.js"></script>
			<script src="/assets/js/breakpoints.min.js"></script>
			<script src="/assets/js/util.js"></script>
			<script src="/assets/js/main.js"></script>
<div class="main">

<h1>掲示板</h1>

<form method="POST" action="<?php print($_SERVER['PHP_SELF']) ?>">
<p>ファイルの名前</p>
<input type="text" name="personal_name"><br><br>
<p>内容</p>
<textarea name="contents" rows="8" cols="40">
</textarea><br><br>
<input type="submit" name="btn1" value="作成">
</form>

<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    writeData();
}

readData();

function readData(){
    $keijban_file = './date.txt';

    $fp = fopen($keijban_file, 'rb');

    if ($fp){
        if (flock($fp, LOCK_SH)){
            while (!feof($fp)) {
                $buffer = fgets($fp);
                print($buffer);
            }

            flock($fp, LOCK_UN);
        }else{
            print('ファイルロックに失敗しました');
        }
    }

    fclose($fp);
}

function writeData(){
    $personal_name = $_POST['personal_name'];
    $contents = $_POST['contents'];
    $contents = nl2br($contents);

    $data = "<hr>";
    $data = $data."<p>掲示板の名前:".$personal_name."</p>";
    $data = $data."<p>URL</p>";
    $data = $data."<p>http://34.83.101.94/掲示板/".$personal_name."</p>";
    $data = $data."<p>内容<br>".$contents."</p>";
    exec("cp -r ./メイン ./".$personal_name);

    $keijban_file = './date.txt';

    $fp = fopen($keijban_file, 'ab');

    if ($fp){
        if (flock($fp, LOCK_EX)){
            if (fwrite($fp,  $data) === FALSE){
                print('ファイル書き込みに失敗しました');
            }

            flock($fp, LOCK_UN);
        }else{
            print('ファイルロックに失敗しました');
        }
    }

    fclose($fp);
}

?>

<?php
 
session_start();
 
//ログイン済みかを確認
if (!isset($_SESSION['USER'])) {
    header('Location: /ログイン/index.php');
    exit;
}
	?>
</div>
</body>
</html>
