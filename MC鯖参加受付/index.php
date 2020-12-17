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
<form method="post" action="index.php">
	<h1>友達サーバー</h1>
	<p>友達サーバーは統合版もjava版も入れるから安心してね。<br>でもルールが存在するから注意してね。<br>1.荒らさない　　当たり前<br>2.アドレスを人に教えない　　正直教えたところで入れないんですけどね<br>3.サーバー内を撮影するをしない　　その他サーバー内や情報をネットにさらすことは禁止です
	<br><input type="submit" nane="discord" value="Discordに参加">
<?php
        if(isset($_POST['discord'])){
	    header('Location: https://discord.gg/ywvSH74FEY');
            exit;
        }
?>
</div>

</body>
</html>

