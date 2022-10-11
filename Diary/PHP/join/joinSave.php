<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN -  찾기 완료</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <div class="login__popup">
        <div class="login__inner">
            <div class="login__header">
                <img src="../../assets/img/SingUp_complete_logo.png" alt="">
                <h3>COMPLETE</h3>
                <div class="login-txt">
                    <p>회원가입이 완료 되었습니다!</p>  
                </div>
                <img class="login-cross"src="../../assets/img/login_cross.png" alt="">
            </div>
            <div class="login__cont">
                <form name="search" action="searchSave.php" method="post">
                    <fieldset>
                        <legend class="ir">회원가입 완료 영역입니다.</legend>
                        <p class="loginComple-word">회원가입을 축하드려요!<br>
                            꾸다를 통해 진정한 다꾸인이 되기를 바랄게요!
                        </p>
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