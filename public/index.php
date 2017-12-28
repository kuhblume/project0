<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>project0</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="サイト説明">
<meta name="keywords" content="キーワード１,キーワード２,キーワード３,キーワード４,キーワード５">
<link rel="stylesheet" href="css/style.css">

</head>

<body>

<div id="head">

<header>
<div class="inner">
<h1 id="logo"><a href="#"><img src="images/logo.png" alt="Sample"></a></h1>
<div id="contact">
<p class="tel">ログイン関係</p>
<p class="form"><a>ログインボタン</a></p>
</div>
</div>
</header>

<!--PC用（801px以上端末）メニュー-->
<nav id="menubar">
<ul>
<li><a href="#">ホーム<span>HOME</span></a></li>
<li><a href="11.html">タブ１<span>tab1</span></a></li>
<li><a href="22.html">タブ２<span>tab2</span></a></li>
<li><a href="33.html">タブ３<span>tab3</span></a></li>
</ul>
</nav>
<!--小さな端末用（800px以下端末）メニュー-->
<nav id="menubar-s">
<ul>
<li><a href="#">ホーム<span>HOME</span></a></li>
<li><a href="11.html">タブ１<span>tab1</span></a></li>
<li><a href="22.html">タブ２<span>tab2T</span></a></li>
<li><a href="33.html">タブ３<span>tab3</span></a></li>
</ul>
</nav>

</div>
<!--/head-->

<div id="contents">

<div id="contents-inner">

<div id="main">

<section>

<h2>タブ名</h2>

<h3>サブタイ</h3>
<p>内容</p>

<h3>サブタイ</h3>
<p>内容</p>

</section>

</div>
<!--/main-->

<div id="sub">

<nav class="box1">
<h2>ログインカウンター予定</h2>
<p><script language="JavaScript" type="text/javascript">
 <!--
//桁数を入力
posNum = 7;

 document.write('<img src="cts/counter_s.php?pos=0" width="0" height="0">');
 for(i=posNum; i>0; i--){
 document.write('<img src="cts/counter_s.php?pos=' + i + '">');
 }
 -->
 </script></p>
</nav>

<section class="box1">
<h2>プロフ予定</h2>
<p>内容</p>
<p class="form"><a href="ゆーあーるえる">リンクボタン？</a></p>
</section>

<section class="box1">
<h2>更新履歴？</h2>
<p>内容。</p>
</section>
<!--/box1-->



</div>
<!--/sub-->

</div>
<!--/contents-inner-->

</div>

<p id="pagetop"><a href="#">↑</a></p>

</div>
<!--/contents-->

<footer>
<div id="footermenu">
<ul>
<li><a href="#">未定</a></li>
</ul>
<ul>
<li><a href="#">未定</a></li>
</ul>
</div>
<!--/footermenu-->

<div id="copyright">
<span class="pr"><a>Web Design:Template-Party</a></span>
</div>

</footer>

</body>
</html>
