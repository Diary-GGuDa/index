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
    <title>다이어리 꾸미기</title>
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="stylesheet" href="../../assets/css/board.css">
</head>
<body>
    <div style="display:none" class="scroll">
        <p>아래로 스크롤 해주세요.</p>
        <img src="../../assets/img/site_intro_scroll.png" alt="">
    </div>
    <div class="wrap">
        <div class="deco__Diary">
            <div class="diary__inner">
                <div class="color__section">
                    <div class="book">
                        이미지
                    </div>
                        <h3>좋아하는 색상을 골라주세요 :3</h3>
                        <legend class="ir">책 색상 선택창입니다.</legend>
                        <ul>
                            <li><a href="bookOpen.php?color=red">레드</a></li>
                            <li><a href="bookOpen.php?color=blue">블루</a></li>
                        </ul>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="../../assets/javascript/board.js"></script>
<!-- <script src="../../assets/javascript/search.js"></script> -->
<script src="../../assets/javascript/common.js"></script>
</html>