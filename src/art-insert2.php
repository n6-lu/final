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
            $sql=$pdo->prepare('insert into art(title, authorname) values (?, ?)');
            if (empty($_POST['title'])){
                echo '作品名を入力してください。';
            }else if (empty($_POST['authorname'])){
                echo '作家名を入力してください。';
            }else if ($sql->execute([ $_POST['title'], $_POST['authorname'] ]) ){
                echo '<font color="black">追加に成功しました。</font>';
            }else{
                echo '<font color="black">追加に失敗しました。</font>';
            }
            ?>
            <br><hr><br>
                <form action="art-insert.php" method="post">
                    <button type="submit">追加画面へ戻る</button>
                </form>
        </body>
        <form action="art-menu.php" method="post">
                    <button type="submit">トップへ戻る</button>
                </form>
    </html>