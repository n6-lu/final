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
    $sql=$pdo->prepare('delete from art where id=?');
    if ($sql->execute([$_POST['id']])) {
        echo '削除に成功しました。';
    } else {
        echo '削除に失敗しました。';
    }
?>
    <br><a href="art-menu.php">メニューに戻る</a>
    </body>
</html>