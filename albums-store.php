<?php require('lib/top.php'); ?>

<div class="banner">
    <img src="img/게임마켓로고.png" alt="게임마켓로고">
    <span>게임화면 공유 시스템 입니다</span>
</div>

<!-- 화면 공유 페이지 시작 -->
<div class="screen-body">
    <div class="screen">
        <div id="container">
        <h1>게임 아이템 거래 실시간 확인하기</h1>
        <p>버튼 비활성화시 주소 앞에 "https://"를 붙여보세요</p>

        <video id="gum-local" poster="img/모니터대기중.jpg" autoplay playsinline muted></video>
        <div class="screen_btn">
            <button id="startButton" disabled><span>화면공유 시작하기</span></button>
        </div>

        <div id="errorMsg"></div>
        </div>

        <script src="https://webrtc.github.io/adapter/adapter-latest.js"></script>
        <script src="screenshare.js"></script>
        <script src="ga.js"></script>
    </div>
</div>

<?php require('lib/bottom.php'); ?>