<?php
    include "../../connect/connect.php";
    include "../../connect/session.php";
    include "../../connect/sessionCheck.php";

    echo "<pre>";
    var_dump($_SESSION);
    echo "</pre>";

    $myBoardID = $_GET['myBoardID'];
    // echo $myBoardID;

    $sql = "SELECT myBoardID, boardTitle, boardSection , regTime, boardView, boardContents FROM myBoard WHERE myBoardID = {$myBoardID}";
    $result = $connect -> query($sql);
    
    if($result){
        $info = $result->fetch_array(MYSQLI_ASSOC);
    }

    // $sql = "SELECT myBoardID, boardTitle, boardSection , regTime, boardView, boardContents FROM myBoard WHERE myBoardID = {$myBoardID}";
    // $result = $connect -> query($sql);
    
    // echo $sql;
?>