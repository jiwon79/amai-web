<?php
    session_start();
    session_unset();
    $result = session_destroy();

    if($result) {
?>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <script>
            alert("로그아웃 되었습니다");
            history.back();
        </script>
<?php
    }
?>