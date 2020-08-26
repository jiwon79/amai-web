<!DOCTYPE html>
<html lang="en">
<head>
    <!-- 부트스트랩 css 사용 -->
    <link rel="stylesheet" href="/src/css/bootstrap.css">
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include "../../php/db.php";

    $board_no = $_GET["board_no"];
    echo $board_no."번째 글 내용<br>";

    $sql = "SELECT board_no, board_title, board_content, board_user, board_date FROM board WHERE board_no = ".$board_no."";
    $result = mysqli_query($conn,$sql);
    if($result) {
        echo "조회성공";
    } else {
        echo "결과없음 : ".mysqli_error($conn);
    }
    ?>
    <br>

    <?php
    $row = mysqli_fetch_array($result);
    ?>
    
        글 제목 : <?php echo $row["board_title"]; ?><br>
        작성자 : <?php echo $row["board_user"]; ?><br>
        작성 일자 : <?php echo $row["board_date"]; ?><br>
        글 내용 : <?php echo $row["board_content"]; ?><br>

    <?php
    
    ?>

    <!--  부트스트랩 js 사용 -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="/src/js/bootstrap.js"></script>
</body>
</html>