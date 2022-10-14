<?php 
    if(!isset($_SESSION['myMemberID'])){
        //로그인 페이지 이동
        Header("Location : ../PHP/login/login.php");
        // echo "로그인을 먼저 해주세요. :3";
    }   
?>