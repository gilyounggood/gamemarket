<?php require('lib/top.php'); ?>    

<?php
    $no = $_GET['no'];
    require('_conn.php');
    $sql = "SELECT * FROM `bbs1` WHERE `no` = $no";
    $result = mysqli_query($conn, $sql);
?>

<?php foreach($result as $mod) { ?>

<!-- 커뮤니티 글 수정 영역 시작 -->
<div class="write">
    <form action="_bbs1mod.php" method="post">
        <input name="no" type="hidden" value ="<?=$mod['no'];?>">
        <div class="title">
            <h2>게시글 수정</h2>
        </div>
        <div class="half">
            <div class="item">
                <label>제목</label>
                <input name="title" type="text" value="<?=$mod['title'];?>">
            </div>  
            <div class="item">
                <label>카테고리</label>
                <input name="category" type="text" value="<?=$mod['category'];?>">
            </div>
        </div>
        <div class="full">
            <label>내용</label>
            <textarea name="content"><?=$mod['content'];?></textarea>
        </div>
        <div class="action">
            <button type="submit">수정</button>
            <input name="img_file" type="file">
        </div>   
    </form>
</div>
<!-- 커뮤니티 글 수정 영역 끝 -->

<?php } ?>

<?php require('lib/bottom.php'); ?>