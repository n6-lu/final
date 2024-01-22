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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <h2>作品更新</h2>
    <a href="art-update.php">作品一覧に戻る</a>
    <hr>
    <?php
    $pdo=new PDO($connect, USER, PASS);
	$sql=$pdo->prepare('select * from art where id=?');
	$sql->execute([$_POST['id']]);
	foreach ($sql as $row) {
        echo '<tr>';
		echo '<form action="art-update3.php" method="post">';
        echo '<td> ';
		echo '<input type="text" name="id" value="', $row['id'], '">';
		echo '</td> ';
		echo '<td>';
		echo '<input type="text" name="title" value="', $row['title'], '">';
		echo '</td> ';
		echo '<td>';
		echo ' <input type="text" name="authorname" value="', $row['authorname'], '">';
		echo '</td> ';
		echo '<td><input type="submit" value="更新"></td>';
		echo '</form>';
        echo '</tr>';
		echo "\n";
	}
    ?>
    </body>
</html>