<?php

// フォームから送信されたデータを受け取る
$name = $_POST["name"];
$email = $_POST["email"];
$age = $_POST["age"];

$name = isset($_POST["name"]) ? $_POST["name"] : "ゲスト";
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>ユーザー登録（3/3）完了</title>
</head>

<body>
    <h1><?php echo htmlspecialchars($name, ENT_QUOTES, 'UTF-8'); ?>さん、登録が完了しました！</h1>
    <h1><?php echo htmlspecialchars($email, ENT_QUOTES, 'UTF-8'); ?> 確認メールを
        <?php echo htmlspecialchars($email, ENT_QUOTES, 'UTF-8'); ?>に送信しました。
    </h1>
    <p><a href="input.php">最初に戻る</a></p>
</body>

</html>