<?php
    include "../connect/connect.php";
    include "../connect/session.php";

    $category = $_GET['category'];


    
    $categorySql = "SELECT * FROM myStory WHERE storyDelete = 0 AND storyCategory = '$category' ORDER BY myStoryID DESC";
    $categoryResult = $connect -> query($categorySql);
    $categoryInfo = $categoryResult -> fetch_array(MYSQLI_ASSOC);

?>
<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>식물자랑</title>

    <!-- style -->
    <?php include "../include/link.php" ?>
</head>

<body>
    <div id="skip">
        <a href="#header">헤더 영역 바로가기</a>
        <a href="#main">컨텐츠 영역 바로가기</a>
        <a href="#footer">푸터 영역 바로가기</a>
    </div>
    <!-- skip -->

    <?php include "../include/header.php" ?>
    <!-- //header -->

    <main id="main">
        <section id="board">
            <div class="board__inner">
                <div class="story__category container">
                    <ul>
                        <li class="all1"><a href="story.php">전체</a></li>
                        <li class="plant1"><a href="storyCategory.php?category=식물자랑">식물자랑</a></li>
                        <li class="interior1"><a href="storyCategory.php?category=인테리어">인테리어</a></li>
                        <li class="ask1"><a href="storyCategory.php?category=지식공유">지식공유 | 질문</a></li>
                    </ul>
                </div>
                <div class="board__title container">
                    <h3>
<?php
    $storyNewSql = "SELECT * FROM myStory WHERE storyDelete = 0";
    $storyNewResult = $connect -> query($storyNewSql);
    $storyCategory = $_POST['storyCategory'];

    echo $storyCategory;

?>
                    </h3>
                </div>
                <div class="interior__wrap">
                    <div class="innteriorPop__wrap">
                        <div class="interiorPop__inner container">
<?php
    $categorySql2 = "SELECT * FROM myStory WHERE storyDelete = 0 AND storyCategory = '$category' ORDER BY myStoryID DESC LIMIT 3";
    $categoryResult2 = $connect -> query($categorySql2);
    
    foreach($categoryResult2 as $category){
?>
                            <div class="interiorPop__card">
                                <a href="storyView.php?storyID=<?=$category['myStoryID']?>">
                                    <figure>
                                        <img src="../assets/img/story/<?=$category['storyImgFile']?>" alt="이미지">
                                    </figure>
                                    <span><?=$category['storyCategory']?> | 조회수 <em><?=$category['storyView']?></em></span>
                                    <h3><?=$category['storyTitle']?></h3>
                                    <p>by. <?=$category['storyAuthor']?> </p>
                                </a>
                            </div>
<?php } ?>
                        </div>

                    </div>
                    <div class="innteriorList__wrap container">
                        <div class="interiorList__inner">
<?php 
$category = $_GET['category'];

if(isset($_GET['page'])){
    $page = (int) $_GET['page'];
} else {
    $page = 1;
}

$viewNum = 5;

$viewLimit = ($viewNum * $page) - $viewNum;

    $cateSql = "SELECT m.youNickName, m.youImgFile, m.myMemberID, b.myMemberID, b.storyImgFile, b.storyCategory, b.storyView, b.storyContents, b.storyTitle, b.myStoryID, b.storyRegTime FROM myStory b JOIN myAdminMember m ON (m.myMemberID = b.myMemberID) WHERE storyDelete = 0 AND storyCategory = '$category' ORDER BY storyCategory DESC LIMIT {$viewLimit}, {$viewNum}";
    $cateResult = $connect -> query($cateSql);

    foreach($cateResult as $cate){
        $count = $cateResult -> num_rows;
        if($count > 0){ 
?>
                            <div class="interiorList">
                                <div class="interior_left">
                                    <div class="interior_cate"><?=$cate['storyCategory']?></div>
                                    <div class="interior_date"><?=date('Y-m-d', $cate['storyRegTime'])?></div>
                                    <div class="interior_view">조회수 <em><?=$cate['storyView']?></em></div>
                                </div>
                                <div class="interior_center">
                                    <a href="storyView.php?storyID=<?=$cate['myStoryID']?>">
                                        <h3><?=$cate['storyTitle']?></h3>
                                        <p><?=$cate['storyContents']?></p>
                                    </a>
                                    <img src="../assets/img/member/<?=$cate['youImgFile']?>" alt="얍얍 프로필"><span>by. <?=$cate['youNickName']?></span>
                                </div>
                                <div class="interior_right">
                                    <img src="../assets/img/story/<?=$cate['storyImgFile']?>" alt="식물자랑 이미지1">
                                </div>
                            </div>
        <?php   
        } else { echo "<div class='interiorList'>게시물이 없습니다.</div>";}
 } ?>
                            <a href="storyWrite.php" class="interior_btn">글쓰기</a>
                        </div>
                    </div>
                </div>

                <div class="container">
                    <div class="board__pages">
<?php

$category = $_GET['category'];

$sql = "SELECT count(myStoryID) FROM myStory WHERE storyCategory = '$category' AND storyDelete = 0";
$result = $connect -> query($sql);

$storyCount = $result -> fetch_array(MYSQLI_ASSOC);
$storyCount = $storyCount['count(myStoryID)'];


//총 페이지 갯수
$storyCount = ceil($storyCount/$viewNum);

// echo $storyCount;

//현재 페이지를 기준으로 보여주고 싶은 갯수
$pageCurrent = 5;
$startPage = $page - $pageCurrent;  
$endPage = $page + $pageCurrent;

//처음페이지 초기화
if($startPage < 1) $startPage = 1;

//마지막페이지 초기화
if($endPage >= $storyCount) $endPage = $storyCount;

//이전 페이지, 처음 페이지
if($page != 1){
    $prevPage = $page - 1;
    echo "<a href='storyCategory.php?category={$category}&page=1'>&lt;&lt;</a>";
    echo "<a href='storyCategory.php?category={$category}&page={$prevPage}'>&lt;</a>";
}

//페이지 넘버 표시
for($i=$startPage; $i <= $endPage; $i++){
    $active = "";
    if($i == $page) $active = "active";

    echo "<a class='{$active}' href = 'storyCategory.php?category={$category}&page={$i}'>{$i}</a>";
}

//다음 페이지, 마지막 페이지
if($page != $endPage){
    $nextPage = $page + 1;
    echo "<a href='storyCategory.php?category={$category}&page={$nextPage}'>&gt;</a>";
    echo "<a href='storyCategory.php?category={$category}&page={$storyCount}'>&gt;&gt;</a>";
}
?>
                        <!-- <a href="#">&lt;&lt;</a>
                        <a href="#">&lt;</a>
                        <a href="#" class="active">1</a>
                        <a href="#">2</a>
                        <a href="#">3</a>
                        <a href="#">4</a>
                        <a href="#">5</a>
                        <a href="#">&gt;</a>
                        <a href="#">&gt;&gt;</a> -->
                    </div>
                </div>
            </div>
        </section>
        <!-- //board -->

    </main>
    <!-- //main -->

    <?php include "../include/footer.php" ?>
    <!-- footer -->
    <?php include "../login/login.php" ?>
    <!-- login팝업 -->
    <script src="../assets/js/login.js"></script>
    <script>
        var pageUrl = location.href; //창의 url을 가져온다.
        let plant = pageUrl.includes("275");
        console.log(plant);
    </script>
</body>

</html>