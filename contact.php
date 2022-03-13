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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://unpkg.com/ress@3.0.0/dist/ress.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300;400&family=Shippori+Mincho+B1&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style_6.css">
</head>

<body>
    <div id="top" class="big-bg">
    </div>
    <div class="top-contents wrapper">
        <article>
            <header class="post-info">
                <h2 class="post-title">お問い合わせ</h2>

                <body>
                    <div class="wrapper">
                        <form action="" method="post">
                            <div>
                                <label for="name">氏名</label>
                                <input type="text" name="name" id="name" placeholder="氏名">
                            </div>
                            <div>
                                <label for="email">メールアドレス</label>
                                <input type="email" name="email" id="email" placeholder="メールアドレス">
                            </div>
                            <div>
                                <label for="password">お問い合わせ内容</label>
                                <textarea id="message" name="message"></textarea>
                            </div>
                            <div class="btn-area">
                                <input type="submit" value="送信" class="btn submit-btn"><br>
                                <a href="admire.php" class="btn link-btn">アプリへ戻る</a>
                </body>

</html>