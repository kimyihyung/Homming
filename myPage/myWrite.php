<?php
    include "../connect/connect.php";
    include "../connect/session.php";
    include "../connect/sessionCheck.php";

    $myMemberID = $_SESSION['myMemberID'];
    $myWriteSql = "SELECT * FROM myStory WHERE storyDelete = 0 AND myMemberID = '$myMemberID' ORDER BY myStoryID DESC";
    $myWriteResult = $connect -> query($myWriteSql);
    $myWriteInfo = $myWriteResult -> fetch_array(MYSQLI_ASSOC);
    $myWriteCount = $myWriteResult -> num_rows;

?>

<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>내가 작성한 글</title>

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
    <!-- header -->

    <main id="main">
        <section id="mypage" class="container">
            <div class="mypage__menu">
                <a href="myProfile.php" class="myProfile">
                    <?php
    $memberSql = "SELECT * FROM myAdminMember WHERE myMemberID  = {$myMemberID}";
    $memberResult = $connect -> query($memberSql);
    $memberInfo = $memberResult -> fetch_array(MYSQLI_ASSOC);
?>
                    <img src="../assets/img/member/<?=$memberInfo['youImgFile']?>" alt="">
                    <p class="nickname"><?=$memberInfo['youNickName']?></p>
                    <p class="name"><?=$memberInfo['youName']?></p>
                </a>
                <div class="mypage__sel">
                    <div class="mypage__sel__top">
                        <a href="myWrite.php" class="myWrite">
                            <div class="myWrite-icon"></div>
                            <p>작성 글</p>
                        </a>
                        <a href="myComment.php" class="myComment">
                            <div class="myComment-icon"></div>
                            <p>작성 댓글</p>
                        </a>
                        <!-- <a href="myLike.php" class="myLike">
                            <div class="myLike-icon"></div>
                            <p>좋아요</p>
                        </a> -->
                    </div>
                    <div class="myPage__num">
                        <p class="title">전체 글</p>
                        <?php 

    echo "<p class='num'> $myWriteCount </p>";

?>
                    </div>
                </div>
            </div>
            <div class="myWrite__inner">
                <?php
    if(isset($_GET['page'])){
        $page = (int) $_GET['page'];
    } else {
        $page = 1;
    }

    $viewNum = 9;

    $viewLimit = ($viewNum * $page) - $viewNum;

    $myWriteSql = "SELECT m.youNickName, m.youImgFile, m.myMemberID, b.myMemberID, b.storyImgFile, b.storyCategory, b.storyView, b.storyContents, b.storyTitle, b.myStoryID, b.storyRegTime FROM myStory b JOIN myAdminMember m ON (m.myMemberID = b.myMemberID) WHERE storyDelete = 0 AND b.myMemberID = '$myMemberID' ORDER BY myStoryID DESC LIMIT {$viewLimit}, {$viewNum}";
    $myWriteResult = $connect -> query($myWriteSql);

    foreach($myWriteResult as $story){
        $count = $myWriteResult -> num_rows;
?>
                <div class="myWrite__card">
                    <a href="../story/storyView.php?storyID=<?=$story['myStoryID']?>">
                        <figure>
                            <img src="../assets/img/story/<?=$story['storyImgFile']?>" alt="인테리어 이미지1">
                        </figure>
                        <span><?=$story['storyCategory']?></span>
                        <h3><?=$story['storyTitle']?></h3>
                        <p><?=date('Y-m-d', $story['storyRegTime'])?></p>
                    </a>
                </div>

                <?php }?>
            </div>

            <div class="board__pages">
                <?php

    //갯수구하기
    $sql = "SELECT count(myStoryID) FROM myStory WHERE storyDelete = 0";
    $result = $connect -> query($sql);

    $myStoryCount = $result -> fetch_array(MYSQLI_ASSOC);
    $myStoryCount = $myStoryCount['count(myStoryID)'];

    //총 페이지 갯수
    $myStoryCount = ceil($myStoryCount/$viewNum);

    //현재 페이지를 기준으로 보여주고 싶은 갯수
    $pageCurrent = 5;
    $startPage = $page - $pageCurrent;  
    $endPage = $page + $pageCurrent;

    //처음페이지 초기화
    if($startPage < 1) $startPage = 1;

    //마지막페이지 초기화
    if($endPage >= $myStoryCount) $endPage = $myStoryCount;

    //이전 페이지, 처음 페이지
    if($page != 1){
        $prevPage = $page - 1;
        echo "<a href='myWrite.php?page=1'>&lt;&lt;</a>";
        echo "<a href='myWrite.php?page={$prevPage}'>&lt;</a>";
    }

    //페이지 넘버 표시
    for($i=$startPage; $i <= $endPage; $i++){
        $active = "";
        if($i == $page) $active = "active";

        echo "<a class='{$active}' href = 'myWrite.php?page={$i}'>{$i}</a>";
    }

    //다음 페이지, 마지막 페이지
    if($page != $endPage){
        $nextPage = $page + 1;
        echo "<a href='myWrite.php?page={$nextPage}'>&gt;</a>";
        echo "<a href='myWrite.php?page={$myStoryCount}'>&gt;&gt;</a>";
    }
?>
                <!-- <ul>
                    <li><a href="#">&lt;&lt;</a></li>
                    <li><a href="#">&lt;</a></li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#">&gt;</a></li>
                    <li><a href="#">&gt;&gt;</a></li>
                </ul> -->
            </div>
        </section>
        <!-- //plantmoa -->
    </main>
    <!-- //main -->

    <?php include "../include/footer.php" ?>
    <!-- footer -->

    <script>

    </script>
</body>

</html>