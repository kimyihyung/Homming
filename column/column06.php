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
            />1300
          </p>
        </div>
        <div class="columnView__inner">
          <div class="columnView__title">
            <h1>식물이 스트레스 받는 이유</h1>
            <p>식물킬러를 위한 아주 쉬운 식물책</p>
          </div>
          <div class="columnView__contents">
            <figure class="columnView__info1">
              <img src="../html/assets/img/cardColumn05_01.jpg" alt="" />
              <figcaption>
                <h2>식물도 우리 집이 낯설다.</h2>
                <p>
                  환경이 바뀌면 우리는 스트레스를 받는다. 새로운 친구를 사귀어야
                  하는 일, 새로운 업무에 적응해야 하는 일... 매번 반복되는
                  일이지만 항상 새롭고 어렵다. ‘이 집은 빛도 잘 안 들고, 바람도
                  잘 안 부네.’ 우리 집에 오자마자 멀쩡했던 화분이
                  시들시들해진다면 몸살을 앓는 것이다.
                </p>
              </figcaption>
            </figure>
            <figure class="columnView__info2">
              <img src="../html/assets/img/cardColumn05_02.jpg" alt="" />
              <figcaption>
                <h2>
                  처음엔 가장 볕 잘 들고 환기 잘되는 좋은 공간을 1-2주만
                  빌려주세요.
                </h2>
                <p>
                  온도가 갑자기 확 변하진 않았는지, 갑자기 음지에 둔 것은
                  아닌지, 원래 어떤 환경을 좋아하는 식물인지 알고 보살펴주면
                  몸살감기가 떨어지듯 컨디션을 회복한다.
                </p>
            </figure>
            <figure class="columnView__info4">
              <img src="../html/assets/img/cardColumn05_03.jpg" alt="" />
              <figcaption>
                <p></p>
                <p>
                    그리고 천천히 적응시켜주는 것이다.

                    집 안으로, 내 방으로!
                </p>
              </figcaption>
            </figure>
            <div class="copy">
              <em>copy.</em
              >&nbsp;김눈누&nbsp;&#124;&nbsp;&nbsp;&nbsp;<em>data.</em>&nbsp;2022.10.21
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
              <li class="columnView__keyword">식물킬러</li>
              <li class="columnView__keyword">초보자를 위해서</li>
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
