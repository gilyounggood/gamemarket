<?php
    require('_conn.php');


    $no = $_SESSION['no'];
    $name = $_POST['name'];
    $pw = $_POST['pw'];
    $pwc = $_POST['pwc'];
    $id = $_SESSION['id'];

    // 비밀번호를 잘못 입력한 경우
    if ($pw != $pwc) {
        echo "<script>alert('비밀번호를 확인해주세요.');location.href='user.php'</script>";
    }   

    $sql = "UPDATE `user` SET `name` = '$name', `pw` = '$pw' WHERE `no`=$no";    
    $result = mysqli_query($conn, $sql);

    if ($result) {
        $sql = "SELECT * FROM `user` WHERE id='$id'";
        $result = mysqli_query($conn, $sql);
        foreach($result as $user) {
            $_SESSION['no'] = $user['no'];
            $_SESSION['id'] = $user['id'];
            $_SESSION['name'] = $user['name'];
        }
        echo "<script>alert('변경이 완료되었습니다.');location.href='user.php'</script>";
    }
?>