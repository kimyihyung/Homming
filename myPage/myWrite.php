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