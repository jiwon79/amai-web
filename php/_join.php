<?php
    if(isset($_POST['userid'])&&isset($_POST['userpassword'])&&isset($_POST['username'])) {
        include "db.php";

        $id = $_POST['userid'];
        $password = $_POST['userpassword'];
        $name = $_POST['username'];
        
        $sql = "INSERT INTO `user`(`userid`, `userpassword`, `username`)";
        $sql = $sql."values('$id','$password','$name')";

        $result = $conn->query($sql);

        echo "<script>location.href='../index.php';</script>";
    }
?>