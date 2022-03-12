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
    <title>admireを作ったひと</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://unpkg.com/ress@3.0.0/dist/ress.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300;400&family=Shippori+Mincho+B1&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style_2.css">
</head>

<body>
    <section class="wrap">
        <h2 class="wrap-title">このアプリを作ったひと</h2>
        <img src="https://cdn.stocksnap.io/img-thumbs/960w/beauty-woman_DRZLSHMWEA.jpg" alt="顔写真">
            <div class="infomation">
                <p>name: ayaka shiwa</p>
                <p>age : 28</p>
                <p>work: 地方公務員</p>
                <p>某市町村で地方公務員として勤務。現在５年目。<br>
                    毎年１名うつ病による休職者を出す超絶ブラック部署に勤務。<br></p>
                    毎日ストレスを抱える中で、このアプリを発明しました。<br>
                    仕事中や、ストレスを感じたときにこのアプリが活用されることを<br>
                    心から祈っています。<br>
                    みなさんの自己肯定感が爆上がりしますように。</p>
</div>
    </section>
    <a href="index.php" class="btn return-btn">戻る</a>
</body>

</html>