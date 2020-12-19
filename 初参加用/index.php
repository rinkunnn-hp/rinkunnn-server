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
if(isset($_POST['discord'])) {
    header('Location: http://discord.gg/ywvSH74FEY');
    echo"test";
}
?>
		<h1>友達サーバー</h1>
	<p>友達サーバーは統合版もjava版も入れるから安心してね。<br>ルール<br>1.荒らさない<br>2.アドレスを人に教えない<br>3.サーバー内るをしない　<br>その他サーバー内や情報をネットにさらすことは禁止です

<form method="post" action="index.php">
<br><br><br><input type="submit" name="discord" value="Discordに参加">
	</from>
<?php
 
session_start();
 
//ログイン済みかを確認
if (!isset($_SESSION['USER'])) {
    header('Location: /index.php');
    exit;
}
	?>
</div>

</body>
</html>
