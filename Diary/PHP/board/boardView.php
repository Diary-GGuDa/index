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
            <div class="board">
                <a class="modify_btn" href="boardModify.php?myBoardID=<?=$_GET['myBoardID']?>">수정</a>
                <!-- <a href="boardModify.php?myBoardID=<?=$myBoardID?>">수정</a> -->
                <div class="board_info">
                    <img class="notice_logo" src="../../assets/img/site_board_notice_logo.png" alt="">
                    <h2>NOTICE</h2>
                    <p>공지사항은 이곳에서 확인해주세요!</p>
                    <img src="../../assets/img/site_board_notice_cross.png" alt="">
                    <!-- <div class="section_selector">
                        <a class="select" href="#">공지사항</a>
                        <a href="#">이벤트</a>
                    </div> -->
                </div>
                <div class="section_selector">
                    <div class="section_container">
                        <a class="select" href="board.html">공지사항</a>
                        <a href="board.html">이벤트</a>
                    </div>
                    <a class="section_search_button" href="board_Search.html">
                        <img src="../../assets/img/search_btn.png" alt="">
                    </a>
                </div>
                <hr>
                <div class="board__view">   
<?php
    $myBoardID = $_GET['myBoardID'];

    //보드뷰 + 1(업데이트)
    $sql = "UPDATE myBoard SET boardView = boardView + 1 WHERE myBoardID = {$myBoardID}";
    $connect -> query($sql);
  
    // echo $myBoardID;
    $sql = "SELECT b.boardTitle, b.boardSection , b.regTime, b.boardView, b.boardContents FROM myBoard b JOIN myMember m ON(m.myMemberID = b.myMemberID) WHERE b.myBoardID = {$myBoardID}";
    $result = $connect -> query($sql);


    if($result){
       $info = $result -> fetch_array(MYSQLI_ASSOC);
    //    echo "<pre>";
    //    var_dump($info);
    //    echo "</pre>";
        echo "<h3 class='view-title'>".$info['boardTitle']."</h3>";
        echo "<div class='view-info'>";
        echo "<p class='view-time'> ".$info['boardSection']." | ".date('Y-m-d H:i',$info['regTime'])." </p>";
        echo "<p class='view-num'> 조회수 | ".$info['boardView']." </p>";
        echo "</div>";
        echo " <div class='view-cont'>".$info['boardContents']."</div>";
   }

   
?>
                    <!-- <h3 class="view-title">대전 다이어리 꾸미기 페스테벌 일정 및 장소</h3>
                    <div class="view-info">
                        <p class="view-time"> notice | 2022.09.19 </p>
                        <p class="view-num"> 조회수 | 3 </p>
                    </div>
                    <div class="view-cont">
                        <em>또 모르지 내 마음이 저 날씨처럼 바뀔지 날 나조차 다 알 수 없으니</em><br><br>

                        그게 뭐가 중요하니 지금 네게 완전히 푹 빠졌단 게 중요한 거지 <br>
                        아마 꿈만 같겠지만 분명 꿈이 아니야 달리 설명할 수 없는 이건 사랑일 거야 <br>
                        방금 내가 말한 감정 감히 의심하지 마 그냥 좋다는 게 아냐 What's after 'LIKE'? <br><br>

                        You and I It's more than 'LIKE'<br>
                        L 다음 또 O 다음 난 yeah You and I<br>
                        It's more than 'LIKE' What's after 'LIKE'? What's after 'LIKE'?<br><br>

                        조심해 두 심장에 핀 새파란 이 불꽃이 저 태양보다 뜨거울 테니<br>
                        난 저 위로 또 아래로 내 그래프는 폭이 커 Yeah that's me<br><br>

                        두 번 세 번 피곤하게 자꾸 질문하지 마 내 장점이 뭔지 알아? 바로 솔직한 거야<br>
                        방금 내가 말한 감정 감히 의심하지 마 그냥 좋다는 게 아냐 What's after 'LIKE'?
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</body>
<script src="javascript/board.js"></script>
</html>