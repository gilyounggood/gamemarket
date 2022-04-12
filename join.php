<?php require('lib/top.php'); ?>

    <!-- ##### Breadcumb Area Start ##### -->
    <section class="breadcumb-area bg-img" style="background-image: url(img/회색.png);">
        <div class="bradcumbContent">
            <p>회원가입 화면 입니다</p>
            <h2>회원가입</h2>
        </div>
    </section>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Login Area Start ##### -->
    <section class="login-area section-padding-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-8">
                    <div class="login-content">
                        <h3>환영합니다</h3>
                        <!-- Login Form -->
                        <div class="login-form">
                            <form action="_join.php" method="post">
                                <div class="form-group">
                                    <label for="exampleInputEmail1" class="text-danger">* Email 주소</label>
                                    <input name="id" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="* E-mail 주소를 입력해 주세요">
                                    <small id="emailHelp" class="form-text text-muted"><i class="fa fa-lock mr-2"></i>회원가입 정보는 다른 곳에 이용하지 않습니다</small>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputPassword1" class="text-danger">* 비밀번호</label>
                                    <input name="pw" type="password" class="form-control" id="exampleInputPassword1" placeholder="* 비밀번호를 입력해 주세요">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputPassword1" class="text-danger">* 비밀번호 확인</label>
                                    <input name="pwc" type="password" class="form-control" id="exampleInputPassword1" placeholder="* 비밀번호를 한 번 더 입력해 주세요">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputPassword1" class="text-danger">* 이름</label>
                                    <input name="name" type="text" class="form-control" placeholder="* 이름을 입력해 주세요">
                                </div>

                                <button type="submit" class="btn oneMusic-btn mt-30">가입하기</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Login Area End ##### -->

<?php require('lib/bottom.php'); ?>