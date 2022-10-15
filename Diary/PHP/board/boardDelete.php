<?php
    include "../../connect/connect.php";
    include "../../connect/session.php";
    include "../../connect/sessionCheck.php";
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>공지사항</title>
    <link rel="stylesheet" href="../../assets/css/board.css">
</head>
<body>
    <div style="display:none" class="scroll">
        <p>아래로 스크롤 해주세요.</p>
        <img src="../../assets/img/site_intro_scroll.png" alt="">
    </div>
    <div class="wrap">
        <div class="site">
            <div class="hamburger_menu">
                <img class="header_menu_close" src="../../assets/img/login_cross.png" alt="">
                <p>공지사항</p>
                <p>이벤트</p>
                <p>이달의 순위</p>
                <p>일기쓰기</p>
                <p>꾸미기</p>
                <p>정보</p>
                <p>고객센터</p>
            </div>
            <div class="header">
                <div class="header_inner">
                    <img src="../../assets/img/site_header_logo.png" alt="logo">
                    <p>공지사항</p>
                    <p>이벤트</p>
                    <p>이달의 순위</p>
                    <p>일기쓰기</p>
                    <p>꾸미기</p>
                    <p>정보</p>
                    <p>고객센터</p>
                    <div class="profile_cont">
                        <img src="../../assets/img/site_header_profile.png" alt="logo">
                        <img src="../../assets/img/site_header_profile_heart.png" alt="logo">
                    </div>
                    <img class="hamburger_menu_open" src="../../assets/img/hamburger_btn.png" alt="">
                </div>
            </div>
            <div class="remove">
                <div class="remove_info">
                    <img class="notice_logo" src="../../assets/img/site_board_edit_delete.png" alt="">
<?php
    $myBoardID = $_GET['myBoardID'];
    $myBoardID = $connect -> real_escape_string($myBoardID);

    $sql = "DELETE FROM myBoard WHERE myBoardID = {$myBoardID}";
    $connect -> query($sql);

    echo "<h2>삭제완료</h2>";
?>
                    <p class="cross">삭제되었습니다, 하단의 버튼을 눌러 확인해주세요!</p>
                    <img src="../assets/img/site_board_notice_cross.png" alt="">
                    <button style="width:216px;" type="submit" class="input__Btn"><a href="board.php">확인</a></button>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="../../assets/javascript/board.js"></script>
</html>
