<?php 
     include "../connect/connect.php";

    $sql = "CREATE TABLE myReply(";
    $sql .= "myReplyID int(10) unsigned NOT NULL auto_increment,";
    $sql .= "myMemberID int(10) unsigned NOT NULL,";
    $sql .= "ReplyName varchar(30) NOT NULL,";
    $sql .= "ReplyPass varchar(30) NOT NULL,";
    $sql .= "ReplyComment longtext NOT NULL,";
    $sql .= "regTime int(20) NOT NULL,";
    $sql .= "PRIMARY KEY (myReplyID)";
    $sql .= ") default charset=utf8;";
    
    $connect -> query($sql);

?>