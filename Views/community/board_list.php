<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>community list</title>
</head>
<body>
    <?php
        include "../../php/db.php";

        $currentPage = 1;
        if(isset($_GET['currentPage'])) {
            $currentPage = $_GET['currentPage'];
        }

        $sqlCount = "SELECT count(*) FROM board";
        $resultCount = mysqli_query($conn,$sqlCount);
        if($rowCount = mysqli_fetch_array($resultCount)) {
            $totalRowNum = $rowCount["count(*)"];
        }

        if($resultCount) {
            echo "행 갯수 조회 성공 : ".$totalRowNum."<br>";
        } else {
            echo "결과 없음 : ".mysqli_error($conn);
        }
    ?>

    <a href="board_add_form.php">글 쓰기</a>
    <br><br>
</body>
</html>