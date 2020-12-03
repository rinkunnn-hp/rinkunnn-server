<?php
		$name1 = $_POST["user_name"];
		$name2 = $_POST["password"];
		$name3 = $_POST["video_k"];
		$name4 = $_POST["music_k"];
        if(isset($_POST["movie_l"])) {
		system("rm $name2.$name3");
		system("youtube-dl -f 22 --merge-output-format $name3 $name1 -o '$name2.$name3'");
		header( "Location: https://rinkunhp.ddo.jp/youtube/$name2.$name3");
	}
	if(isset($_POST["movie_d"])) {
                system("rm $name2.$name3");
                system("youtube-dl -f 22 --merge-output-format $name3 $name1 -o '$name2.$name3'");
                $file_path = "$name2.$name3";
                $file_name = "$name2.$name3";
                header('Content-Type: application/force-download');
                header('Content-Length: ' . filesize($file_path));
                header('Content-disposition: attachment; filename="' . $file_name . '"');
                ob_end_clean();
                readfile($file_path);
	}
		if(isset($_POST["music"])) {
		system("rm $name2.$name4");
		system("youtube-dl $name1 -x --audio-format $name4 -o '$name2.$name4'");
		header( "location: https://rinkunhp.ddo.jp/youtube/$name2.$name4");
    }
        if(isset($_POST["music_d"])) {
                system("rm $name2.$name4");
                system("youtube-dl $name1 -x --audio-format $name4 -o '$name2.$name4'");
                $file_path1 = "$name2.$name4";
                $file_name1 = "$name2.$name4";
                header('Content-Type: application/force-download');
                header('Content-Length: ' . filesize("$file_path1"));
                header('Content-disposition: attachment; filename="' . $file_name1 . '"');
                ob_end_clean();
                readfile("$file_path1");
        }
?>

<form action="index.php" method="POST">
	<p>YouTubeのURL：<input type="text" name="user_name"></p>
	<p>ファイル名の指定 日本語非対応：<input type="text" name="password" value="youtube_movie"></p>
	<p>動画の拡張子の指定：<input type="text" name="video_k" value="mp4"></p>
	<p>音楽の拡張子の指定：<input type="text" name="music_k" value="mp3"></p>
	<input type="submit" name="movie_l" value="動画に変換">
	<input type="submit" name="movie_d" value="動画をダウンロード">
        <input type="submit" name="music" value="音楽に変換">
        <input type="submit" name="music_d" value="音楽をダウンロード">
</form>

