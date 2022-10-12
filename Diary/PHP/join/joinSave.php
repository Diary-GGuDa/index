<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN -  찾기 완료</title>
    <link rel="stylesheet" href="../../assets/css/style.css">
</head>
<body>
    <div class="login__popup">
        <div class="login__inner">
            <div class="login__header">
                <img src="../../assets/img/SingUp_complete_logo.png" alt="">
                <h3>COMPLETE</h3>
<?php
    include "../../connect/connect.php";

    $youName = $_POST['youName'];
    $youEmail = $_POST['youEmail'];
    $youPass = $_POST['youPass'];
    $youBirth = $_POST['youBirth'];
    $youGender = $_POST['youGender'];
    $searchQA = $_POST['searchQA'];
    $youQA = $_POST['youQA'];
    
    $regTime = time();

    $youName = $connect -> real_escape_string(trim($youName));
    $youEmail = $connect -> real_escape_string(trim($youEmail));
    $youPass = $connect -> real_escape_string(trim($youPass));
    $youBirth = $connect -> real_escape_string(trim($youBirth));
    $youGender = $connect -> real_escape_string(trim($youGender));
    $searchQA = $connect -> real_escape_string(trim($searchQA));
    $youQA = $connect -> real_escape_string(trim($youQA));

    $youPass = sha1("web".$youPass);

    // 회원가입
    $sql = "INSERT INTO myMember(youEmail, youName, youPass, youBirth, youGender, searchQA, youQA, regTime) VALUES('$youEmail', '$youName', '$youPass', '$youBirth', '$youGender', '$searchQA', '$youQA', '$regTime' )";
    $result = $connect -> query($sql);
    
    if($result){
        echo "<p class='loginComple-word'>회원가입을 축하드려요!<br>
        꾸다를 통해 진정한 다꾸인이 되기를 바랄게요!</p>";
    } else {
        echo "에러발생 -- 관리자에게 문의하세요!";
    }

?>
                <div class="login-txt">
                </div>
                <img class="login-cross"src="../../assets/img/login_cross.png" alt="">
            </div>
            <div class="login__cont">
                <form name="search" action="login.php" method="post">
                    <fieldset>
                        <legend class="ir">회원가입 완료 영역입니다.</legend>
                        <!-- <p class="loginComple-word">회원가입을 축하드려요!<br>
                            꾸다를 통해 진정한 다꾸인이 되기를 바랄게요!
                        </p> -->
                        <hr class="login-divider">
                        <button type="submit" class="input__Btn">로그인 하러가기</button>
                        <button type="submit" class="input__Btn white">닫기</button>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</body>
</html>