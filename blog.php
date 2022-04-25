<?php require('lib/top.php'); ?>

<?php require('_blog1page.php'); ?>
<!-- 블로그 화면 시작 -->
<div class="blog_body">
        <div class="banner">
            <img src="img/게임마켓로고.png" alt="게임마켓로고">
            <span>게임 이미지 갤러리입니다</span>
        </div>
        <?php
            if (isset($_SESSION['id'])) {
        ?>  
            <a href="blog1write.php" class="blog_btn">글작성</a>
        <?php        
            }
            foreach($result as $blog) {
        ?>
    <div class="container">
        <div class="blog-post">
            <div class="blog-container">
                <div class="blog-post_img">
                    <?php if($blog['img_file']) { ?>
                        <img src="blog_img/<?=$blog['img_file'];?>" alt="blog image">
                    <?php } else { ?>
                        <img src="blog_img/noimage.png" alt="no blog image">
                    <?php } ?>
                </div>
                <div class="blog-text">
                    <div>
                        <!-- 게시글 날짜 -->
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
                        <span class="blog-date"><?=$year;?>년</span><span class="blog-date"><?=$month;?>/</span><span class="blog-date"><?=$day;?></span>
                        <span>작성자:</span><span class="blog-user"><?=$blog['name'];?></span>
                        <span>카테고리:</span><span class="blog-user"><?=$blog['category'];?></span>
                    </div>
                    <!-- 게시글 정보 표시 -->    
                    <p class="blog-title"><?=$blog['title'];?></p>
                    <p><?=$blog['content'];?></p> 
                    <!-- 수정, 삭제 버튼-->
                    <div>
                        <?php 
                            if(isset($_SESSION['id'])) {
                                if($_SESSION['id'] == $blog['id']) { 
                        ?>
                                <a href="blog1mod.php?no=<?=$blog['no'];?>" class="blog_btn1">수정</a>
                                <a href="_blog1delete.php?no=<?=$blog['no'];?>" class="blog_btn1">삭제</a>
                        <?php 
                                }
                            }                             
                            ?>                       
                    </div>
                </div>
            </div>
        </div>
    </div>        
</div>
<?php } ?> <!-- div 밖으로 꺼내주기 -->
<!-- 페이지네이션 -->
<div class="footer-pb">
    <section>
        <ul class="pagination">
            <a href="blog.php?current_page=1"><li>&laquo;</li></a>

            <?php if ($current_page > 1) { ?>    
                <a href="blog.php?current_page=<?=$prev_page;?>"><li>앞</li></a>
            <?php } else { ?>
                <a href="#"><li>앞</li></a>      
            <?php } ?>  

            <?php if ($current_page < $end_page) { ?>        
                <a href="blog.php?current_page=<?=$next_page;?>"><li>뒤</li></a>
            <?php } else { ?> 
                <a href="#"><li>뒤</li></a>
            <?php } ?>     
                <a href="blog.php?current_page=<?=$end_page;?>"><li>&raquo;</li></a>
            <li class="active">현재 페이지:<?=$current_page;?></li><li>총 페이지:<?=$end_page;?></li>
        </ul>
    </section>  
</div>         
<!-- 블로그 화면 끝 -->
<?php require('lib/bottom.php'); ?>