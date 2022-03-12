<!DOCTYPE html>
<html lang="ja">

<?php include_once __DIR__ . '/_head.html' ?>

<body>
    <div class="wrapper">
        <h1 class="title">Log In</h1>
        <form action="" method="post">
            <label for="email">メールアドレス</label>
            <input type="email" name="email" id="email" placeholder="Email">
            <label for="password">パスワード</label>
            <input type="password" name="password" id="password" placeholder="Password">
            <div class="btn-area">
                <input type="submit" value="ログイン" class="btn submit-btn">
                <a href="" class="btn link-btn">新規会員登録はこちら</a>
            </div>
        </form>
    </div>
</body>

</html>