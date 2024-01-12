<?php require 'db.php' ?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>final</title>
</head>
<body>
<?php
    $pdo=new PDO($connect, USER, PASS);
    $sql=$pdo->prepare('insert into final(menu_id,menu_name) values (?,?)');
     if(empty($_POST['menu_name'])){
        echo 'トレーニング名を入力してください。';
    }else if($sql->execute([ $_POST['menu_id'],$_POST['menu_name']])){
        echo '<font color="red">登録に成功しました。</font>';
    }else{
        echo '<font color="red">登録に失敗しました。</font>';
    }
?>
    <br><hr><br>
    <table>
        <tr>
            <th>トレーニング名</th>
        </tr>
<?php
    foreach($pdo->query('select * from final') as $row){
        echo '<tr>';
        echo '<td>',$row['menu_id'],'</td>';
        echo '<td>',$row['menu_name'],'</td>';
        echo '</tr>';
        echo "\n";
    }
?>
    </table>
    <form action="top.php" method="post">
        <button type="submit">トップへ戻る</button>
    </form>
</body>
</html>