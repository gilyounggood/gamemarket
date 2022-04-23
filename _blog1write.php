<?php
session_start();

    $id = $_SESSION['id'];
    $name = $_SESSION['name'];
    $title = $_POST['title'];
    $category = $_POST['category'];
    $content = $_POST['content'];

    $img_file = $_FILES['img_file'];
    $img_size = $_FILES['img_file'];['size'];

    require('_blog_file_upload.php');

    if($result) {
        // 파일이 있을 경우
        $sql = "INSERT INTO `blog1` (`name`, `title`, `category`, `content`, `id`, `img_file`, `img_size`) VALUE ('$name', '$title', '$category', '$content', '$id', '$file_name', '$img_size')";   
    } else {
        // 파일이 없는 경우
        $sql = "INSERT INTO `blog1` (`name`, `title`, `category`, `content`, `id`) VALUE ('$name', '$title', '$category', '$content', '$id')";
    }

    require('_conn.php');
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo "<script>alert('글 작성이 완료되었습니다.');location.href='blog.php'</script>";        
    }
?>