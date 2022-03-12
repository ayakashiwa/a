<?php

require_once __DIR__ . '/functions.php';

$dbh = connect_db();
//メモ
//git switch -c feature/issues/#2
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admire</title>
    <link rel="stylesheet" href="https://unpkg.com/ress@3.0.0/dist/ress.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300;400&family=Shippori+Mincho+B1&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style_3.css">
    <meta name="description" content="どんな人でも絶対に褒めてもらえるアプリです。">
</head>

<body>
    <div id="top" class="big-bg">
        <header class="page-header wrapper">
            <div class="wrapper">
                <h2 class="page-title"><a href="index.php">admire</a></h2>
            </div>
            <nav>
                <ul class="main-nav">
                    <li><a href="news.php">お知らせ</a></li>
                    <li><a href="menu.php">作ったひと</a></li>
                    <li><a href="contact.php">問い合わせ</a></li>
                </ul>
            </nav>
        </header>
    </div>
    <div class="top-contents wrapper">
        <article>
            <header class="post-info">
                <h2 class="post-title">あなたの悩みを聞かせてください</h2>
            </header>
            <img src="https://cdn.stocksnap.io/img-thumbs/280h/O6V2IELJBM.jpg">
            <h3>いつも頑張っている貴方へ、心からのエールを送ります。<br>
                右のカテゴリから自分の状況に当てはまるものをクリックしてください。</h3>
            </h3>
            <?php


            ?>
        </article>
        <aside>
            <h3 class="sub-title">カテゴリー</h3>
            <ul class="sub-menu">
                <li><a href="result.php?id=1">仕事疲れた</a></li>
                <li><a href="result.php?id=2">上司に腹が立つ</a></li>
                <li><a href="result.php?id=3">使えないなと言われた</a></li>
                <li><a href="result.php?id=4">やっていく自信がない</a></li>
                <li><a href="result.php?id=5">仕事中に寝てしまった</a></li>
                <li><a href="result.php?id=6">仕事に行きたくない</a></li>
                <li><a href="result.php?id=7">家事を頑張った</a></li>
                <li><a href="result.php?id=8">ダンナ・奥さんがキツイ</a></li>
                <li><a href="result.php?id=9">料理が下手くそ</a></li>
                <li><a href="result.php?id=10">彼氏に振られた</a></li>
                <li><a href="result.php?id=11">彼女に振られた</a></li>
                <li><a href="result.php?id=12">自分が嫌い</a></li>
                <li><a href="result.php?id=13">嫌われたかも、、と思ってしまう</a></li>
                <li><a href="result.php?id=14">人生に絶望している</a></li>
                <li><a href="result.php?id=15">自分はブサイクだと思っている</a></li>
        </aside>
    </div>
    <footer>
        <div class="wrapper">
            <p><small>&copy; 2022 ayakashiwa</small></p>
        </div>
    </footer>
</body>

</html>