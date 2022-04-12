<?php require('lib/top.php'); ?>

<?php require('_bbs1page.php'); ?>

    <!-- ##### Breadcumb Area Start ##### -->
    <section class="breadcumb-area bg-img" style="background-image: url(img/회색.png);">
        <div class="bradcumbContent">
            <p>아이템 거래소 입니다</p>
            <h2>아이템 거래소</h2>
        </div>
    </section>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### BBS Area Start ##### -->
    <div class="blog-area section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-9">

                    <?php
                        if (isset($_SESSION['id'])) {
                    ?>  
                        <button class="btn btn-secondary" onclick="location.href='bbs1write.php'">글작성</button>
                        <hr>   
                    <?php        
                        }

                        foreach($result as $bbs) {
                    ?>

                    <!-- Single Post Start -->
                    <div class="single-blog-post mb-30 wow fadeInUp" data-wow-delay="100ms">
                        <!-- BBS Content -->
                        <div class="blog-content">
                            <!-- Post Title -->
                            <div class="post-meta d-flex mb-30">
                                <?php if($bbs['img_file']) { ?>
                                    <img class="mr-5" style="height:50px;" src="bbs_img/<?=$bbs['img_file'];?>" alt="bbs image">
                                <?php } else { ?>
                                    <img class="mr-5" style="height:50px;" src="bbs_img/noimage.png" alt="no bbs image">
                                <?php } ?>   
                                <a href="bbsview.php?no=<?=$bbs['no'];?>&current_page=<?=$current_page;?>" class="pr-5 post-title"><?=$bbs['title'];?></a>
                                <p class="post-author">작성자:<a href="#"> <?=$bbs['name'];?></a></p>
                                <p class="tags">카테고리:<a href="#"> <?=$bbs['category'];?></a></p>
                                <!-- 수정, 삭제 버튼-->
                                <?php 
                                    if(isset($_SESSION['id'])) {
                                        if($_SESSION['id'] == $bbs['id']) { 
                                ?>
                                            <button class="ml-5 btn btn-secondary" onclick="location.href='bbs1mod.php?no=<?=$bbs['no'];?>'">수정</button>
                                            <button class="ml-1 btn btn-secondary" onclick="location.href='_bbs1delete.php?no=<?=$bbs['no'];?>'">삭제</button>
                                <?php 
                                        }
                                    }                             
                                ?>               
                            </div>


                        </div>
                    </div>
                    <!-- Single Post End -->
                            
                    <?php
                        }
                    ?>


                    
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