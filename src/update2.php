<?php require 'db.php' ?>
<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="UTF-8">
		<title>編集2</title>
	</head>
	<body>
<?php
    $pdo=new PDO($connect, USER, PASS);
    $sql=$pdo->prepare('update tranig set menu_name=? where menu_id=?'); 
    if (empty($_POST['menu_name'])) {
        echo 'トレーニング名を入力してください。';
    } else if ($sql->execute([htmlspecialchars($_POST['menu_name']),$_POST['menu_id']])){
        echo '更新に成功しました。';
    }else {
        echo '更新に失敗しました。';
    }
?>
        <hr>
        <table>
        <th>トレーニング名</th>

<?php
foreach ($pdo->query('select * from tranig') as $row) {
    echo '<tr>';
    echo '<td>', $row['menu_name'], '</td>';
    echo '</tr>';
    echo "\n";
}
?>
        </table>
        <button onclick="location.href='top.php'">TOPへ戻る</button>
    </body>
</html>