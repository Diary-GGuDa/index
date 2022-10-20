<?php 
    include "../../connect/connect.php";
    include "../../connect/session.php";
    // include "../../connect/sessionCheck.php";
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>공지사항</title>
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="stylesheet" href="../../assets/css/board.css">
    <link rel="stylesheet" href="../../assets/css/faq.css">
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
                    <h2>FAQ</h2>
                    <img src="../../assets/img/site_board_notice_cross.png" alt="">
                    <p>궁금하신 부분들에 대해 정리해봤어요!</p>
                </div>
                <div class="faq_search_cont">
                    <!-- <div class="section_container">
                        <a class="select" href="board.php">공지사항</a>
                        <a href="../event/event.php"">이벤트</a>
                    </div> -->
                    <form action="faq_search.php" name="faq_search" method="get" id="faq_search">
                        <fieldset>
                            <legend class="ir">게시판 검색 영역</legend>
                            <!-- <select name="searchOption" id="searchOption">
                                <option value="title">제목</option>
                                <option value="content">내용</option>
                                <option value="name">닉네임</option>
                            </select> -->
                            <input type="search" name="searchKeyword" id="searchKeyword" placeholder="질문을 검색하세요!"
                            aria-label="search" class="faq_search" required>
                        </fieldset>
                    </form>
                    <!-- <a class='write_btn' href='boardWrite.php'>글쓰기</a> -->
                </div>
                <!-- <div class="board_list">
                    <div class="board_list_inner">
                        <div class='board_list_header'>
                            <span>No.</span>
                            <span>PROFILE</span>
                            <span>TITLE</span>
                            <span>BOARD</span>
                            <span>DATE</span>
                            <span>VIEW</span>
                            <span>NAME</span>
                        </div>
                    </div>
                </div> -->
                <div class="faq_list">
                    <div class="faq_list_inner">
                        <details>
                            <summary class="faq_title">네이버가 뭔가요?</summary>
                            <div class="faq_contents">메인화면은 네이버 서비스 시작 이래 웹페이지 디자인 트렌드가 사실적인 묘사에서 심플하고 직관적인 묘사를 중시하는 방향으로 변화함에 따라, 화면 상단에 있는 일명 '초록창'이라 불리는 검색창과 실시간 검색어 서비스라는 큰 틀은 유지한 채 지속적으로 개편되어 왔다. 실시간 검색어 서비스의 경우 사회 이슈나 트렌드 파악에 많은 도움이 되었으나, 선거 등 각종 커다란 사회 및 정치적 이슈 등이 발생할 때마다 조작 등의 의혹이 불거져 온 탓에 2020년 4월 15일 21대 총선 투표 종료 이후 검색어 설정을 한 상태에서만 실시간 검색어가 표시되도록 정책이 바뀌었으나, 2021년 2월 25일부로 완전 폐지되었다.# 현재 서비스 중인 항목은 아래와 같고 폐지한 것은 취소선 처리했다.</div>
                        </details>
                        <details>
                            <summary class="faq_title">네이버가 뭔가요?</summary>
                            <div class="faq_contents">메인화면은 네이버 서비스 시작 이래 웹페이지 디자인 트렌드가 사실적인 묘사에서 심플하고 직관적인 묘사를 중시하는 방향으로 변화함에 따라, 화면 상단에 있는 일명 '초록창'이라 불리는 검색창과 실시간 검색어 서비스라는 큰 틀은 유지한 채 지속적으로 개편되어 왔다. 실시간 검색어 서비스의 경우 사회 이슈나 트렌드 파악에 많은 도움이 되었으나, 선거 등 각종 커다란 사회 및 정치적 이슈 등이 발생할 때마다 조작 등의 의혹이 불거져 온 탓에 2020년 4월 15일 21대 총선 투표 종료 이후 검색어 설정을 한 상태에서만 실시간 검색어가 표시되도록 정책이 바뀌었으나, 2021년 2월 25일부로 완전 폐지되었다.# 현재 서비스 중인 항목은 아래와 같고 폐지한 것은 취소선 처리했다.</div>
                        </details>
                        <details>
                            <summary class="faq_title">네이버가 뭔가요?</summary>
                            <div class="faq_contents">메인화면은 네이버 서비스 시작 이래 웹페이지 디자인 트렌드가 사실적인 묘사에서 심플하고 직관적인 묘사를 중시하는 방향으로 변화함에 따라, 화면 상단에 있는 일명 '초록창'이라 불리는 검색창과 실시간 검색어 서비스라는 큰 틀은 유지한 채 지속적으로 개편되어 왔다. 실시간 검색어 서비스의 경우 사회 이슈나 트렌드 파악에 많은 도움이 되었으나, 선거 등 각종 커다란 사회 및 정치적 이슈 등이 발생할 때마다 조작 등의 의혹이 불거져 온 탓에 2020년 4월 15일 21대 총선 투표 종료 이후 검색어 설정을 한 상태에서만 실시간 검색어가 표시되도록 정책이 바뀌었으나, 2021년 2월 25일부로 완전 폐지되었다.# 현재 서비스 중인 항목은 아래와 같고 폐지한 것은 취소선 처리했다.</div>
                        </details>
                        <details>
                            <summary class="faq_title">네이버가 뭔가요?</summary>
                            <div class="faq_contents">메인화면은 네이버 서비스 시작 이래 웹페이지 디자인 트렌드가 사실적인 묘사에서 심플하고 직관적인 묘사를 중시하는 방향으로 변화함에 따라, 화면 상단에 있는 일명 '초록창'이라 불리는 검색창과 실시간 검색어 서비스라는 큰 틀은 유지한 채 지속적으로 개편되어 왔다. 실시간 검색어 서비스의 경우 사회 이슈나 트렌드 파악에 많은 도움이 되었으나, 선거 등 각종 커다란 사회 및 정치적 이슈 등이 발생할 때마다 조작 등의 의혹이 불거져 온 탓에 2020년 4월 15일 21대 총선 투표 종료 이후 검색어 설정을 한 상태에서만 실시간 검색어가 표시되도록 정책이 바뀌었으나, 2021년 2월 25일부로 완전 폐지되었다.# 현재 서비스 중인 항목은 아래와 같고 폐지한 것은 취소선 처리했다.</div>
                        </details>
                    </div>
                </div>
                    <!-- test -->
            </div>
        </div>
        <?php include "../include/footer.php" ?>
    </div>
</body>
<script src="../../assets/javascript/board.js"></script>
<!-- <script src="../../assets/javascript/search.js"></script> -->
<script src="../../assets/javascript/common.js"></script>
</html>