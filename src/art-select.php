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
    <h2>作品一覧</h2>
    <a href="art-menu.php">メニューに戻る</a>
    <hr>
<?php
echo '<table>';
$pdo=new PDO($connect, USER, PASS);
if(isset($_POST['keyword'])) {
    $sql=$pdo->prepare('select * from art where title like ?');
    $sql->execute(['%'.$_POST['keyword'].'%']);
}else{
    $sql=$pdo->query('select * from art');
}
foreach ($sql as $row) {
    $id=$row['id'];
    echo '<tr>';
    echo '<td>', $id, ':</td>';
    echo '<td>';
    echo '<td>', $row['title'], ':</td>';
    echo '</td>';
    echo '<td>', $row['authorname'], '</td>';
    echo '</tr>';
}
echo'</table>';
?>
</body>
</html>