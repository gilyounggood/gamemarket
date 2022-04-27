<?php require('lib/top.php'); ?>

<?php
    $no = $_GET['no'];
    $current_page = $_GET['current_page'];
?>

<?php require('_bbsview1page.php'); ?>
<!-- 커뮤니티 페이지뷰 화면 시작 -->
<div class="bbs_page_body">
    <?php
        if (isset($_SESSION['id'])) {
    ?>  
    <?php        
        }
        foreach($result as $bbs)  {                                                  
    ?>
    <a class="bbs-post_cta" href="bbs.php?current_page=<?=$current_page;?>">목록으로</a>
    <div class="bbs_page">  
        <h1 class="bbs-post_title1">제목:<?=$bbs['title'];?></h1>
        <!-- 게시글 날짜 -->
        <div class="bbs_page_date">
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
            <span class="bbs-date"><?=$year;?>년</span>
            <span class="bbs-date"><?=$month;?>/<span>
            <span class="bbs-date"><?=$day;?></span>
            <span class="bbs-user">작성자:<?=$bbs['name'];?></span>
            <span class="bbs-user">카테고리:<?=$bbs['category'];?></span>
        </div>
        <!-- 게시글 내용 -->
        <div class="bbs_page_img">
            <?php if($bbs['img_file']) { ?>
                <a href="#"><img src="bbs_img/<?=$bbs['img_file'];?>" alt="bbs image"></a>
            <?php } else { ?>
                <a href="#"><img src="bbs_img/noimage.png" alt="no bbs image"></a>
            <?php } ?>
        </div>
        <p class="bbs_page_text"><?=$bbs['content'];?></p>
        <!-- 수정, 삭제 버튼-->
        <?php 
            if(isset($_SESSION['id'])) {
                if($_SESSION['id'] == $bbs['id']) { 
        ?>
        <div>
            <a href="bbs1mod.php?no=<?=$bbs['no'];?>" class="bbs_btn1">수정</a>
            <a href="_bbs1delete.php?no=<?=$bbs['no'];?>" class="bbs_btn1">삭제</a>
        </div>
        <?php 
                }
            }                             
        ?>                                          
        <?php } ?>
    </div>
</div>
<!-- 커뮤니티 페이지뷰 화면 끝 -->

<?php require('lib/bottom.php'); ?>