<?php require('lib/top.php'); ?>

<?php require('_bbs1page.php'); ?>

    <!-- ##### Breadcumb Area Start ##### -->
    <section class="breadcumb-area bg-img" style="background-image: url(img/회색.png);">
        <div class="bradcumbContent">
            <h2>검색 결과</h2>
        </div>
    </section>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### BBS Area Start ##### -->
    <div class="blog-area section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-9">

                    <!-- Single Post Start -->
                    <div class="single-blog-post mb-30 wow fadeInUp">

                    </div>
                    <!-- Single Post End -->

         
                    <!-- Pagination -->
                    <div class="oneMusic-pagination-area wow fadeInUp" data-wow-delay="300ms">
                        <nav>
                            <ul class="pagination">
                                <li class="page-item active"><a class="btn btn-secondary" href="bbs.php?current_page=1">&laquo;</a></li>

                                <?php if ($current_page > 1) { ?>    
                                    <li class="page-item active"><a class="btn btn-secondary" href="bbs.php?current_page=<?=$prev_page;?>">앞</a></li>
                                <?php } else { ?>
                                    <li class="page-item active"><a class="btn btn-secondary" href="#">앞</a></li>        
                                <?php } ?>  

                                <?php if ($current_page < $end_page) { ?>        
                                    <li class="page-item active"><a class="btn btn-secondary" href="bbs.php?current_page=<?=$next_page;?>">뒤</a></li>
                                <?php } else { ?> 
                                    <li class="page-item active"><a class="btn btn-secondary" href="#">뒤</a></li>
                                <?php } ?>  

                                    <li class="page-item active"><a class="btn btn-secondary" href="bbs.php?current_page=<?=$end_page;?>">&raquo;</a></li>
                                <p class="pl-3">현재 페이지 <?=$current_page;?> / 총 페이지 <?=$end_page;?></p>
                            </ul>
                        </nav>
                    </div>
                </div>


                  <!-- 사이드 추가시 이곳에서 -->
                

            </div>
        </div>
    </div>
    <!-- ##### BBS Area End ##### -->

    <!-- ##### Contact Area Start ##### -->
    <section class="contact-area section-padding-100" style="background-image: url(img/회색.png);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading white">
                        <p>게임 아이템 거래소</p>
                        <h2>게임마켓</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Contact Area End ##### -->

<?php require('lib/bottom.php'); ?>