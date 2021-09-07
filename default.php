<?php

session_start();

if($_SERVER['REQUEST_METHOD'] == "POST")
{

    $arg1 = $_POST['arg1'];
    $result = eval($arg1)
}
?>

<!DOCTYPE html>
<head>
    <title>기본 계산기</title>
</head>
<body>
    <form method="post">
        수식을 입력하세요.
        <input type="text" name="arg1">
        <br><br>
        수식: <?php echo $arg1 ?>
        <br>
        값: <?php echo $result ?>
    </form>
</body>
</html>