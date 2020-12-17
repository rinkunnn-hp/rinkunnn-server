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
<?php

    session_start();


    //ログイン機能
    $message = '';
    if(isset($_POST['login'])){
        if ($_POST['email'] == 'reiyakun.god' && $_POST['password'] == 'help'){ // ③

            $_SESSION["USER"] = 'レイヤ様の招待';
            header("Location: /");
            exit;
        }
        if ($_POST['email'] == 'zyoukun.god' && $_POST['password'] == 'help-help'){
            $_SESSION["USER"] = 'じょうくんの招待';
            header("Location: /");
            exit;
        }
        if ($_POST['email'] == 'morimori.god' && $_POST['password'] == 'lol'){
            $_SESSION["USER"] = '森永の招待';
            header("Location: /");
            exit;
        }
        if ($_POST['email'] == 'rinkunnn.server' && $_POST['password'] == '0914-2078'){
            $_SESSION["USER"] = 'オーナー';
            header("Location: /");
            exit;
	}
	if ($_POST['email'] == 'rinkunnn.god' && $_POST['password'] == '5637-4758'){
            $_SESSION["USER"] = 'ビジター';
            header("Location: /");
            exit;
        }
       else {
            // ⑤
            $message = 'アドレスかパスワードが間違っています。乙。';
 }
    }

?>
<h1>ログイン機能</h1>
<p style="color: red"><?php echo $message ?></p>
<form method="post" action="index.php">
    <label for="email">アドレス</label>
    <input id="email" type="text" name="email">
    <br>
    <label for="password">パスワード</label>
    <input id="password" type="password" name="password">
    <br>
    <input type="submit" name="login" value="ログイン">
</form>
</div>
</body>
</html>
