<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>final</title>
</head>
<body>
<?php require 'db.php' ?>
<h2>トレーニングを追加</h2>
<a href=".php">トップに戻る</a>
<hr>
<form action="" method="post">
    部位：<input type="text" name="newpart">
    <br>
    トレーニング名：<input type="text" name="newtraining">
    <br>
    <button type="submit" name="action" value="send">登録</button>
    <br>
</form>
</body>
</html>