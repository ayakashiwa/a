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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://unpkg.com/ress@3.0.0/dist/ress.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300;400&family=Shippori+Mincho+B1&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <meta name="description" content="どんな人でも絶対に褒めてもらえるアプリです。">
</head>

<body>
    <div id="home" class="big-bg">
        <header class="page-header wrapper">
            <nav>
                <ul class="main-nav">
                    <li><a href="news.php">お知らせ</a></li>
                    <li><a href="menu.php">作ったひと</a></li>
                    <li><a href="contact.php">問い合わせ</a></li>
                </ul>
            </nav>
        </header>
    <div class="home-content wrapper">
        <h2 class="page-title">心が疲れているあなたへ</h2>
        <p>仕事、人間関係、職場環境、家庭環境、、、<br>
            現代人はたくさんのストレスを抱えています。<br>
            このアプリを通じてあなたの心が少しでも軽くなりますように。
        </p>
        <a class="button" href="admire.php">admireアプリへ</a>
    </div>
    </div>
    <footer>
        <div class="wrapper">
            <p><small>&copy; 2022 ayakashiwa</small></p>
        </div>
    </footer>
</body>

</html>