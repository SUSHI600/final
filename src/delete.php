<?php require 'db.php' ?>
<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="UTF-8">
		<title>削除</title>
	</head>
	<body>
	<table>
    <th>メニューID</th><th>トレーニング名</th>
<?php
    $pdo=new PDO($connect, USER, PASS);
    foreach ($pdo->query('select * from tranig') as $row) {
        echo '<tr>';
        echo '<td>',$row['menu_id'], '</td>';
        echo '<td>',$row['menu_name'], '</td>';
        echo '<td>';
        echo '<a href="delete2.php?menu_id=',$row['menu_id'],'">削除</a>';
        echo '</td>';
        echo '</tr>';
        echo "\n";
    }
?> 
</table>
<button onclick="location.href='top.php'">TOPへ戻る</button>
    </body>
</html>