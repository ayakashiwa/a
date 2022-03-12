<?php

require_once __DIR__ . '/functions.php';

$dbh = connect_db();
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>お問い合わせ</title>
    <link rel="stylesheet" href="style_6.css">
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
                <h2 class="post-title">お問い合わせフォーム</h2>

                <body>
                    <div class="wrapper">
                        <h1 class="title">お問い合わせ</h1>
                        <form action="" method="post">
                            <label for="name">氏名</label>
                            <input type="text" name="name" id="name" placeholder="UserName">
                            <label for="email">メールアドレス</label>
                            <input type="email" name="email" id="email" placeholder="Email">
                            <label for="password">message</label>
                            <input type="message" name="message" id="message" placeholder="message">
                            <div class="btn-area">
                                <input type="submit" value="送信" class="btn submit-btn">
                                <a href="admire.php" class="btn link-btn">アプリへ戻る</a>
                </body>

</html>