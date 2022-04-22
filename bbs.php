<?php require('lib/top.php'); ?>

<?php require('_bbs1page.php'); ?>
    <!-- ##### BBS Area Start ##### -->
    <div class="blog-area section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-9">

                    <?php
                        if (isset($_SESSION['id'])) {
                    ?>  
                        <button onclick="location.href='bbs1write.php'">글작성</button>
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
                                            <button onclick="location.href='bbs1mod.php?no=<?=$bbs['no'];?>'">수정</button>
                                            <button onclick="location.href='_bbs1delete.php?no=<?=$bbs['no'];?>'">삭제</button>
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
                                <li class="page-item active"><a href="bbs.php?current_page=1">&laquo;</a></li>

                                <?php if ($current_page > 1) { ?>    
                                    <li class="page-item active"><a href="bbs.php?current_page=<?=$prev_page;?>">앞</a></li>
                                <?php } else { ?>
                                    <li class="page-item active"><a href="#">앞</a></li>        
                                <?php } ?>  

                                <?php if ($current_page < $end_page) { ?>        
                                    <li class="page-item active"><a href="bbs.php?current_page=<?=$next_page;?>">뒤</a></li>
                                <?php } else { ?> 
                                    <li class="page-item active"><a href="#">뒤</a></li>
                                <?php } ?>  

                                    <li class="page-item active"><a href="bbs.php?current_page=<?=$end_page;?>">&raquo;</a></li>
                                <p class="pl-3">현재 페이지 <?=$current_page;?> / 총 페이지 <?=$end_page;?></p>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### BBS Area End ##### -->
<?php require('lib/bottom.php'); ?>