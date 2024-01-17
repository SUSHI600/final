<?php require 'db.php' ?>
<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="style.css">
		<title></title>
	</head>
	<body>
		<div class="th1">トレーニング名</div>
<?php
    $pdo=new PDO($connect, USER, PASS);

	foreach ($pdo->query('select * from tranig') as $row) {
		echo '<form action="update2.php" method="post">';
		echo '<div class="td1">';
		echo '<input type="text" name="menu_name" value="',$row['menu_name'],'">';
        echo '<input type="hidden" name="menu_id" value="',$row['menu_id'],'">';
		echo '</div> ';
		echo '<div class="td1"><input type="submit" value="更新"></div>';
		echo '</form>';
		echo "\n";
	}
?>

    </body>
</html>