<?php require('lib/top.php'); ?>

<!-- 회원정보 화면 시작 -->
    <div class="center2">
        <h1><?=$_SESSION['name'];?>님의 회원정보</h1>
            <form action="#">
                <div class="txt1_field">
                    <label>Email 주소</label>
                    <input name="id" type="email" value="<?=$_SESSION['id'];?>" disabled>
                    <span></span>
                </div>

                <!-- <div class="txt1_field">
                    <label>* 비밀번호</label>
                    <input name="pw" type="password" required>
                    <span></span>
                </div>

                <div class="txt1_field">
                    <label>* 비밀번호 확인</label>
                    <input name="pwc" type="password" required>
                    <span></span>
                </div> -->

                <div class="txt1_field">
                    <label>이름</label>
                    <input name="name" type="text" value="<?=$_SESSION['name'];?>" disabled>
                    <span></span>
                </div>

                <button type="button" onclick="location.href='userChange.php'">정보수정</button>
                <div class="pb"></div>
                <button type="button" onclick="location.href='_signout.php'">회원탈퇴</button>
                <div class="pb"></div>
            </form>
    </div>
<!-- 회원정보 화면 끝 -->

<?php require('lib/bottom.php'); ?>