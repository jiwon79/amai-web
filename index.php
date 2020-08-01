<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Amai Web</title>
</head>
<body>
    <h1>amai web</h1>
    <ul>
        <li><a href="#">About Us</a></li>
        <li><a href="#">Gallay</a></li>
        <li><a href="#">Community</a></li>
        
        <?php
            if(isset($_SESSION['userid'])) {
        ?>
        <li><a href="Action/logout.php">Log Out</a></li>
        
        <?php
            } else {
        ?>
        <li><a href="Views/login.php">Log In</a></li>
        
        <?php
            }
        ?>
    </ul>


</body>
</html>