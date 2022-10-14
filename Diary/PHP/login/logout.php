<?php 
    include "../../connect/connect.php";

    // unset($_SESSION['myMemberID']) ;
    // unset($_SESSION['youEmail']);
    // unset($_SESSION['youName']);

    session_start();
    session_destroy();

?>

<script>
    alert("You've been logged out");
    location.href ="../login/login.php"
</script>