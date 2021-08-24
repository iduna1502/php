<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyPHP</title>
    <style>
        body {
            background-color: #daf7b1;
            margin-left: 680px;
        }
    </style>
    <?php
    ?>
</head>

<body>
    <?php
    echo date("Y/m/d H:i:s") . "\n" . "\n" . "\n";
    $time = date("Y/m/d H:i:s");
    ?>
    <br>
    <form action="" method="post">
        <br>
        <h3>スレ作成</h3>
        <h4>作成したいスレッドの名前を入力してください</h4>
        <textarea name="message" id="" cols="60" rows="1" style="padding: 8px; border: double 3px; margin-top: 0px; margin-bottom: 30px;"></textarea>

        <input type='submit' location.href='Room.php' name='submit' value='作成する！'><br>

    </form>
    
    <?php
    $hoge = $_POST["message"];
    $myfile = fopen("MadeRoom/$hoge.php", "w");
    return $_POST["message"];;
    ?>

</body>

</html>