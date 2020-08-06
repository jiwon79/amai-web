<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>board add action</title>
</head>
<body>
    <h1>board add action</h1>
    <?php
        include "../../php/db.php";

        $board_pw = $_POST['boardPw'];
        $board_title = $_POST['boardTitle'];
        $board_user = $_SESSION['username'];
        $board_content = $_POST['boardContent'];
        $_SESSION['rownum'] = $_SESSION['rownum'] + 1;
        $board_no = $_SESSION['rownum'];
        
        echo "board_pw : ".$board_pw."<br>";
        echo "board_title : ".$board_title."<br>";
        echo "board_user : ".$board_user."<br>";
        echo "board_content : ".$board_content."<br>";

        $sql = "INSERT INTO board (board_no, board_pw, board_user, board_title, board_content, board_date)";
        $sql = $sql."values ('$board_no','$board_pw','$board_user','$board_title','$board_content',now())";
        $result = mysqli_query($conn,$sql);

    ?>
    
    <script>
        alert("글이 추가되었습니다");
    </script>

    <a href="board_list.php">돌아가기</a>

</body>
</html>