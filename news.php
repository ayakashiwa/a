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
    <title>お知らせ</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://unpkg.com/ress@3.0.0/dist/ress.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300;400&family=Shippori+Mincho+B1&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style_4.css">
</head>

<body>
    <div id="top" class="big-bg">
        </div>
        <section class="wrap">
            <h2 class="wrap-title">お知らせ</h2>
            <img src="https://cdn.stocksnap.io/img-thumbs/280h/PFFWIMV292.jpg" alt="お知らせ写真">
            <div class="infomation">
                <ul>
                    <li>2022.3.13 アプリリリース！！！</li>
                    <p>ストレスを抱える人向けに、アプリをリリースしました！</p>
            </div>
        </section>
        <a href="index.php" class="btn return-btn">戻る</a>
</body>

</html>