<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- 부트스트랩 css 사용 -->
    <link rel="stylesheet" href="/src/css/bootstrap.css">
    <link rel="stylesheet" href="/src/css/style.css">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Amai Web</title>
</head>

<body>
    <nav class="header">
        <a href="/index.php"><img src="/src/images/amai_logo_mini.png" alt="amai logo" id="amai_logo_img"></a>
        

        <div class="top_menu">
            <div class="container">
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
        </div>

        <div class="main_menu">
            <div class="container">
                <a href="#">About Us</a>
                <a href="#">Gallery</a>
                <a href="Views/community/board_list.php">Community</a>
            </div>
        </div>
    </nav>
    
    <!-- 검은색 배경 -->
    <div class="middle">
        middle icon
    </div>

    <!-- 그림 갤러리 -->
    <div class="gallary">
        gallary1
        gallary2
    </div>

    <footer>
        copyright@...
    </footer>

    <!--  부트스트랩 js 사용 -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="/src/js/bootstrap.js"></script>
</body>
</html>