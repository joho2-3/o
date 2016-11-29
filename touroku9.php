<html>
<head>
<meta charset="utf-8">
<!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script> -->
<!-- <script src="sample.js"></script> -->
<!-- <script type="text/javascript"> -->

<!-- </script> -->
<!-- <script type="text/javascript"> -->
<!--  </script> -->
<!-- メモ -->
<!-- 小説  ISBNサンプル：9784286133850 -->
<!-- CD  JANコードサンプル：4988018311416 -->
<!-- DVD  JANコードサンプル：4988018401155 -->
<!-- ゲーム  JANコードサンプル：4902370521047 -->
</head>
<body>
	登録したい商品のJANコードをバーコードリーダで読み取るか、直接入力し、<br>
	商品カテゴリを選択してください
	<br><br>
	<form method="get" action="touroku8.php" id="input">
		コード：<input type="text" name="jancode" placeholder="コードを入力してください" required> <br><br>
<!-- 		<input type="button"  value="ボタン1" > -->
<!-- 		<input type="button"  value="ボタン2"><br> -->
		<input type="submit" value="書籍"   name="button1">
		<input type="submit" value="CD"     name="button2">
		<input type="submit" value="DVD"    name="button3">
		<input type="submit" value="ゲーム" name="button4">
	</form>
</body>
</html>