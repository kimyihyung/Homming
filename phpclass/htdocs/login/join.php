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

    <header id="header">
        <div class="header__inner container">
            <div class="left">
                <ul>
                    <li><a href="../main/main.php" class="star"></a></li>
                </ul>
            </div>
            <h1><a href="../main/main.php">PHP BLOG</a></h1>
            <div class="right">
                <ul>
                    <li><a href="#">로그인</a></li>
                    <li><a href="../login/join.php">회원가입</a></li>
                </ul>
            </div>
            <nav class="nav">
                <ul>
                    <li><a href="#"><span>로그인</span></a></li>
                    <li><a href="#"><span>블로그</span></a></li>
                    <li><a href="#"><span>로그아웃</span></a></li>
                    <li><a href="#"><span>연락처</span></a></li>
                </ul>
            </nav>
        </div>
    </header>
    <!-- header -->

    <main id="main">
        <section id="banner">
            <h2>회원가입 페이지입니다.</h2>
            <div class="banner__inner2 container">
                <div class="img">
                    <img src="../assets/img/banner__image01.svg" alt="배너 이미지">
                </div>
                <div class="desc">
                    어떤 일이라도 <em>노력</em>하고 즐기면 그 결과는 <em>빛</em>을 발한다고 생각합니다. <br>
                    정확한 정보를 입력해주세요.
                </div>
            </div>
        </section>
        <!-- banner -->

        <sesction id="join" class="container">
            <h2>회원 가입</h2>
            <div class="join__inner">
                <form action="joinSave.php" name="join" method="post">
                    <fieldset>
                        <legend>회원가입</legend>
                        <div class="join__box">
                            <div>
                                <label for="youEmail">이메일</label>
                                <input type="email" id="youEmail" name="youEmail" placeholder="이메일을 입력하세요." required>
                            </div>
                            <div>
                                <label for="youName">이름</label>
                                <input type="text" id="youName" name="youName" placeholder="이름을 입력하세요." required>
                            </div>
                            <div>
                                <label for="youNickName">닉네임</label>
                                <input type="text" id="youNickName" name="youNickName" placeholder="닉네임을 입력하세요."
                                    required>
                            </div>
                            <div>
                                <label for="youPass">비밀번호</label>
                                <input type="password" id="youPass" name="youPass" placeholder="비밀번호을 입력하세요." required>
                            </div>
                            <div>
                                <label for="youPassC">비밀번호 확인</label>
                                <input type="password" id="youPassC" name="youPassC" placeholder="비밀번호을 입력하세요."
                                    required>
                            </div>
                            <div>
                                <label for="youPhone">전화번호</label>
                                <input type="text" id="youPhone" name="youPhone" placeholder="전화번호를 입력하세요." required>
                            </div>
                        </div>
                        <button class="join__btn" type="submit">회원가입 완료</button>
                    </fieldset>
                </form>
            </div>
        </sesction>
        <!-- join -->
    </main>
    <!-- main -->

    <footer id="footer">
        <h2>푸터 영역입니다.</h2>
        <div class="footer__inner container">
            <address>Copyright @2022 webstoryboy</address>
            <div>blog by webstoryboy</div>
        </div>
    </footer>
    <!-- footer -->

    <!-- 로그인 가입 팝업 -->
    <div class="login__popup">
        <div class="login__inner">
            <div class="login__header">
                <h3>로그인</h3>
            </div>
            <div class="login__contents">
                <form name="login" action="loginSave.php" method="post">
                    <fieldset>
                        <legend>로그인 입력폼</legend>
                        <div>
                            <label for="youEmail">이메일</label>
                            <input type="email" name="youEmail" id="youEmail" placeholder="이메일" class="input__style"
                                required>
                        </div>
                        <div>
                            <label for="youPass">비밀번호</label>
                            <input type="password" name="youPass" id="youPass" placeholder="비밀번호" class="input__style"
                                required>
                        </div>
                    </fieldset>
                    <button type="submit" class="input__button">로그인</button>
                </form>
            </div>
            <div class="login__footer">
                <div class="btn">
                    <a href="#">회원가입</a>
                    <a href="#">아이디 찾기</a>
                    <a href="#">비밀번호 찾기</a>
                </div>
                <ul class="desc">
                    <li>비밀번호 분실 시 비밀번호 찾기를 이용하세요.</li>
                    <li>회원가입을 하면 다양한 이벤트에 참여하실 수 있습니다.</li>
                    <li>개인정보 노출에 주의하세요.</li>
                </ul>
                <button type="button" class="btn-close"><span>닫기</span></button>
            </div>

        </div>
    </div>
    <!-- 아이디 찾기 팝업 -->
    <!-- 아이디 찾기 에러 팝업 -->
    <!-- 아이디 찾기 완료 팝업 -->
    <!-- 비밀번호 찾기 팝업 -->
    <!-- 비밀번호 찾기 에러 팝업 -->
    <!-- 비밀번호 찾기 완료 팝업 -->
</body>

</html>