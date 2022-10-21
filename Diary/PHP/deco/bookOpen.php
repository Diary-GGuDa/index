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
<?php
    $color = $_POST['colorOption'];

    $sql = "SELECT color FROM testID WHERE color = '{$color}'";
    $result = $connect -> query($sql);
    var_dump($result);
    if($result){
        $info = $result -> fetch_array(MYSQLI_ASSOC);
        echo $info['color'];
    }



    

?>
</body>
<script src="../../assets/javascript/board.js"></script>
<!-- <script src="../../assets/javascript/search.js"></script> -->
<script src="../../assets/javascript/common.js"></script>
</html>