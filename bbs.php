<?php require('lib/top.php'); ?>

<?php require('_bbs1page.php'); ?>
    <div class="banner">
        <img src="img/게임마켓로고.png" alt="게임마켓로고">
        <span>유저 커뮤니티 입니다</span>
    </div>
<!-- 커뮤니티 화면 시작 -->
<div class="bbs_body">
    <?php
        if (isset($_SESSION['id'])) {
    ?>  
        <a href="bbs1write.php" class="blog_btn">글작성</a> 
    <?php        
        }
        foreach($result as $bbs) {
    ?>
     <!-- 게시글 정보 표시 -->
    <?php if($bbs['img_file']) { ?>
        <img src="bbs_img/<?=$bbs['img_file'];?>" alt="bbs image">
    <?php } else { ?>
        <img src="bbs_img/noimage.png" alt="no bbs image">
    <?php } ?>   
    <a href="bbsview.php?no=<?=$bbs['no'];?>&current_page=<?=$current_page;?>">제목:<?=$bbs['title'];?></a>
    <p>작성자:<a href="#"> <?=$bbs['name'];?></a></p>
    <p>카테고리:<a href="#"> <?=$bbs['category'];?></a></p>
    <!-- 수정, 삭제 버튼-->
    <div>
        <?php 
            if(isset($_SESSION['id'])) {
                if($_SESSION['id'] == $bbs['id']) { 
        ?>
                <a href="bbs1mod.php?no=<?=$bbs['no'];?>" class="bbs_btn1">수정</a>
                <a href="_bbs1delete.php?no=<?=$bbs['no'];?>" class="bbs_btn1">삭제</a>
        <?php 
                }
            }                             
            ?>                       
</div>                           
<?php } ?> <!-- div 밖으로 꺼내주기 -->                
<!-- 페이지네이션 -->
<div class="footer-pb">
    <section>
        <ul class="pagination">
            <a href="bbs.php?current_page=1"><li>&laquo;</li></a>

            <?php if ($current_page > 1) { ?>    
                <a href="bbs.php?current_page=<?=$prev_page;?>"><li>앞</li></a>
            <?php } else { ?>
                <a href="#"><li>앞</li></a>      
            <?php } ?>  

            <?php if ($current_page < $end_page) { ?>        
                <a href="bbs.php?current_page=<?=$next_page;?>"><li>뒤</li></a>
            <?php } else { ?> 
                <a href="#"><li>뒤</li></a>
            <?php } ?>     
                <a href="bbs.php?current_page=<?=$end_page;?>"><li>&raquo;</li></a>
            <li class="active">현재 페이지:<?=$current_page;?></li><li>총 페이지:<?=$end_page;?></li>
        </ul>
    </section>  
</div>  
<!-- 커뮤니티 화면 끝 -->
<?php require('lib/bottom.php'); ?>