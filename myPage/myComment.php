<?php
    include "../connect/connect.php";
    include "../connect/session.php";
    include "../connect/sessionCheck.php";

    $myMemberID = $_SESSION['myMemberID'];
    $myyCommentID = $_GET['myCommentID'];

    $myCommentSql = "SELECT * FROM myComment WHERE commentDelete = 0 AND myMemberID = '$myMemberID' ORDER BY myCommentID DESC";
    $myCommentResult = $connect -> query($myCommentSql);
    $myCommentInfo = $myCommentResult -> fetch_array(MYSQLI_ASSOC);
    $myCommentCount = $myCommentResult -> num_rows;

?>

<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>내가 쓴 댓글</title>

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
                        <p class="title">전체 댓글</p>
                        <?php
    echo "<p class='num'> $myCommentCount </p>";
?>
                    </div>
                </div>
            </div>
            <div class="myComment__inner">
                <?php

    if(isset($_GET['page'])){
        $page = (int) $_GET['page'];
    } else {
        $page = 1;
    }

    $viewNum = 9;

    $viewLimit = ($viewNum * $page) - $viewNum;

    $myCommentSql = "SELECT m.youNickName, m.myMemberID, c.commentMsg, c.myMemberID, c.myCommentID FROM myAdminMember m JOIN myComment c ON (m.myMemberID = c.myMemberID) WHERE commentDelete = 0 AND m.myMemberID = '$myMemberID' ORDER BY myCommentID DESC LIMIT {$viewLimit}, {$viewNum}";
    $myCommentResult = $connect -> query($myCommentSql);

    foreach($myCommentResult as $comment){
        $count = $myCommentResult -> num_rows;
?>
                <div class="myComment__box" id="comment<?=$comment['myCommentID']?>">
                    <span><?=$comment['youNickName']?></span>
                    <h3><?=$comment['commentMsg']?></h3>
                    <a href="#" class="myComment-btn">삭제</a>
                </div>
                <?php }?>
            </div>
        </section>
        <!-- //plantmoa -->
    </main>
    <!-- //main -->

    <?php include "../include/footer.php" ?>
    <!-- footer -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script>
    let commentID = "";
    // 댓글 삭제하기
    $(".myComment-btn").click(function(e) {
        e.preventDefault();
        commentID = $(this).parent().attr("id");

        //삭제 번호
        let number = commentID.replace(/[^0-9]/g, "");

        //창띄워서 삭제하기
        if (confirm('정말로 삭제하시겠습니까?')) {
            $.ajax({
                url: "myCommentRemove.php",
                method: "POST",
                dataType: "text",
                data: {
                    "commentID": number,
                    "memberID": <?=$myMemberID?>
                },
                success: function(data) {
                    console.log(data);
                    location.reload();
                },
                error: function(request, status, error) {
                    console.log("request" + request);
                    console.log("status" + status);
                    console.log("error" + error);
                },
            })
        }
    })
    </script>
</body>

</html>