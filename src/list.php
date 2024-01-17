<?php require 'db.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>final</title>
</head>
<body>
    <h2>トレーニング一覧</h2>
    <?php
    $pdo = new PDO($connect, USER, PASS);
    foreach ($pdo->query('SELECT * FROM tranig') as $row) {
        echo '<p>';
        echo $row['menu_id'],':';
        echo $row['menu_name'];
        echo '</p>';
    }
    ?>
    <button onclick="location.href='top.php'">TOPへ戻る</button>
</body>
</html>