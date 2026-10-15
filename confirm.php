<?php
// フォームから送信されたデータを受け取る
$name = $_POST["name"];
$email = $_POST["email"];
$age = $_POST["age"];
?>



<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>ユーザー登録確認画面 2/3 </title>
</head>

<body>
    <h1>以下の内容で登録します。よろしいですか？</h1>
    <p>お名前：<?php echo htmlspecialchars($name, ENT_QUOTES, 'UTF-8'); ?></p>
    <p>メールアドレス：<?php echo htmlspecialchars($email, ENT_QUOTES, 'UTF-8'); ?></p>
    <p>年齢：<?php echo htmlspecialchars($age, ENT_QUOTES, 'UTF-8'); ?></p>
    <form action="complete.php" method="post">
        <input type="hidden" name="name" value="<?php echo htmlspecialchars($name, ENT_QUOTES, 'UTF-8'); ?>">
        <input type="hidden" name="email" value="<?php echo htmlspecialchars($email, ENT_QUOTES, 'UTF-8'); ?>">
        <input type="hidden" name="age" value="<?php echo htmlspecialchars($age, ENT_QUOTES, 'UTF-8'); ?>">
        <button type="button" onclick="history.back()">戻る</button>
        <button type="submit">登録する</button>


    </form>
</body>

</html>