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
            />1000
          </p>
        </div>
        <div class="columnView__inner">
          <div class="columnView__title">
            <h1>만약에 식물이 말을 하게 된다면?</h1>
            <p>내가 기르는 식물이 말을 하게 된다면 어떻게 될까?</p>
          </div>
          <div class="columnView__contents">
            <figure class="columnView__info1">
              <img src="../html/assets/img/column04_01.jpg" alt="식물이 말을 하게 된다면?" />
              <figcaption>
                <h2>당신이 키우는 식물이 갑자기 말을 하게된다면?</h2>
                <p>
                    어느날 문득 든 생각 하나, 내가 키우는 식물이 갑자기 말을 하게 된다면 과연 나는 잘 키울수 있을까?...<br>
                    식물을 처음 키워 본다면 누구나 한번쯤 겪는 과정이 있다... <br>
                    그것은 바로 내가 키우는 식물을 잘 이해 하지 못하는 것이다.
                </p>
              </figcaption>
            </figure>
            <figure class="columnView__info2">
              <img src="../html/assets/img/column04_02.jpg" alt="식물이 말을 하게 된다면?" />
              <figcaption>
                <h2 style="margin-bottom: 20px; text-align: center;">
                    처음에는 누구나 다 그럴듯한 계획이 있었다...
                </h2>
                <p>
                    우리는 식물에 대해 알지 못하기 때문에 처음에는 실수를 많이 한다. 그리고 그것은 식물의 생각과 우리의 행동이 서로 다른 결과를
                    만들기도 한다. <br>
                    식물이 '햇빛이 부족해...' 하고 시들어 있으면 <br> 우리는 '어? 식물이 물이 모자른가?' 이렇게 생각을 많이한다.<br>
                    '겨울은 너무 추워... 물좀 그만 줘...' 라고 말하면 <br>
                    '어... 물을 좀 줘야 하나?'라며 무한정 물을주는 굴레가 반복 되고, 결국 식물은 죽게 된다...<br>
                    그렇다... 잘 알지 못하는 상태에서 나는 물주기만이 나의 유일한 방법이라고 생각하게 된다... 하지만, 물주기가
                    정답이라고 생각한 당신! <br>
                    이것을 알고 가면 그것이 정답이 아니라는 것을 잘 알 수 있을 것이다.
                </p>
            </figure>
            <figure class="columnView__info2">
              <img src="../html/assets/img/column04_03.jpg" alt="선인장" style="margin-bottom: 0; font-size: 12px;" />
              <figcaption>
                <p style="text-align: center; font-size: 14px;">식물과 소통하는 것</p>
                <p style="margin-top: 20px;">
                    처음부터 식물을 유심히 관찰 하는 것이 중요하다! <br><br>
                    식물을 유심히 관찰 하면 어제와 다른 모습을 조금 씩 발견할 수 있다. <br>
                    왜냐하면 식물은 환경이 변하는 것을 그다지 반기지 않는 생물이라서 그렇다.환경이 변해서 시들시들 해진것이
                    아닌지, 며칠을 지켜보고 물을 주거나 햇빛이 잘드는 위치로 옮기는 것을 추천한다. <br><br>
                    두번째는 일정한 패턴을 정하는 것<br><br>
                    잎이 시들해졌는데 13일만에 물을 줬더니 살아났다 싶으면 우리집 식물은 10~12일째 되는때 물을 주는 것이 좋다는
                    데이터를 얻게 된다.<br>
                    이렇듯 사람이든, 동물이든, 식물이든 서로 점점 알아가는 시간이 필요하다.
                </p>
              </figcaption>
            </figure>
            <figure class="columnView__info2">
                <img src="../html/assets/img/column04_05.jpg" alt="우리집 식물이 말을 한다면?"  />
                <figcaption>
                  <p>
                    이렇듯 서로에 대해 점점 알아 간다면, 우리집 반력식물과 좋은 관계를 형성할 수 있을 것이다.<br>
                    하지만, 이 과정에 도달하기 위해서는 많은 인내심과 세심한 관찰이 필요하다. <br><br>
                    자칫 잘못해서 내마음대로 식물에대해 이해해버리면 바로 관계의 유지와 식물에 대해 잘 못된 정보를 얻을 수 있기 때문이다.<br>
                    어쩌면 식물을 기르는 것은 사람과의 관계를 맺는 것과도 같은 과정이다.

                  </p>
                </figcaption>
              </figure>
              <figure class="columnView__info4">
                <img src="../html/assets/img/column04_04.jpg" alt="우리집 식물이 말을 한다면?"  />
                <figcaption>
                  <p style="margin-bottom: 40px;">
                    식물과의 관계를 유지하는 방법은 그 모습 자체를 관찰 하는 것과 우리가 식물을 이해 하는데에 있다. <br><br>
                    그옛날 어린왕자가 자신의 장미를 이해하기 위해 그랬던것 처럼... <br>


                  </p>
                </figcaption>
              </figure>
            <div class="copy">
              <em>copy.</em
              >&nbsp;플랜트 폭스&nbsp;&#124;&nbsp;&nbsp;&nbsp;<em>data.</em>&nbsp;2022.10.26
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
              <li class="columnView__keyword">식물이 말을 한다면?</li>
              <li class="columnView__keyword">식물기르기</li>
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
