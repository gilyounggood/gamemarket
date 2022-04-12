<?php require('lib/top.php'); ?>

    <!-- ##### Breadcumb Area Start ##### -->
    <section class="breadcumb-area bg-img" style="background-image: url(img/회색.png);">
        <div class="bradcumbContent">
            <p>로그인 화면 입니다</p>
            <h2>로그인</h2>
        </div>
    </section>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Login Area Start ##### -->
    <section class="login-area section-padding-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-8">
                    <div class="login-content">
                        <h3>Welcome Back</h3>
                        <!-- Login Form -->
                        <div class="login-form">
                            <form action="_login.php" method="post">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">이메일 주소</label>
                                    <input name="id" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="이메일 주소를 입력하세요">
                                    <small id="emailHelp" class="form-text text-muted"><i class="fa fa-lock mr-2"></i>로그인 정보는 다른 곳에 이용하지 않습니다</small>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">비밀번호</label>
                                    <input name="pw" type="password" class="form-control" id="exampleInputPassword1" placeholder="비밀번호를 입력하세요">
                                </div>
                                <button type="submit" class="btn oneMusic-btn mt-30">로그인</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Login Area End ##### -->

<?php require('lib/bottom.php'); ?>