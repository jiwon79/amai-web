<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add_form</title>
</head>
<body>
    <form action="board_add_action.php" method="POST">
        <div>
            <label for="boardTitle">제목 : </label>
            <input type="text" id="boardTitle" name="boardTitle">
        </div>
        
        <div>
            <label for="boardPw">비밀번호 : </label>
            <input name="boardPw" id="boardPw" type="password" placeholder="Password">
        </div>

        <div>
            <label for="boardContent">글 내용 : </label>
            <textarea name="boardContent" id="boardContent" cols="50" rows="5" placeholder="Content"></textarea>
        </div>

        <div>
            <button type="submit" value="글 입력">글 입력</button>
            <a href="board_list.php">리스트로 돌아가기</a>
        </div>
    </form>
</body>
</html>