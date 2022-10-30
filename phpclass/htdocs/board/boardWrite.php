<?php
    include "../connect/connect.php";
    include "../connect/session.php";
    include "../connect/sessionCheck.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>회원가입</title>

    <!-- CSS -->
    <link rel="stylesheet" href="../assets/css/style.min.css">

    <!-- META -->
    <meta name="author" content="chanmi">
    <meta name="description" content="PHP 사이트 만들기입니다.">
    <meta name="keyword" content="사이트, 만들기, 튜토리얼, 김찬미">
    <meta name="robots" content="all">

    <!-- ICON -->
    <link rel="icon" href="../assets/img/icon_256.png" />
    <link rel="shortcut icon" href="../assets/img/icon_256.png" />
    <link rel="icon" type="image/png" sizes="256x256" href="../assets/img/icon_256.png" />
    <link rel="icon" type="image/png" sizes="192x192" href="../assets/img/icon_192.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="../assets/img/icon_32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/img/icon_16.png" />

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
        <section id="board" class="container">
            <h2>게시판 영역입니다.</h2>
            <div class="board__inner">
                <div class="board__title">
                    <h3>게시판 글쓰기</h3>
                    <p>웹디자이너, 웹퍼블리셔, 프론트앤드 개발자를 위한 게시판입니다.</p>
                </div>
                <div class="board__write">
                    <form action="boardWriteSave.php" name="boardWrite" method="post">
                        <fieldset>
                            <legend>게시판 작성 영역</legend>
                            <div>
                                <label for="boardTitle">제목</label>
                                <input type="text" name="boardTitle" id="boardTitle">
                            </div>
                            <div>
                                <label for="boardContents">내용</label>
                                <textarea name="boardContents" id="boardContents" rows="20"></textarea>
                            </div>
                            <button type="submit" class="btn">저장하기</button>
                        </fieldset>
                    </form>
                </div>
            </div>
        </section>
        
    </main>
    <!-- main -->

    <?php include "../include/footer.php" ?>
    <!-- footer -->

    <?php include "../login/login.php" ?>
    <!-- login -->

    <script src="../assets/js/custom.js"></script>
</body>

</html>