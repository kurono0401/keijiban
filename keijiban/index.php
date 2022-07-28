<doctype html>
<html lang:ja>

<head>
<meta charset="UTF-8">
<title>4eachblog 掲示板</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

<?php

mb_internal_encoding("utf8");
$pdo = new PDO("mysql:dbname=lesson01;host=localhost;","root","");
$stmt = $pdo->query("select * from 4each_keijiban");

?>

<header>
    <img src="4eachblog_logo.jpg">
    <ul>
        <li>トップ</li>
        <li>プロフィール</li>
        <li>4eachについて</li>
        <li>登録フォーム</li>
        <li>問い合わせ</li>
        <li>その他</li>
    </ul>
</header>

<main>
    <div class="main-container">
        <div class="leftA">
            <h2>プログラミングに役立つ掲示板</h2>
            <div class="background">
                <form method="post" action="insert.php">
                    <h4>入力フォーム</h4>
                    ハンドルネーム
                    <br>
                    <input type="text" size=40 name="handlename">
                    <br>
                    <br>
                    タイトル
                    <br>
                    <input type="text" size=40 name="title">
                    <br>
                    <br>
                    コメント
                    <br>
                    <textarea rows=8 cols=60 name="comments"></textarea>
                    <br>
                    <br>
                    <input type="submit" class="submit" value="投稿する">
                </form>
            </div>
        </div>

        <div class="right">
            <h4>人気の記事</h4>
            <ul>
                <li>PHPオススメ本</li>
                <li>PHP MyAdminの使い方</li>
                <li>いま人気のエディタTop5</li>
                <li>HTMLの基礎</li>
            </ul>
            <h4>オススメリンク</h4>
            <ul>
                <li>インターノウス株式会社</li>
                <li>XAMPPのダウンロード</li>
                <li>Eclipceのダウンロード</li>
                <li>Brancketのダウンロード</li>
            </ul>
            <h4>カテゴリ</h4>
            <ul>
                <li>HTML</li>
                <li>PHP</li>
                <li>MySQL</li>
                <li>JavaSrcript</li>
            </ul>
        </div>

        <?php

        while($row = $stmt->fetch()){

        echo "<div class='leftB'>";
        echo "<div class='background'>";
        echo "<h4>".$row['title']."</h4>";
        echo $row['comments'];
        echo "<h6>posted by".$row['handlename']."</h6>";
        echo "</div>";
        echo "</div>";
        }

        ?>
    </div>
</main>

<footer>
    copyright internous | 4each blog is the one which provides A to Z about programming.
</footer>
</body>