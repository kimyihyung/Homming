<?php
    include "../connect/session.php";
    include "../connect/connect.php";
?>
<!DOCTYPE html>
<html lang="ko">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>칼럼</title>

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
      <section id="columnView" class="container">
        <div class="line"></div>
        <div class="column__desc">
          <h3>호밍칼럼</h3>
          <p>
            <img
              src="../html/assets/img/column__veiw.svg"
              alt="목록으로 가기"
            /><a
							href="../column/columnMain.php"
							class="column__go"
							>목록으로 바로가기</a
						>
          </p>
        </div>
        <div class="columnView__inner">
          <div class="columnView__title">
            <h1>
              물 주기,<br />
              내가 잘못하는 이유가<br />
              무엇일까?
            </h1>
            <p>우리 집 식물의 옳바른 물주기</p>
          </div>
          <div class="columnView__contents">
            <figure class="columnView__info1">
              <img src="../html/assets/img/column01.jpg" alt="" />
              <figcaption>
                <h2>평소에 나의 물주기</h2>
                <p>시들시들 하네 물을 좀 줄까?</p>
                <p>식물이 자라지 않네? 물을 줄까나...?</p>
                <p>식물이 다 죽어 가네... 물을 주면 살까나...?</p>
              </figcaption>
            </figure>
            <figure class="columnView__info2">
              <img src="../html/assets/img/column02.jpg" alt="" />
              <figcaption>
                <p>
                  식물에 무지한 내가 할 수 있는 일이라고는 그저 물을 주는 것
                  뿐이다...<br />
                  (그냥 알고 있는 나의 상식에서 해결 할 수 있는 최선의 일이 라고
                  생각 할뿐..)<br />
                </p>
                <p>
                  물을 적게 주면 식물이 시들고, 또 물이 너무 적어도 식물은
                  시든다... 도대체어느 정도 주는 것이 적당할까???
                </p>
              </figcaption>
            </figure>
            <figure class="columnView__info3">
              <img src="../html/assets/img/column03.jpg" alt="" />
              <figcaption>
                <span> 식물킬러라는 별명이 괜히 있는게 아니다... </span>
                <h2>
                  식물의 물주기는 정말 세심한<br />
                  관심이 필요한 것이다
                </h2>
                <p>
                  실내에 있는 식물에게 물을 줄때에는 흙의 마르기를 체크하는 것이
                  중요하다. 물을 많이 주어서 시든 식물의 대부분은 흙속의 수분이
                  마르지 않아 뿌리가 썩어 시든 경우가 많았다.
                </p>
                <em>
                  식물에게 물을 줄때는 흙의 마르기를 체크하는 것이 중요하다!
                </em>
              </figcaption>
            </figure>
            <figure class="columnView__info4">
              <img src="../html/assets/img/column04.jpg" alt="" />
              <figcaption>
                <p>이제 물을 줄때는 조금더 세심하게 확인하기!</p>
                <p>나도 이제 물주기의 마스터에 한걸음!</p>
              </figcaption>
            </figure>
            <div class="copy">
              <em>copy.</em
              >&nbsp;김눈누&nbsp;&#124;&nbsp;&nbsp;&nbsp;<em>data.</em>&nbsp;2022.10.07
            </div>
            <div style="float: right;">
                <a href="../column/columnMain.php">칼럼 목록 바로가기</a>
            </div>
          </div>
        </div>
        <div class="columnView__end">
          <figure class="columnView__img">
            <img src="../html/assets/img/column05.jpg" alt="김눈누 프로필" />
          </figure>
          <div class="columnView__content">
            <div class="title1">
              <h1>호밍 관리자</h1>
              <h2>김눈누</h2>
            </div>
            <div class="columnView__text">
              <p>
                처음 식물을 기르는 초보 식물 집사들과 식물을 사랑하는 많은
                사람들을<br />
                위해 여러가지 식물 키우기 팁을 칼럼으로 전달해 드립니다.
                호밍에서 여<br />
                러분이 원하는 식물 관리법을 찾을 수 있길 바랍니다. 식물 킬러라는
                오명<br />
                을 다 같이 벗길 바라며 즐겁게 칼럼을 읽어 주시길 바랍니다!
              </p>
            </div>
            <ul class="columnView__keywords">
              <li class="columnView__keyword"><a href="https://youtu.be/wa0auX1J99Q" target="_blank">초보자 식물키우기 팁</a><img
									src="../html/assets/img/column__go.svg"
									alt="유튜브 바로가기"
								/></li>
              <li class="columnView__keyword"><a href="http://homming.dothome.co.kr/plantMoa/plantmoaView.php">몬스테라 키우기</a><img
									src="../html/assets/img/column__go.svg"
									alt="식물모아 바로가기"
								/></li>
              <li class="columnView__keyword"><a href="https://youtu.be/0D5mb6Y-4Ac" target="_blank">식물 영상 팁⭐</a><img
									src="../html/assets/img/column__go.svg"
									alt="유튜브 바로가기"
								/></li>
            </ul>
          </div>
          <div class="Top__fixed">
						<div class="Top__btn">Top</div>
					</div>
        </div>
      </section>
      <!-- //plantmoaView -->
    </main>
    <!-- //main -->

    <?php include "../include/footer.php" ?>
    <!-- footer -->

    
    <?php include "../login/login.php" ?>
    <!-- login -->
    
    <script src="../assets/js/login.js"></script>
    <script src="../assets/js/topBtn.js"></script>

    <script></script>
  </body>
</html>
