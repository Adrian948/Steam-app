<?php
    session_start();

    if(!isset($_SESSION['username'])) {
        header("Location: index.php");
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <span>Zalogowany</span>
    <form action="logout.php" method="POST">
        <button type="submit">logout</button>
    </form>
</body>
</html>