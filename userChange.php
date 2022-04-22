<?php require('lib/top.php'); ?>

<!-- 정보수정 화면 시작 -->
    <div class="center3">
        <h1><?=$_SESSION['name'];?>님의 회원정보</h1>
        <div class="login-form">
            <form action="_userChange.php" method="post">
                <div class="txt2_field">
                    <label>Email주소(수정불가)</label>
                    <input name="id" type="email" value="<?=$_SESSION['id'];?>" disabled>
                </div>

                <div class="txt2_field">
                    <label>비밀번호 수정</label>
                    <input name="pw" type="password" placeholder="수정 할 비밀번호 입력">
                </div>

                <div class="txt2_field">
                    <label>비밀번호 수정확인</label>
                    <input name="pwc" type="password" placeholder="수정 된 비밀번호 다시 입력">
                </div>

                <div class="txt2_field">
                    <label>닉네임 수정</label>
                    <input name="name" type="text" class="form-control" value="<?=$_SESSION['name'];?>">
                </div>

                <button type="submit">수정</button>
                <div class="pb"></div>
            </form>
        </div>
    </div>
<!-- 정보수정 화면 끝 -->

<?php require('lib/bottom.php'); ?>