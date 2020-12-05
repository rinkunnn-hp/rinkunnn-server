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
					<li><a href="/お知らせ">お知らせ</a></li>
					<li><a href="/web">自作便利サイト一覧</a></li>
					<li><a href="/bot">自作DiscordのBOT</a></li>
					<li><a href="/MC鯖参加受付">りん鯖！！</a></li>
					<li><a href="/MCPE配布ワールド">マインクラフト統合版の配布ワールド</a></li>
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
        if ($_POST['email'] == 'kagakubu@kagakubu.com' && $_POST['password'] == 'okafu'){ // ③

            $_SESSION["USER"] = '岡大附属中学校科学部';
            header("Location: top.php");
            exit;
        }
        if ($_POST['email'] == 'rinkun2078@gmail.com' && $_POST['password'] == 'zd471605'){
            $_SESSION["USER"] = 'オーナー';
            header("Location: /コミット.php");
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
</div>
</body>
</html>