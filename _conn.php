<?php
session_start();
    // 호스트, 유저명, 비밀번호, DB명, 포트번호
    $conn = mysqli_connect("localhost", "gilyounggood", "dl1rl2f3du4d!", "gilyounggood"); // $conn = new mysqli . "3306" localhost
    mysqli_query($conn, "set names utf8");
?>