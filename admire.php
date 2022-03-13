<?php

require_once __DIR__ . '/functions.php';

// データベースに接続
$dbh = connect_db();

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $id = filter_input(INPUT_GET, 'id');
    // 空白の場合一覧表示

    // パラメータが何も渡されなかった時の処理
    $sql = 'SELECT * FROM admire';
    // プリペアドステートメントの準備
    $stmt = $dbh->prepare($sql);

    //プリペアドステートメントの実行
    $stmt->execute();
    // 結果の受け取り
    $admires = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
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
                    <li><a href="contact.php">お問い合わせ</a></li>
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
        </article>
        <aside>
            <h3 class="sub-title">カテゴリー</h3>
            <ul class="sub-menu">
                <?php foreach ($admires as $admire) : ?>
                    <li><a href="result.php?id=<?= h($admire['id']) ?>"><?= h($admire['category']) ?></a></li>
                <?php endforeach; ?>
            </ul>
        </aside>
    </div>
    <footer>
        <div class="wrapper">
            <p><small>&copy; 2022 ayakashiwa</small></p>
        </div>
    </footer>
</body>

</html>