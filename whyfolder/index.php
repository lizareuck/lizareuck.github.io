<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>07.04.2025</title>
</head>
<body>
    <form action="auth.php" method="post">
        <input type="text"
        name="login">
        <input type="submit" value="Отправить">
    </form>
    <? if($_GET['message']): ?>
        <p><?=$_GET['message']?></p>
    <? endif;?>
</body>
</html>