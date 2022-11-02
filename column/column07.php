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
            <h1>당신이 모르는 선인장에 대하여</h1>
            <p>함께하는 선인장들</p>
          </div>
          <div class="columnView__contents">
            <figure class="columnView__info1">
              <img src="../html/assets/img/column02_01.jpg" alt="선인장" />
              <figcaption>
                <h2>선인장을 키우며...</h2>
                <p>
                    선인장을 키우며 느낀것은 선인장은 정말 천천히 자란다는 것이었다. 식물과 동물이 다르다는 것을 한번에 알 수 있는것은
                    식물은 동물과 다르게 몸구조가 레고 블록처럼 이루어져 있다는 것이다. 그렇기에 어느 한 부분을 잃더라도 죽지않고 계속 살아갈수가 있다.
                    <br>
                    그렇기에 반복되는 블록들을 만드는것이 그들이 살아가는데 가장 큰 전략이 되는 샘이었다. <br>
                    마치 레고 블록처럼...
                </p>
              </figcaption>
            </figure>
            <figure class="columnView__info2">
              <img src="../html/assets/img/column02_02.jpg" alt="선인장" />
              <figcaption>
                <h2 style="margin-bottom: 20px; text-align: center;">
                    '나무는 행동의 상징이다.' 내일 변화가 오지 않더라도 약간의 차이는 분명히 생긴다. 작은 차이의 첫걸음은 
                    나무를 심는 것이다.<br> - 왕가리 마타이 
                </h2>
                <p>
                    식물이 자라는것을 알 수 있는것은 그 식물을 유심히 볼때이다. 선인장은 정말 느리게 자란다.<br>
                    그리고 놀라운 것은 선인장은 혼자 자라지 않는다는 것이었다.<br>
                    가족을 만들기 위해 분투하는 선인장!<br>
                    처음의 선인장의 모습과는 많이 달라졌지만, 그래도 혼자있던 선인장에게 가족이 생겼다.
                </p>
            </figure>
            <figure class="columnView__info4">
              <img src="../html/assets/img/column02_03.jpg" alt="선인장" style="margin-bottom: 0; font-size: 12px;" />
              <figcaption>
                <p style="text-align: center;">선인장들은 살아가는 전략은 가족을 만드는 것이었다.</p>
                <p style="margin-top: 20px;">
                    이런 선인장의 가족만들기는 짧게는 한두계절이 걸릴만큼 긴 시간이다. <br>
                    함께 하기위해서 선인장들은 긴 시간을 견디며, 자신의 모습도 처음과는 많이 변화한다. 
                </p>
              </figcaption>
            </figure>
            <figure class="columnView__info4">
                <img src="../html/assets/img/column02_04.jpg" alt="선인장"  />
                <figcaption>
                  <p style="margin-bottom: 30px;">
                    그렇게 긴 시간을 견디면 이렇게 선인장 대 가족 완성!<br>
                    함께하면 그 어떤것도 두렵지 않다! 선인장의 가족은 이렇게 혼자서 외롭지 않게 잘 살아갈 것이다.

                  </p>
                </figcaption>
              </figure>
            <div class="copy">
              <em>copy.</em
              >&nbsp;플랜트 폭스&nbsp;&#124;&nbsp;&nbsp;&nbsp;<em>data.</em>&nbsp;2022.10.29
            </div>
            <div style="float: right;">
                <a href="../column/columnMain.php">칼럼 목록 바로가기</a>
            </div>
          </div>
        </div>
        <div class="columnView__end">
          <figure class="columnView__img">
            <img src="../html/assets/img/columnMem02.jpg" alt="관리자 프로필" />
          </figure>
          <div class="columnView__content">
            <div class="title1">
              <h1>새로운 칼럼 관리자</h1>
              <h2>플랜트 폭스</h2>
            </div>
            <div class="columnView__text">
              <p>
                새롭게 선보이는 호밍의 신규 칼럼 관리자 플랜트 폭스! <br>
                앞으로 새롭게 선보이는 칼럼으로 여러분을 찾아 뵙겠습니다. <br>
                새롭게 단장되는 칼럼의 페이지와 많은 호밍의 이용자들을 위해 열심히 작성하겠습니다~!<br>
                모든 사람들이 프로 식집사가 되는 그날까지!!
              </p>
            </div>
            <ul class="columnView__keywords">
              <li class="columnView__keyword"><a href="https://youtu.be/sKCF3R03EyY" target="_blank">선인장 키우기</a><img
                  src="../html/assets/img/column__go.svg"
                  alt="유튜브 바로가기"
                /></li>
              <li class="columnView__keyword"><a href="http://homming.dothome.co.kr/plantMoa/plantmoaView19.php">금황환 선인장</a><img
                  src="../html/assets/img/column__go.svg"
                  alt="식물모아 바로가기"
                /></li>
              <li class="columnView__keyword"><a href="https://youtu.be/aUjnm9O1SrA" target="_blank">선인장의 꽃</a><img
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
