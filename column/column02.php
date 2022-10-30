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
            />1110
          </p>
        </div>
        <div class="columnView__inner">
          <div class="columnView__title">
            <h1>식물고수, 식물킬러를 만나다</h1>
            <p>가장떠오르는 식물계의 인플루언서 ‘식물킬러’</p>
          </div>
          <div class="columnView__contents">
            <figure class="columnView__info1">
              <img src="../html/assets/img/cardColumn02_01.jpg" alt="" />
              <figcaption>
                <h2>나도 식물 잘 키우고 싶다!</h2>
                <p>
                  식물을 잘 키워내고 싶은 마음은 굴뚝같은데, 왜이렇게
                  어려운지.... <br />
                  잘 좀 키우는가 싶더니만 그새 죽어버린다.
                </p>
              </figcaption>
            </figure>
            <figure class="columnView__info2">
              <img src="../html/assets/img/cardColumn02_02.jpg" alt="" />
              <figcaption>
                <h2>물은 주기에 맞춰 잘 주고 있는가?</h2>
                <p>
                  그저 열심히 물을 주었을 뿐인데 열심히 주는게 다가 아니었다.
                  어쩐지 잘 자라는거 같다가도 금방 시들시들 하더니만 식물마다 물
                  주기가 다르다는 것을 몰랐다니.. 나의 무지함이 부끄럽다.
                  이제부터라도 물 주기에 맞춰서 잘 줘야겠다 !!
                </p>
              </figcaption>
            </figure>
            <figure class="columnView__info3">
              <img src="../html/assets/img/cardColumn02_03.jpg" alt="" />
              <figcaption>
                <h2>식물에 맞는 온도, 습도, 그리고 물주기</h2>
                <p>
                  식물에게는 대표적으로 각자에 맞는 온도와 습도, 그리고 물주기가
                  있다. 그리고 계절마다의 관리법들이 따로 있으니, 열심히
                  공부해서 식물을 잘 키워내봐야겠다.
                </p>
              </figcaption>
            </figure>
            <figure class="columnView__info4">
              <img src="../html/assets/img/cardColumn02_04.jpg" alt="" />
              <figcaption>
                <p>잘 안죽는 식물들이 있을까? 라는 생각을 해 본다.</p>
                <p>
                  참고로 잘 안 죽는 식물들은 스파티필름, 스킨답서스,
                  홍콩야자이다. 기억하자
                </p>
              </figcaption>
            </figure>
            <div class="copy">
              <em>copy.</em
              >&nbsp;김눈누&nbsp;&#124;&nbsp;&nbsp;&nbsp;<em>data.</em>&nbsp;2022.10.18
            </div>
            <div style="float: right;">
                <a href="../column/columnMain.php">칼럼 목록 바로가기</a>
            </div>
          </div>
        </div>
        <div class="columnView__end">
          <figure class="columnView__img">
            <img src="../html/assets/img/column05.jpg" alt="" />
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
              <li class="columnView__keyword">김눈누</li>
              <li class="columnView__keyword">온도, 습도</li>
              <li class="columnView__keyword">물주기</li>
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

  </body>
</html>
