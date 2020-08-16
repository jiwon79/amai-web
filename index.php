<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Amai Web</title>
</head>
<body>
    <div class="header">
        <img src="images/amai_logo_mini.png" alt="amai logo" href="index.php">

        <div class="topbar">
            <?php
                if(isset($_SESSION['userid'])) {
            ?>
            <!-- my page -->
            <a href="Views/mypage.php">
                <?php 
                    if(isset($_SESSION['username'])) {
                    echo $_SESSION['username']; 
                } ?> 
            </a>
            <!-- log out -->
            <a href="php/logout.php">Log out</a>

            <?php } else { ?>
                <a href="Views/join.php">Join</a>
                <a href="Views/login.php">Log in</a>            
            <?php } ?>

        </div>

        <div>
            <a href="#">About Us</a>
            <a href="#">Gallery</a>
            <a href="Views/community/board_list.php">Community</a>
        </div>
    </div>
    
    <!-- 검은색 배경 -->
    <div class="middle">
        middle icon
    </div>

    <!-- 그림 갤러리 -->
    <div>

    </div>

</body>
</html>