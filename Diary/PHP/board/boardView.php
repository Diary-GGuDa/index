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
    <link rel="stylesheet" href="../../assets/css/style.css">
</head>
<body>
    <div style="display:none" class="scroll">
        <p>아래로 스크롤 해주세요.</p>
        <img src="../../assets/img/site_intro_scroll.png" alt="">
    </div>
    <div class="wrap">
        <div class="site">
            <?php include "../include/header.php" ?>

            <div class="board">
                
                <div class="board_info">
                    <img src="../../assets/img/board_header_01.png" class="header_icon_01" alt="">
                    <img src="../../assets/img/board_header_02.png" class="header_icon_02" alt="">
                    <img src="../../assets/img/board_header_03.png" class="header_icon_03" alt="">
                    <img src="../../assets/img/board_header_04.png" class="header_icon_04" alt="">
                    <img src="../../assets/img/board_header_05.png" class="header_icon_05" alt="">
                    
                    <h2>NOTICE</h2>
                    <p>게시물 내용을 확인해주세요!</p>
                    <img src="../../assets/img/site_board_notice_cross.png" alt="">
                </div>
                <div class="section_selector">
                    <div class="section_container">
                        <a class="select" href="board.php">공지사항</a>
                        <a href="../event/event.php">이벤트</a>
                    </div>
                    <form action="boardSearch.php" name="boardSearch" method="get" id="board_search">
                        <fieldset>
                            <legend class="ir">게시판 검색 영역</legend>
                            <select name="searchOption" id="searchOption">
                                <option value="title">제목</option>
                                <option value="content">내용</option>
                                <option value="name">닉네임</option>
                            </select>
                            <input type="search" name="searchKeyword" id="searchKeyword" placeholder="검색어를 입력하세요!"
                            aria-label="search" class="board_search" required>
                        </fieldset>
                    </form>
                    <!-- <a class="section_search_button" href="#">
                        <img src="../../assets/img/search_btn.png" alt="">
                    </a> -->
                    <div class="modify_cont">
                        <a class="modify_btn" href="boardModify.php?myBoardID=<?=$_GET['myBoardID']?>">수정</a>
                        <a class="write_btn" href="boardWrite.php">글쓰기</a>
                    </div>
                </div>
                <hr>
                <div class="board__view">   
<?php
    $myBoardID = $_GET['myBoardID'];

    $currentTitle = $_GET['boardTitle'];
    $preView = $myBoardID-1;
    $nextView = $myBoardID+1;

    // $prevTitle = $currentTitle-1;
    // $nextTitle = $currentTitle+1;

    //보드뷰 + 1(업데이트)
    $sql = "UPDATE myBoard SET boardView = boardView + 1 WHERE myBoardID = {$myBoardID}";
    $connect -> query($sql);

    $sql = "SELECT count(myBoardID) FROM myBoard";
    $result = $connect -> query($sql);
    
    $boardCount = $result -> fetch_array(MYSQLI_ASSOC);
    $boardCount = $boardCount['count(myBoardID)'];

    $connect -> query($sql);
    
    // echo $myBoardID;
    $sql = "SELECT b.boardTitle, b.boardSection, m.youImageFile, b.regTime, b.boardView, b.boardContents FROM myBoard b JOIN myMember m ON(m.myMemberID = b.myMemberID) WHERE b.myBoardID = {$myBoardID}";
    $result = $connect -> query($sql);


    if($result){
       $info = $result -> fetch_array(MYSQLI_ASSOC);
        echo "<h3 class='view-title'>".$info['boardTitle']."</h3>";
        echo "<div class='view-info'>";
        echo "<img src='../../assets/img/blog/".$info['youImageFile']."' alt='프로필 이미지'>";
        echo "<p class='view-time'> ".$info['boardSection']." | ".date('Y-m-d H:i',$info['regTime'])." </p>";
        echo "<p class='view-num'> 조회수 ".$info['boardView']." </p>";
        // echo "<p class='view-like' style='margin-left:10px'>♥️".$info['boardLikesCount']."</p>";
        echo "</div>";
        echo "<div class='view-cont'>".$info['boardContents']."</div>";

        echo "<div class='prev-next-cont'>";
        if($myBoardID <=1){
            echo "<a href = '#' class = 'prev__view' style='background:#7e9eb638'>이전글 없음</a>";
        } else {
            echo "<a href='boardView.php?myBoardID={$preView}' class = 'prev__view'>".'이전글'."</a>";
        }
    
        if($myBoardID >= $boardCount) {
            echo "<a href = '#' class = 'next__view' style='background:#7e9eb638'>다음글 없음</a>";
        } else {
            echo "<a href='boardView.php?myBoardID={$nextView}' class = 'next__view'>".'다음글'."</a>";
        }
        echo "</div>";
   }
?>
                </div>
                <div class="boardComment">
                    <h3>최신 댓글</h3>
                    <div class="comment" id="commentID">
                        <div class="comment__view">
                            <div class="comment__view-img">
                                <img src="../../assers/img/site_header_profile.png" alt="">
                            </div>
                            <div class="comment__view-data">
                                <span class="name">닉네임</span>
                                <span class="data">시간</span>
                            </div>
                            <div class="comment__view-msg">
                                메세지
                            </div>
                        </div>
                        <div class="comment__dat">
                            <a href="#" class="comment__del-dat">댓글 삭제</a>
                            <a href="#" class="comment__del-mod">댓글 수정</a>
                        </div>
                        <div class="comment__delete">
                            <label for="commentDelete-Pass">비밀번호</label>
                            <input type="text" id="commentDelete-Pass" name="commentDelete-Pass">
                            <button id="commentDelete-Cancle">취소</button>
                            <button id="commentDelete-Button">삭제</button>
                        </div>
                        <div class="commemt__modify">
                            <label for="commentModify-Msg">수정내용</label>
                            <input type="text" id="commentModify-Msg" name="commentModify-Msg">
                            <label for="commentModify-Pass">비밀번호</label>
                            <input type="text" id="commentModify-Pass" name="commentModify-Pass">
                            <button id="commentModify-Cancle">취소</button>
                            <button id="commentModify-Button">수정</button>
                        </div>
                        <div class="comment__write">
                            <div class="comment__write__info">
                                <label for="commentName">이름</label>
                                <input type="text" id="commentName" name="commentName" placeholder="이름">
                                <label for="commentPass">비밀번호</label>
                                <input type="text" id="commentPass" name="commentPass" placeholder="비밀번호">
                                <button type="submit" id="commentBtn">댓글 쓰기</button>
                            </div>
                            <div class="comment__write__msg">
                                <label for="commentWrite">댓글을 적어주세요 :3</label>
                                <input type="text" id="commentWrite" name="commentWrite" placeholder="댓글을 적어주세요 :3">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include "../include/footer.php" ?>
    </div>
</body>
<script src="../../assets/javascript/board.js"></script>
<script src="../../assets/javascript/common.js"></script>
</html>