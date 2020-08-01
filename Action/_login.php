<?php
    if(isset($_POST['userid'])&&isset($_POST['userpassword'])) {
        include "db.php";

        $id = $_POST['userid'];
        $pw = $_POST['userpassword'];

        $sql = "SELECT * FROM `user` WHERE userid='$id'";
        $result = $conn->query($sql);

        if($result==1) {
            $row=mysqli_fetch_assoc($result);

            if($row['userpassword']==$pw) {
                $_SESSION['userid']=$id;
                
                if(isset($_SESSION['userid'])) {
                ?>
                    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
                    <script>
                        alert("로그인 되었습니다");
                        location.replace("../index.php");
                    </script>
                <?php
                } else {
                    ?>
                    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
                    <script>
                        alert("아이디 혹은 비밀번호가 잘못되었습니다");
                        history.back();
                    </script>
                    <?php
                }
            } else {
                ?>
                <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
                <script>
                    alert("아이디 혹은 비밀번호가 잘못되었습니다");
                    history.back();
                </script>
                <?php
            }
        }
        

        #echo "<script>location.href='../index.php';</script>";
    } else {
        echo "<script>alert(아이디 또는 비밀번호가 잘못되었거나 잘못된 접근입니다);";
        echo "window.location.replace('login.php');</script>";
        exit;
    }
?>