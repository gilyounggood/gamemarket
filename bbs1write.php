<?php require('lib/top.php'); ?>   

<!-- 커뮤니티 글 작성 영역 시작 -->
<div class="write">
    <form action="_bbs1write.php" method="post" enctype ="multipart/form-data">
        <div class="title">
            <h2>게시글 작성</h2>
        </div>
        <div class="half">
            <div class="item">
                <label>제목</label>
                <input name="title" type="text">
            </div>  
            <div class="item">
                <label>카테고리</label>
                <input name="category" type="text">
            </div>
        </div>
        <div class="full">
            <label>내용</label>
            <textarea name="content"></textarea>
        </div>
        <div class="action">
            <button type="submit">작성</button>
            <input name="img_file" type="file">
        </div>   
    </form>
</div>
<!-- 커뮤니티 글 작성 영역 끝 -->

<?php require('lib/bottom.php'); ?>