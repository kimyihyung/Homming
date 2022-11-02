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
              실내에서 멋지게 식물을 <br />
              키우는 현실적인 방법
            </h1>
            <p>집을 멋지게 꾸미자!</p>
          </div>
          <div class="columnView__contents">
            <figure class="columnView__info1">
              <img src="../html/assets/img/cardColumn01_01.jpg" alt="" />
              <figcaption>
                <h2>나도 이렇게 키우고 싶다</h2>
                <p>
                  집을 좀 아늑하게 꾸미고 싶어서 찾다 보면, 식물이 있는 공간이
                  어찌나 맘에 들던지! 그냥 두기만 해도 인테리어 효과 200%다.
                </p>
              </figcaption>
            </figure>
            <figure class="columnView__info2">
              <img src="../html/assets/img/cardColumn01_02.jpg" alt="" />
              <figcaption>
                <h2>
                  실내에서 멋지게 식물 키우는 <br />

                  현실적인 방법
                </h2>
                <p>
                  다시 현실로 돌아와서. 멋지게 배치한 인테리어 사진들 속의
                  식물들은 어떻게 키우는 거지? 궁금해진다. 물론 연출일 확률이
                  99.999%다. 특히 창가가 아닌 곳에서 초록 초록한 생명력을
                  뿜어내고 있을 때에는 무조건이다. 하지만 방법은 있다! 창문이
                  하나뿐인 내 방에서 1년 넘게 여러 개의 식물을 키우다 보니 알게
                  되었다. 창가가 아닌 곳에서도 잘 키우는 방법을. (마음 같아서는
                  햇빛 잘 드는 좋은 곳에서 모두 키우고 싶지만 창문은 하나뿐)
                </p>
              </figcaption>
            </figure>
            <figure class="columnView__info3">
              <img src="../html/assets/img/cardColumn01_03.jpg" alt="" />
              <figcaption>
                <h2>창가가 아닌 곳에 두고 싶을 때</h2>
                <ul>
                  <li>1. 좋은 환경 순서로 순위매기기</li>
                  <p>
                    햇빛이 어디까지 들어오나? 확인하고, 놓고 싶은 자리의 순위를
                    매겨본다(좋은 환경 순서로)
                  </p>

                  <li>2. 처음 집에 온 식물은 무조건!</li>
                  <p>
                    처음 산 식물은 최소 1-2주 정도 1순위의 가장 좋은 자리에서
                    지낸다. 바뀐 환경에 적응하는 시간이다.
                  </p>

                  <li>3. 순회공연을 한다</li>
                  <p>
                    놓고 싶은 자리에 하나씩 옮겨놓고 상태를 지켜보며, 위치를
                    번갈아가며 옮겨준다. 혹 2-3순위에 있던 식물 상태가
                    안좋아지면 무조건 1순위로 옮겨 햇빛 처방을 받게 한다.
                  </p>
                </ul>
              </figcaption>
            </figure>
            <figure class="columnView__info4">
              <img src="../html/assets/img/cardColumn01_04.jpg" alt="" />
              <figcaption>
                <p>
                  이렇게 예쁘게 사는 척하다 보면 어느 날 식물에 감정이입이
                  되기도 한다. 초록빛 생명력이 꿈틀거리는 모습을
                  보기라도한다면.. 진짜 식구가 되는 시간이다.
                </p>
              </figcaption>
            </figure>
            <div class="copy">
              <em>copy.</em
              >&nbsp;김눈누&nbsp;&#124;&nbsp;&nbsp;&nbsp;<em>data.</em>&nbsp;2022.10.20
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
            <li class="columnView__keyword"><a href="https://youtu.be/K6Wt7MxyqPc" target="_blank">플랜테리어</a><img
                src="../html/assets/img/column__go.svg"
                alt="유튜브 바로가기"
              /></li>
            <li class="columnView__keyword"><a href="https://youtu.be/fU947yIyIv0">가장멋진</a><img
                src="../html/assets/img/column__go.svg"
                alt="유튜브 바로가기"
              /></li>
            <li class="columnView__keyword"><a href="http://homming.dothome.co.kr/plantMoa/plantmoaView07.php">바질트리</a><img
                src="../html/assets/img/column__go.svg"
                alt="식물모아 바로가기"
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
