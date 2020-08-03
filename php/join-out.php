<?php
    include "db.php";

    $id = $_SESSION['userid'];
    session_unset();
    session_destroy();

    $sql = "DELETE FROM user WHERE userid='$id';";
    $result = $conn->query($sql);

    if(!isset($_SESSION['userid'])) {
        echo
        "<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
        <script>alert('회원정보를 삭제하였습니다');</script>";
    } else {
        echo 
        "<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
        <script>alert('회원정보를 삭제하지 못하였습니다');</script>";
    }

    ?>
<script> location.href="../index.php"; </script>
