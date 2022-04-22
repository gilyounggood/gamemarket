<?php require('lib/top.php'); ?>

<?php require('_blog1page.php'); ?>
    <!-- ##### Blog Area Start ##### -->
    <div class="blog-area section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-9">

                    <?php
                        if (isset($_SESSION['id'])) {
                    ?>  
                        <button onclick="location.href='blog1write.php'">글작성</button>
                        <hr>   
                    <?php        
                        }

                        foreach($result as $blog) {
                    ?>

                    <!-- Single Post Start -->
                    <div class="single-blog-post mb-100 wow fadeInUp" data-wow-delay="100ms">
                        <!-- Post Thumb -->
                        <div class="blog-post-thumb mt-30">
                            <?php if($blog['img_file']) { ?>
                                <a href="#"><img src="blog_img/<?=$blog['img_file'];?>" alt="blog image"></a>
                            <?php } else { ?>
                                <a href="#"><img src="blog_img/noimage.png" alt="no blog image"></a>
                            <?php } ?>
                            <!-- Post Date -->
                            <div class="post-date">
                                <?php 
                                    if($blog['mod_date'] != null) {
                                        $day = date("d", strtotime($blog['mod_date']));
                                        $month = date("F", strtotime($blog['mod_date']));
                                        $year = date("y", strtotime($blog['mod_date']));                                        
                                    } else {
                                        $day = date("d", strtotime($blog['reg_date']));
                                        $month = date("F", strtotime($blog['reg_date']));
                                        $year = date("y", strtotime($blog['reg_date']));
                                    }
                                ?>
                                <span><?=$day;?></span>
                                <span><?=$month;?> <?=$year;?></span>
                            </div>
                        </div>

                        <!-- Blog Content -->
                        <div class="blog-content">
                            <!-- Post Title -->
                            <a href="#" class="post-title"><?=$blog['title'];?></a>
                            <!-- Post Meta -->
                            <div class="post-meta d-flex mb-30">
                                <p class="post-author">By<a href="#"> <?=$blog['name'];?></a></p>
                                <p class="tags">in<a href="#"> <?=$blog['category'];?></a></p>
                            </div>
                            <!-- Post Excerpt -->
                            <p><?=$blog['content'];?></p>
 
                            <hr>

                            <!-- 수정, 삭제 버튼-->
                            <?php 
                                if(isset($_SESSION['id'])) {
                                    if($_SESSION['id'] == $blog['id']) { 
                            ?>
                                        <button onclick="location.href='blog1mod.php?no=<?=$blog['no'];?>'">수정</button>
                                        <button onclick="location.href='_blog1delete.php?no=<?=$blog['no'];?>'">삭제</button>
                            <?php 
                                    }
                                }                             
                            ?>               

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
                                <li class="page-item active"><a href="blog.php?current_page=1">&laquo;</a></li>

                                <?php if ($current_page > 1) { ?>    
                                    <li class="page-item active"><a href="blog.php?current_page=<?=$prev_page;?>">앞</a></li>
                                <?php } else { ?>
                                    <li class="page-item active"><a href="#">앞</a></li>        
                                <?php } ?>  

                                <?php if ($current_page < $end_page) { ?>        
                                    <li class="page-item active"><a href="blog.php?current_page=<?=$next_page;?>">뒤</a></li>
                                <?php } else { ?> 
                                    <li class="page-item active"><a href="#">뒤</a></li>
                                <?php } ?>     
                                    <li class="page-item active"><a href="blog.php?current_page=<?=$end_page;?>">&raquo;</a></li>
                                <p class="pl-3">현재 페이지 <?=$current_page;?> / 총 페이지 <?=$end_page;?></p>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Blog Area End ##### -->
<?php require('lib/bottom.php'); ?>