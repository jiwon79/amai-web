<!DOCTYPE html>
<html lang="en">
<head>
    <!-- 부트스트랩 css 사용 -->
    <link rel="stylesheet" href="/src/css/bootstrap.css">
    <link rel="stylesheet" href="/src/css/style.css">
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>community list</title>
</head>
<body>
    <a href="../../index.php">amai web</a>
    <br>

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
        $_SESSION['rownum'] = $totalRowNum;

        if($resultCount) {
            echo "행 갯수 조회 성공 : ".$totalRowNum."<br>";
        } else {
            echo "결과 없음 : ".mysqli_error($conn);
        }

        $rowPerPage = 5;
        $begin = ($currentPage - 1) * $rowPerPage;
        $sql = "SELECT board_no, board_user, board_title, board_date FROM board order by board_no desc limit ".$begin.",".$rowPerPage."";
        $result = mysqli_query($conn, $sql);

        if($result) {
            echo "조회 성공";
        } else {
            echo "결과없음 : ".mysqli_error($conn);
        }
    ?>
    <table>
        <tr>
            <td>board_no</td>
            <td>board_title</td>
            <td>board_user</td>
            <td>board_date</td>
        </tr>
        <?php
            while($row = mysqli_fetch_array($result)) {
        ?>
            <tr>
                <td>
                    <?php echo $row["board_no"] ?>
                </td>
                
                <td>
                    <?php
                        echo "<a href='board_detail.php?board_no=".$row["board_no"]."'>";
                        echo $row["board_title"];
                        echo "</a>";
                    ?>
                </td>

                <td>
                    <?php echo $row["board_user"]; ?>
                </td>
                
                <td>
                    <?php echo $row["board_date"]; ?>
                </td>
            </tr>
        <?php
            }
        ?>
    </table>

    <?php
        if($currentPage > 1) {
            echo "<a href='board_list.php?currentPage=".($currentPage-1)."'>이전</a>";
        }

        $lastPage = ($totalRowNum-1) / $rowPerPage;

        if($currentPage <= $lastPage) {
            echo "<a href='board_list.php?currentPage=".($currentPage+1)."'>다음</a>";
        }
    ?>
    <a href="board_add_form.php">글 쓰기</a>
    
    <!--  부트스트랩 js 사용 -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="/src/js/bootstrap.js"></script>
</body>
</html>