<?php
    include "db.php";
    

    $id = $_POST['userid'];
    $password = $_POST['userpassword'];
    $name = $_POST['username'];
    
    $sql = "INSERT INTO `user`(`userid`, `userpassword`, `username`)";
    $sql = $sql."values('$id','$password','$name')";

    $result = $mysqli->query($sql);

    echo "<script>location.href='../index.php';</script>"
?>