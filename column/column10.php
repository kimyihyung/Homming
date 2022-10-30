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
              alt="조회수 아이콘"
            />922
          </p>
        </div>
        <div class="columnView__inner">
          <div class="columnView__title">
            <h1>식물을 잘 기르는 방법은 무엇일까?</h1>
            <p>어디서나 식물을 잘 기르는 사람들</p>
          </div>
          <div class="columnView__contents">
            <figure class="columnView__info1">
              <img src="../html/assets/img/column05_01.jpg" alt="식물을 잘 기르는 사람들" />
              <figcaption>
                <h2>어떤 환경에서나 식물을 잘 기르는 사람들</h2>
                <p>
                    어떤 공간에서나 식물을 잘 기르는 사람들이 있다... <br>
                    식물을 잘 기르는 사람들... <br>
                    그들에게는 다들 공통적인 특징이 있다. <br><br>
                    바로 관계를 잘 유지하는 사람들이었다!
                </p>
              </figcaption>
            </figure>
            <figure class="columnView__info2">
              <img src="../html/assets/img/column05_02.jpg" alt="식물을 잘 기르는 사람들" />
              <figcaption>
                <h2 style="margin-bottom: 20px; text-align: center;">
                    괜히 금손들이 아니다...!
                </h2>
                <p>
                    일반적인 관계는 관례를 오래 유지 시키지 못한다.<br>
                    그리고 일반적인 소통으로 식물을 키우는 것은 식물과의 관계도 금방 끝나는 것을 의미한다.<br><br>
                    쌍방향의 소통! 그것은 매우 중요한 것이다.
                </p>
            </figure>
              <figure class="columnView__info4">
                <img src="../html/assets/img/column05_03.jpg" alt="식물을 잘 기르는 사람들"  />
                <figcaption>
                  <p style="margin-bottom: 40px;">
                    나는 좋은 관계를 유지하는 사람인가....? <br><br>
                    만약 내가 식물을 키우는 곳이 햇빛이 잘 안드는 곳이라면 나름대로의 팁이 있다! <br>
                    좋은 환경에서 식물을 키울때는  <em style="color: #00B564;">물 > 햇빛 > 바람</em> 순이라면 <br>
                    부족한 환경에서는 <em style="color: #00B564;">바람 > 햇빛 > 물</em>순으로 순위가 달라진다. <br>
                    햇빛이 부족한 환경에서는 물 주기를 신경쓰기보다는 환기를 잘하는 것이 중요하다.


                  </p>
                </figcaption>
              </figure>
            <div class="copy">
              <em>copy.</em
              >&nbsp;플랜트 폭스&nbsp;&#124;&nbsp;&nbsp;&nbsp;<em>data.</em>&nbsp;2022.10.27
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
              <li class="columnView__keyword">플랜트 폭스</li>
              <li class="columnView__keyword">식물을 잘기르는 방법은</li>
              <li class="columnView__keyword">금손</li>
            </ul>
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

    <script></script>
  </body>
</html>
