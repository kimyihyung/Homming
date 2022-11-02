<?php
    include "../connect/connect.php";
    include "../connect/session.php";
    include "../connect/sessionCheck.php";

    $myMemberID = $_SESSION['myMemberID'];

    $memberSql = "SELECT * FROM myAdminMember WHERE myMemberID  = {$myMemberID}";
    $memberResult = $connect -> query($memberSql);
    $memberInfo = $memberResult -> fetch_array(MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>마이페이지</title>

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
    $myProfileSql = "SELECT m.youNickName, m.youName, m.youImgFile, m.myMemberID, b.myMemberID, b.storyImgFile, b.storyCategory, b.storyView, b.storyContents, b.storyTitle, b.myStoryID, b.storyRegTime FROM myStory b JOIN myAdminMember m ON (m.myMemberID = b.myMemberID) WHERE storyDelete = 0 AND b.myMemberID = '$myMemberID' ORDER BY myStoryID DESC LIMIT 10";
    $myProfileResult = $connect -> query($myProfileSql);
    $myProfileInfo = $myProfileResult -> fetch_array(MYSQLI_ASSOC);
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
                        <p class="title">개인정보를 변경할 수 있습니다.</p>
                    </div>
                </div>
            </div>
            <div class="myChange__inner">
                <form action="myProfileModify.php" name="ProfileModify" method="post" enctype="multipart/form-data">
                    <fieldset>
                        <div class="change__box">
                            <div class="myChange">
                                <div class="sel">
                                    <div class="profile-icon"></div>
                                    <div class="text">
                                        <p class="title">프로필 변경</p>
                                        <p class="p">프로필을 변경합니다.</p>
                                    </div>
                                </div>
                                <div class="put hide">
                                    <label for="youFile" class="input-profile-button blind">파일</label>
                                    <span class="inp_placeholder_my" id="inp_placeholder_my">사진을 첨부해 주세요</span>
                                    <input class="input profile_input" type="file" name="youFile" id="youFile"
                                        accept=".jpg, .jpeg, .png, .gif" placeholder="이미지를 선택해주세요">
                                    <!-- <button type="button" class="myProfile-Btn"> -->

                                    </button>
                                </div>
                            </div>
                            <div class="myChange">
                                <div class="sel">
                                    <div class="youPhone-icon"></div>
                                    <div class="text">
                                        <p class="title">연락처 변경</p>
                                        <p class="p">연락처를 변경합니다.</p>
                                    </div>
                                </div>
                                <div class="put">
                                    <input class="input profile_input" type="text" id="youPhone" name="youPhone"
                                        placeholder="전화번호를 입력해주세요">
                                    <button type="button" class="myProfile-Btn">
                                        <p class="msg" id="youPhoneComment"></p>
                                    </button>
                                </div>
                            </div>
                            <div class="myChange">
                                <div class="sel">
                                    <div class="youNickName-icon"></div>
                                    <div class="text">
                                        <p class="title">닉네임 변경</p>
                                        <p class="p">닉네임를 변경합니다.</p>
                                    </div>
                                </div>
                                <div class="put">
                                    <input class="input" type="text" id="youNickName" name="youNickName"
                                        placeholder="닉네임를 입력해주세요" autocomplete="off">
                                    <button type="button" class="myProfile-Btn">
                                        <a href="#c" class="profile_check" onclick="nickChecking()">중복검사</a>
                                        <p class="msg" id="youNickNameComment"></p>
                                    </button>
                                </div>
                            </div>
                            <div class="myChange">
                                <div class="sel">
                                    <div class="youEmail-icon"></div>
                                    <div class="text">
                                        <p class="title">이메일 변경</p>
                                        <p class="p">이메일을 변경합니다.</p>
                                    </div>
                                </div>
                                <div class="put">
                                    <input class="input" type="email" id="youEmail" name="youEmail"
                                        placeholder="아이디를 입력해주세요">
                                    <button type="button" class="myProfile-Btn">
                                        <a href="#c" class="profile_check" onclick="emailChecking()">중복검사</a>
                                        <p class="msg" id="youEmailComment"></p>
                                    </button>
                                </div>
                            </div>
                            <div class="myChange">
                                <div class="sel">
                                    <div class="youPass-icon"></div>
                                    <div class="text">
                                        <p class="title">비밀번호 변경</p>
                                        <p class="p">비밀번호를 변경합니다.</p>
                                    </div>
                                </div>
                                <div class="put">
                                    <input class="input profile_input" type="password" id="youPass" name="youPass"
                                        placeholder="비밀번호를 입력해주세요">
                                    <button type="button" class="myProfile-Btn">
                                        <p class="msg" id="youPassComment"></p>
                                    </button>
                                </div>
                            </div>
                            <div class="myChange">
                                <div class="sel">
                                    <div class="youPassC-icon"></div>
                                    <div class="text">
                                        <p class="title">비밀번호 변경 확인</p>
                                        <p class="p">변경 된 비밀번호를 확인합니다.</p>
                                    </div>
                                </div>
                                <div class="put">
                                    <input class="input profile_input" type="password" id="youPassC" name="youPassC"
                                        placeholder="비밀번호를 입력해주세요">
                                    <button type="button" class="myProfile-Btn">
                                        <p class="msg" id="youPassCComment"></p>
                                    </button>
                                </div>
                            </div>
                            <div class="myProfile-sel">
                                <a href="myProfileDelete.php" class="secession__btn" type="submit"
                                    onclick="alert('정말 탈퇴하시겠습니까?')">탈퇴</a>
                                <button class="myChange__btn" type="submit">저장</button>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </section>
        <!-- //plantmoa -->
    </main>
    <!-- //main -->

    <?php include "../include/footer.php" ?>
    <!-- footer -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
    document.getElementById('youFile').addEventListener('change', function() {
        let filename = document.getElementById('inp_placeholder_my');
        if (this.files[0] == undefined) {
            filename.innerText = '선택된 파일없음';
            return;
        }
        filename.innerText = this.files[0].name;
    });

    let emailCheck = false;
    let nickCheck = false;

    function emailChecking() {
        let youEmail = $("#youEmail").val();

        if (youEmail == null || youEmail == '') {
            $("#youEmailComment").text("이메일을 입력해주세요");
        } else {
            $.ajax({
                type: "POST",
                url: "myProfileModify.php",
                data: {
                    "youEmail": youEmail,
                    "type": "emailCheck"
                },
                dataType: "text",

                success: function(data) {
                    if (data.result == "good") {
                        $("#youEmailComment").text("사용 가능한 이메일입니다.");
                        emailCheck = true;
                    } else {
                        $("#youEmailComment").text("이미 존재하는 이메일입니다.");
                        emailCheck = false;
                    }
                },

                error: function(request, status, error) {
                    console.log("request" + request);
                    console.log("status" + status);
                    console.log("error" + error);
                }
            })
        }
    }

    function nickChecking() {
        let youNickName = $("#youNickName").val();

        if (youEmail == null || youEmail == '') {
            $("#youNickNameComment").text("닉네임을 입력해주세요");
        } else {
            $.ajax({
                type: "POST",
                url: "myProfileModify.php",
                data: {
                    "youNickName": youNickName,
                    "type": "nickCheck"
                },
                dataType: "text",

                success: function(data) {
                    if (data.result == "good") {
                        $("#youNickNameComment").text("사용 가능한 닉네임입니다.");
                        nickCheck = true;
                    } else {
                        $("#youNickNameComment").text("이미 존재하는 닉네임입니다.");
                        nickCheck = false;
                    }
                },

                error: function(request, status, error) {
                    console.log("request" + request);
                    console.log("status" + status);
                    console.log("error" + error);
                }
            })
        }
    }
    </script>
</body>

</html>