<?php
    // 페이지네이션
    
    // 조희
    require('_conn.php');
    $sql = "SELECT * FROM `blog1` WHERE `del_flg`=0";
    $result = mysqli_query($conn, $sql); 

?>