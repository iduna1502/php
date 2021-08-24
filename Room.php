<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include('MakeThrad.php'); ?>
</head>
<body>
    <?php
    $hoge = $_POST["message"];;
    echo '<a href="$hoge.php"></a>'; 
    ?>  
</body>
</html>