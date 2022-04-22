<?php require('lib/top.php'); ?>

<?php
    $no = $_GET['no'];
    $current_page = $_GET['current_page'];
?>

<?php require('_bbsview1page.php'); ?>

    <!-- ##### Breadcumb Area Start ##### -->
    <section class="breadcumb-area bg-img bg-overlay" style="background-image: url(img/bg-img/breadcumb3.jpg);">
        <div class="bradcumbContent">
            <p>게시판을 조회해보세요</p>
            <h2>게시판 조회</h2>
        </div>
    </section>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Blog Area Start ##### -->
    <div class="blog-area section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-12">

                    <?php
                        if (isset($_SESSION['id'])) {
                    ?>  
                        <button onclick="location.href='bbs.php?current_page=<?=$current_page;?>'">목록으로</button>
                        <hr>   
                    <?php        
                        }

                        foreach($result as $bbs)  {                                                  
                    ?>

                    <!-- Single Post Start -->
                    <div class="single-blog-post mb-100 wow fadeInUp" data-wow-delay="100ms">
                        <!-- Post Thumb -->
                        <div class="blog-post-thumb mt-30">
                            <?php if($bbs['img_file']) { ?>
                                <a href="#"><img src="bbs_img/<?=$bbs['img_file'];?>" alt="bbs image"></a>
                            <?php } else { ?>
                                <a href="#"><img src="bbs_img/noimage.png" alt="no bbs image"></a>
                            <?php } ?>
                            <!-- Post Date -->
                            <div class="post-date">
                                <?php 
                                    if($bbs['mod_date'] != null) {
                                        $day = date("d", strtotime($bbs['mod_date']));
                                        $month = date("F", strtotime($bbs['mod_date']));
                                        $year = date("y", strtotime($bbs['mod_date']));                                        
                                    } else {
                                        $day = date("d", strtotime($bbs['reg_date']));
                                        $month = date("F", strtotime($bbs['reg_date']));
                                        $year = date("y", strtotime($bbs['reg_date']));
                                    }
                                ?>
                                <span><?=$day;?></span>
                                <span><?=$month;?> <?=$year;?></span>
                            </div>
                        </div>

                        <!-- Blog Content -->
                        <div class="blog-content">
                            <!-- Post Title -->
                            <a href="#" class="post-title"><?=$bbs['title'];?></a>
                            <!-- Post Meta -->
                            <div class="post-meta d-flex mb-30">
                                <p class="post-author">작성자:<a href="#"> <?=$bbs['name'];?></a></p>
                                <p class="tags">카테고리:<a href="#"> <?=$bbs['category'];?></a></p>
                            </div>
                            <!-- Post Excerpt -->
                            <p><?=$bbs['content'];?></p>
 
                            <hr>

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
                    <!-- Single Post End -->
                            
                    <?php
                        }
                    ?>


                </div>                              
            </div>            
        </div>
    </div>
    <!-- ##### Blog Area End ##### -->

<?php require('lib/bottom.php'); ?>