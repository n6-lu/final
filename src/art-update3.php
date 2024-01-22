<?php
    const SERVER = 'mysql220.phy.lolipop.lan';
    const DBNAME = 'LAA1517456-final';
    const USER = 'LAA1517456';
    const PASS = 'Pass0506';

    $connect = 'mysql:host='. SERVER . ';dbname='. DBNAME . ';charset=utf8';
?>

<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="UTF-8">
		<title></title>
	</head>
	<body>
<?php
    $pdo=new PDO($connect, USER, PASS);
    // SQL発行準備 prepareメソッド　作成２
    $sql=$pdo->prepare('update art set title=?, authorname=? where id=?');
    if (empty($_POST['title'])) {
        echo '作品名を入力してください。';
    } else
    if (empty($_POST['authorname'])) {
        echo '作家名を入力してください。';
    } else
    //SQLを発行 excuteメソッド　作成３
    if($sql->execute([htmlspecialchars($_POST['title']),$_POST['authorname'],$_POST['id']])){
        echo '更新に成功しました。';
    }else{
        echo '更新に失敗しました。';
    }    
?>
<?php
foreach ($pdo->query('select * from art') as $row) {
    echo '<tr>';
    echo '<td>', $row['id'], '</td>';
    echo '<td>', $row['title'], '</td>';
    echo '<td>', $row['authorname'], '</td>';
    echo '</tr>';
    echo "\n";
}
?>
    <br><button onclick="location.href='art-update.php'">更新画面へ戻る</button>
    </body>
    <form action="art-menu.php" method="post">
        <button type="submit">メニューへ戻る</button>
    </form>
</html>
