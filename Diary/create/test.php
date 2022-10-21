<?php 
    include "../connect/connect.php";

    $sql = "CREATE TABLE testID (";
    $sql .= "myMemberID int(10) unsigned NOT NULL auto_increment,";
    $sql .= "testImageFile varchar(100) DEFAULT NULL,";
    $sql .= "testImageSize varchar(100) DEFAULT NULL,";
    $sql .= "color varchar(20) NOT NULL,";
    $sql .= "PRIMARY KEY (myMemberID)";
    $sql .= ") charset=utf8;";
    
    $connect -> query($sql);

?>
