<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ログインシステム</title>

    <link rel="stylesheet" href="https://unpkg.com/ress@3.0.0/dist/ress.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300;400&family=Shippori+Mincho+B1&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
    <?php include_once __DIR__ . '/_head.html' ?>
<body>
    <div class="wrapper">
        <h1 class="title">member only</h1>
        <h2 class="sub-title">ゲストさん ようこそ</h2>
        <p class="info">閲覧するには会員登録が必要です。</p>
        <div class="btn-area">
            <a href="" class="btn log-out-btn">ログアウト</a>
        </div>
    </div>
</body>

</html>