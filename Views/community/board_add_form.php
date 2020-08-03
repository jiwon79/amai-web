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
            <label for="">비밀번호 : </label>
            <div>
                <input name="boardPw" id="password" type="password" placeholder="Password">
            </div>
        </div>

        <div>
            <label for="">글 내용 : </label>
            <div>
                <textarea name="boardContent" id="content" cols="50" rows="5" placeholder="Content"></textarea>
            </div>
        </div>

        <div>
            <button type="submit" value="글 입력">글 입력</button>
            <a href="board_list.php">리스트로 돌아가기</a>
        </div>
        
    </form>

    
</body>
</html>