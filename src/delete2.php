<?php require 'db.php' ?>
<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="UTF-8">
		<title></title>
	</head>
	<body>
<?php
    $pdo=new PDO($connect, USER, PASS);
    $sql=$pdo->prepare('delete from tranig where menu_id=?');
    if ($sql->execute([$_GET['menu_id']])) {
        echo '削除に成功しました。';
    } else {
        echo '削除に失敗しました。';
    }

?>
    <br><hr><br>
	<table>
    <th>メニューID</th><th>トレーニング名</th>
    <?php
    foreach ($pdo->query('select * from tranig') as $row) {
        echo '<tr>';
        echo '<td>',$row['menu_id'], '</td>';
        echo '<td>',$row['menu_name'], '</td>';
        echo '</tr>';
        echo "\n";
    }
?> 
</table>
    <form action="delete.php" method="post">
        <button type="submit">削除画面へ戻る</button>
    </form>
    </body>
</html>
