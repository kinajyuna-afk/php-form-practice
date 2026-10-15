<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>ユーザー登録 1/3</title>
</head>

<body>
    <h1>入力画面</h1>
    <form action="confirm.php" method="post">
        <p>
            <label>お名前：</label>
            <input type="text" name="name">
        </p>
        <p>
            <label>メールアドレス：</label>
            <input type="email" name="email">
        </p>
        <p>
            <label>年齢：</label>
            <input type="number" name="age">
        </p>
        <button type="submit">確認画面へ</button>
    </form>
</body>

</html>