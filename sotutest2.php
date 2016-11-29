<html>
<head><meta charset="utf-8"></head>
<body>
<?php
$code = $_GET['jancode'];
if (isset($_GET['button1'])) {

define("APPLICATION_ID"     , '1052417382322945842');
define("APPLICATION_SECRET" , 'd8e1cd8feed53e2017183479c3d7efcd9cdfc9e8');
define("AFFILIATE_ID"       , '155af055.4fb22eeb.155af056.8e401f11');
define("ACCESS_URL"         , 'https://app.rakuten.co.jp/services/api/BooksTotal/Search/20130522?');

// $code = $_GET['jancode'];

$params = array();
$params['format']              = 'json';
$params['applicationId']       = APPLICATION_ID;
$params['application_secret']  = APPLICATION_SECRET;
$params['affiliateId']         = AFFILIATE_ID;
$params['isbnjan']             = $_GET['jancode'];

$requestURL = ACCESS_URL;
foreach($params as $key => $param){
    $requestURL .= "&{$key}={$param}";
}

$request = file_get_contents($requestURL);
$info    = json_decode($request, true);


if (count($info) != 0) {
    foreach ($info as $key => $Items) {
        if ($key == "Items") {
            $Item = $Items['0']['Item'];
            $title        = $Item['title']; //タイトル
            $author       = $Item['author']; //著者
            $manufacturer = $Item['publisherName']; //出版社
            $imgURL       = $Item['mediumImageUrl'];
            $title        = mb_convert_kana($title, "as", "UTF-8");
        }
    }
    print "<img src=".$imgURL."><br>";
    print "<form method=\"get\" action=\"abc.php\" >
    商品コード：<input type=\"text\"   name=\"1code\"         value=".$code." required> <br><br>
    商品名    ：<input type=\"text\"   name=\"1itemName\"     value=".$title." required> <br><br>
    著者      ：<input type=\"text\"   name=\"1author\"       value=".$author." required> <br><br>
    出版社    ：<input type=\"text\"   name=\"1manufacturer\" value=".$manufacturer." required> <br><br>
    価格      ：<input type=\"text\"   name=\"1price\"                                          required>円 <br><br>
                <input type=\"submit\" name=\"1touroku\"      value=\"登録\" >
    </form>";
}
else {
    //エラー
}

exit;

}elseif ( isset($_GET['button2']) ){
	define("APPLICATION_ID"     , '1052417382322945842');
	define("APPLICATION_SECRET", 'd8e1cd8feed53e2017183479c3d7efcd9cdfc9e8');
	define("AFFILIATE_ID"       , '155af055.4fb22eeb.155af056.8e401f11');
	define("ACCESS_URL"         , 'https://app.rakuten.co.jp/services/api/BooksCD/Search/20130522?');

	$params = array();
	$params['format']              = 'json';
	$params['applicationId']       = APPLICATION_ID;
	$params['application_secret'] = APPLICATION_SECRET;
	$params['affiliateId']         = AFFILIATE_ID;
	$params['jan']                = $_GET['jancode'];

	$requestURL = ACCESS_URL;
	foreach($params as $key => $param){
		$requestURL .= "&{$key}={$param}";
	}

	$request = file_get_contents($requestURL);
	$info    = json_decode($request, true);


	if (count($info) != 0) {
		foreach ($info as $key => $Items) {
			if ($key == "Items") {
				$Item = $Items['0']['Item'];
				$title        = $Item['title']; //タイトル
				$artistName   = $Item['artistName']; //アーティスト
				$label        = $Item['label']; //レーベル
				$imgURL       = $Item['mediumImageUrl'];
				$title        = mb_convert_kana($title, "as", "UTF-8");
			}
		}
    print "<img src=".$imgURL."><br>";
    print "<form method=\"get\" action=\"abc.php\" >
    商品コード　　：<input type=\"text\"   name=\"2code\"         value=".$code."       required> <br><br>
    商品名    　　：<input type=\"text\"   name=\"2itemName\"     value=".$title."      required> <br><br>
    アーティスト  ：<input type=\"text\"   name=\"2artistName\"   value=".$artistName." required> <br><br>
    レーベル   　 ：<input type=\"text\"   name=\"2label\"        value=".$label."      required> <br><br>
    価格      　　：<input type=\"text\"   name=\"2price\"                              required>円 <br><br>
              　　  <input type=\"submit\" name=\"2touroku\"      value=\"登録\" >
    </form>";
	} else {
	    //エラー
	}

exit;

}elseif ( isset($_GET['button3']) ){
	define("APPLICATION_ID"     , '1052417382322945842');
	define("APPLICATION_SECRET" , 'd8e1cd8feed53e2017183479c3d7efcd9cdfc9e8');
	define("AFFILIATE_ID"       , '155af055.4fb22eeb.155af056.8e401f11');
	define("ACCESS_URL"         , 'https://app.rakuten.co.jp/services/api/BooksDVD/Search/20130522?');

	$params = array();
	$params['format']              = 'json';
	$params['applicationId']       = APPLICATION_ID;
	$params['application_secret']  = APPLICATION_SECRET;
	$params['affiliateId']         = AFFILIATE_ID;
	$params['jan']                 = $_GET['jancode'];

	$requestURL = ACCESS_URL;
	foreach($params as $key => $param){
		$requestURL .= "&{$key}={$param}";
	}

	$request = file_get_contents($requestURL);
	$info    = json_decode($request, true);


	if (count($info) != 0) {
		foreach ($info as $key => $Items) {
			if ($key == "Items") {
				$Item = $Items['0']['Item'];
				$title        = $Item['title']; //タイトル
				$artistName   = $Item['artistName']; //出演者
				$label        = $Item['label']; //レーベル
				$imgURL       = $Item['mediumImageUrl'];
				$title        = mb_convert_kana($title, "as", "UTF-8");
			}
		}
    print "<img src=".$imgURL."><br>";
    print "<form method=\"get\" action=\"abc.php\" >
    商品コード　　：<input type=\"text\"   name=\"3code\"         value=".$code."       required> <br><br>
    商品名    　　：<input type=\"text\"   name=\"3itemName\"     value=".$title."      required> <br><br>
    出演者等　　  ：<input type=\"text\"   name=\"3artistName\"   value=".$artistName." required> <br><br>
    レーベル   　 ：<input type=\"text\"   name=\"3label\"        value=".$label."      required> <br><br>
    価格      　　：<input type=\"text\"   name=\"3price\"                              required>円 <br><br>
              　　  <input type=\"submit\" name=\"3touroku\"      value=\"登録\" >
    </form>";
	} else {
	    //エラー
	}

exit;

}elseif ( isset($_GET['button4']) ){
	define("APPLICATION_ID"     , '1052417382322945842');
	define("APPLICATION_SECRET" , 'd8e1cd8feed53e2017183479c3d7efcd9cdfc9e8');
	define("AFFILIATE_ID"       , '155af055.4fb22eeb.155af056.8e401f11');
	define("ACCESS_URL"         , 'https://app.rakuten.co.jp/services/api/BooksGame/Search/20130522?');

	$params = array();
	$params['format']              = 'json';
	$params['applicationId']       = APPLICATION_ID;
	$params['application_secret']  = APPLICATION_SECRET;
	$params['affiliateId']         = AFFILIATE_ID;
	$params['jan']                 = $_GET['jancode'];

	$requestURL = ACCESS_URL;
	foreach($params as $key => $param){
		$requestURL .= "&{$key}={$param}";
	}

	$request = file_get_contents($requestURL);
	$info    = json_decode($request, true);


	if (count($info) != 0) {
		foreach ($info as $key => $Items) {
			if ($key == "Items") {
				$Item = $Items['0']['Item'];
				$title        = $Item['title']; //タイトル
				$hardware     = $Item['hardware']; //対応機種
				$label        = $Item['label']; //発売元
				$imgURL       = $Item['mediumImageUrl'];
				$title        = mb_convert_kana($title, "as", "UTF-8");
			}
		}
    print "<img src=".$imgURL."><br>";
    print "<form method=\"get\" action=\"abc.php\" >
    商品コード　　：<input type=\"text\"   name=\"4code\"         value=".$code."       required> <br><br>
    商品名    　　：<input type=\"text\"   name=\"4itemName\"     value=".$title."      required> <br><br>
    対応機種  　　：<input type=\"text\"   name=\"4hardware\"     value=".$hardware."   required> <br><br>
    発売元   　　 ：<input type=\"text\"   name=\"4label\"        value=".$label."      required> <br><br>
    価格      　　：<input type=\"text\"   name=\"4price\"                              required>円 <br><br>
              　　  <input type=\"submit\" name=\"touroku\"       value=\"登録\" >
    </form>";
	} else {
	    //エラー
	}
}

exit;
?>
</body>
</html>
