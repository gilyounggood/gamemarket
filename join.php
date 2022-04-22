<?php require('lib/top.php'); ?>

    <!-- 회원가입 화면 시작 -->
    <div class="center2">
        <h1>회원가입</h1>
        <form action="_join.php" method="post">
            <div class="txt_field">
                <input name="id" type="email" required>
                <span></span>
                <label>* Email 주소</label>
            </div>

            <div class="txt_field">
                <input name="pw" type="password" required>
                <span></span>
                <label>* 비밀번호</label>
            </div>

            <div class="txt_field">
                <input name="pwc" type="password" required>
                <span></span>
                <label>* 비밀번호 확인</label>
            </div>

            <div class="txt_field">
                <input name="name" type="text" required>
                <span></span>
                <label>* 이름</label>
            </div>
        <button type="submit">가입하기</button>
        <div class="pb"></div>
    </div>
    <!-- 회원가입 화면 끝 -->

<?php require('lib/bottom.php'); ?>