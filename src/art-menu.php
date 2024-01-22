<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/art-menu.css">
    <title></title>
    <style>
        form {
            display: inline-block;
            margin-right: 10px;
        }
    </style>
</head>
<body>
    <h1>アート作品管理メニュー</h1>
    <div><form action="art-select.php" method="post">
    <button class="button-30">一覧</button>
    </form>
    <form action="art-insert.php" method="post">
    <button class="button-30">登録</button>
    </form>
    <form action="art-update.php" method="post">
    <button class="button-30">更新</button>
    </form>
    <form action="art-delete.php" method="post">
    <button class="button-30">削除</button>
    </form></div>
</body>
</html>