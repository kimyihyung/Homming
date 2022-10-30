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
            />1111
          </p>
        </div>
        <div class="columnView__inner">
          <div class="columnView__title">
            <h1>식물이 좋아하는 물 주기 방법</h1>
            <p>어떻게 물을 줘야 제대로 주는 걸까</p>
          </div>
          <div class="columnView__contents">
            <figure class="columnView__info1">
              <img src="../html/assets/img/cardColumn04_01.jpg" alt="" />
              <figcaption>
                <h2>다음 중 식물은 어떤 물 주기 방법을 좋아할까?</h2>
                <ul>
                    <li>1. 물조리개로 주기</li>
                    <li>2. 분무기로 주기</li>
                    <li>3. 컵에 따라 주기</li>
                </ul>
              </figcaption>
            </figure>
            <figure class="columnView__info2">
              <img src="../html/assets/img/cardColumn04_02.jpg" alt="" />
              <figcaption>
                <h2>
                    정답은 :

                    하늘에서 비가 내려
                    
                    땅이 천천히 촉촉해지는
                    
                    것 처럼 물 주기!
                </h2>
                <p>
                    모든 것은 ‘자연’스러운 게 최고다. 자연이 하는 모습을 따라 하면 적어도 실패할 일은 없다. (사람보다 자연이 식물을 더 잘 키우니까) 비 내리는 모습을 물 주기라고 생각하면 쉽다. 작은 빗줄기가 빈틈없이 구석구석 땅을 젖게 하고, 아무리 소나기라도 최소 몇 분은 걸린다.
                    중요한 건 천천히 골고루 촉촉해지게 주는 것이다. 사실 어떤 방법으로 줘도 다 괜찮다. 물을 위에서 콸콸 쏟아부으면 화분 안에 물길이 생겨버린다. 어떤 뿌리는 물을 마시고, 어떤 뿌리는 못 마시는 결과가 된다. 그래서 물을 줄 땐 구멍으로 물이 흘러나올 때까지 천천히 주고, 약간의 텀을 두고 한번 더 주는 편이 좋다.
                </p>
            </figure>
            <figure class="columnView__info4">
              <img src="../html/assets/img/cardColumn04_03.jpg" alt="" />
              <figcaption>
                <p>+Tips</p>
                <p>
                    그래도 물 주기가 어렵다면 저면관수로 물을 주면 쉽다.
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
              <li class="columnView__keyword">옳바른</li>
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

    <script></script>
  </body>
</html>
