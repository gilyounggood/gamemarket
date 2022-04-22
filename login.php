<?php require('lib/top.php'); ?>

    <!-- 로그인 화면 시작 -->
    <div class="center">
        <h1>로그인</h1>
        <form action="_login.php" method="post">
            <div class="txt_field">
                <input name="id" type="email" required>
                <span></span>
                <label>이메일 주소</label>
            </div>
                <div class="txt_field">
                    <input name="pw" type="password" required>
                    <span></span>
                    <label>비밀번호</label>
            </div>
            <button type="submit" value="Login">로그인</button>
            <div class="signup_link">
                회원이 아니신가요? <a href="join.php">회원가입 하러 가기</a>
            </div>
        </form>
    </div>

    <!-- 로그인 화면 끝 -->    

<?php require('lib/bottom.php'); ?>