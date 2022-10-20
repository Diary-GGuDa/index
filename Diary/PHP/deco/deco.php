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
    <title>꾸미기</title>
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="stylesheet" href="../../assets/css/board.css">
</head>
<body>
    <div style="display:none" class="scroll">
        <p>아래로 스크롤 해주세요.</p>
        <img src="../../assets/img/site_intro_scroll.png" alt="">
    </div>
    <div class="wrap">
        <div class="site">
            <?php include "../include/header.php" ?>
            <div class="deco_list">
                <div class="deco_list_inner">
                    <div class="decoDiary">
                        <img src="#" alt="">
                        <a href="decoDiary.php"><p>다이어리 만들기</p></a>
                    </div>
                    <div class="decoSticker">
                        <img src="#" alt="">
                        <a href="decoSticker.php"><p>스티커 꾸미기</p></a>
                    </div>
                    <div class="viewSticker">
                        <img src="#" alt="">
                        <a href="viewSticker.php"><p>다른 작품 보러가기</p></a>
                    </div>
                </div>
            </div>
            </div>
        </div>
        <?php include "../include/footer.php" ?>
    </div>
</body>
<script src="../../assets/javascript/board.js"></script>
<!-- <script src="../../assets/javascript/search.js"></script> -->
<script src="../../assets/javascript/common.js"></script>
</html>