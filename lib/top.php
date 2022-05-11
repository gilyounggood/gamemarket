<?
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" />

    <!--구글 폰트-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@700&display=swap" rel="stylesheet">

    <!-- 아이콘 -->
    <script src="https://kit.fontawesome.com/81f65674d3.js"
    crossorigin="anonymous">
    </script>
    <script src="main.js" defer></script>
    <title>게임마켓</title>
</head>

<body>
    <!-- 헤더 영역 시작 -->
    <nav class="navbar">
        <div class="navbar__logo">
            <i class="fa-solid fa-gamepad"></i>
            <a href="index.php">게임마켓</a>
        </div>

        <ul class="navbar__menu">   
                <li><a href="index.php">홈</a></li>
                <li><a href="albums-store.php">화면 공유</a></li>
                <li><a href="event.php">이벤트</a></li>
                <li><a href="blog.php">갤러리</a></li>
                <li><a href="bbs.php">유저 커뮤니티</a></li>   
        </ul>

        <!-- 헤더 로그인 영역 -->
        <ul class="navbar__icons">
                <?php if(isset($_SESSION['id'])) { ?>
                    <li><a href="user.php"><?php if(isset($_SESSION['name'])) { echo $_SESSION['name']; } ?></a></li>
                    <li><a href="_logout.php">로그아웃</a></li>
                <?php } else { ?>
                    <li><a href="login.php" id="loginBtn">로그인</a></li>
                    <li><a href="join.php">회원가입</a></li>
                <?php } ?>
        </ul>

        <!-- 반응형 메뉴 아이콘 -->
        <a href="#" class="navbar__toogleBtn">
            <i class="fas fa-bars"></i>
        </a>
</nav>
<!-- 헤더 끝 -->