<!--login-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>find_id</title>
    <style>
        .box{
    width: 300px;
    background-color: skyblue ;
    margin-left: 10px;
    padding: 20px;
    border-radius: 5px;
    margin-left: auto;
    margin-right: auto;
    
    border: 2px solid black;
    text-align: center;
}
    </style>
</head>
<body>
    <form action="find_pwd_f.php" method="post">
        <div class="box">
            <p>아이디 : <input type="text" name="id" id="id"></p>
            <p>생년월일 8자리 : <input type="text" name="birth" id="birth"></p>
            <p><input type="submit" value="비밀번호 찾기"></p>
        </div>
    </form>
</body>
</html>