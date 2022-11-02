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
            <h1>꽃을 사랑하는 당신을 위하여</h1>
            <p>봄을 가장 사랑하는 꽃, 벚꽃</p>
          </div>
          <div class="columnView__contents">
            <figure class="columnView__info1">
              <img src="../html/assets/img/column03_01.jpg" alt="벚꽃" />
              <figcaption>
                <h2>봄과 꽃을 사랑하는 당신이여</h2>
                <p>
                    그대여~ 그대여~ 봄바람 휘날리며~ 흩날리는 벚꽃잎이~<br>
                    봄하면 가장 떠오르는 노래.. <br>
                    그리고 가장 사랑하는 꽃, 벚꽃 사람들은 벚꽃이 피면서 봄이 왔다는것을 알게 된다.<br>
                    4월에 피는 벚꽃은 많은 사람들에게 즐거움과 봄이 찾아왔음을 알린다.
                </p>
              </figcaption>
            </figure>
            <figure class="columnView__info2">
              <img src="../html/assets/img/column03_02.jpg" alt="벚꽃" />
              <figcaption>
                <h2 style="margin-bottom: 20px; text-align: center;">
                    꽃말은 아름다운 정신, 정신적 사랑, 삶의 아름다움
                </h2>
                <p>
                    나무를 가득 뒤 덮는 꽃, 벚꽃이 만발할때의 그 아름다움은 잊지 못한다.<br>
                    연분홍빛이 살짝 감도는 흰색과 하트모양의 꽃잎이 벚꽃의 가장큰 특징이다. 꽃가지에 무리지어서
                    피는 것이 벚꽃을 더 화려하게 만든다.<br>
                    한 나무에 매우 많은 꽃들이 피어, 멀리서 보면 눈송이들이 나뭇가지에 붙어있는 모양새가 벚꽃을 더 눈길이 가게 만드는 매력인것 같다.<br>
                    피어있을때도 이쁘고, 질때도 이쁜 꽃이다...
                </p>
            </figure>
            <figure class="columnView__info2">
              <img src="../html/assets/img/column03_03.jpg" alt="선인장" style="margin-bottom: 0; font-size: 12px;" />
              <figcaption>
                <p style="text-align: center; font-size: 14px;">한국에서 벚꽃으로 가장 유명한 진해 군항제</p>
                <p style="margin-top: 20px;">
                    벚꽃은 생김새와 다르게 향기가 잘 나지 않는 꽃이다. 하지만, 그렇다고 그 꽃의 아름다움이 줄어드는것은 아니다.<br>
                    보고만 있어도 기분이 좋아진다. 꽃잎이 얇아서 떨어질때 조차도 너무 인상적이다.. <br>
                    꽃비가 내리는 착각마저 들며, 잠깐 숨돌리고 나면 금세 다 져있어서 아쉬움도 크다. <br>
                    하지만 그것이 더욱 잊혀지지 않기 때문에 많은 사람들의 사랑을 받는 것이라고 생각한다.
                </p>
              </figcaption>
            </figure>
            <figure class="columnView__info2">
                <img src="../html/assets/img/column03_04.jpg" alt="체리블라썸"  />
                <figcaption>
                  <p>
                    벚나무의 '벚'은 버찌의 순 우리말을 줄인것이다. 외국에서도 벚꽃을 부르는 말은 체리 블라썸. <br>
                    꽃이 지고 난다음에 벚나무에는 열매가 맺힌다. 색깔이 점점 짙어져 가는것이 열매가 무르 익어 간다는 뜻이다.<br>
                    꽃이 지고 난 다음에는 여전히 열매를 틔워서 아름다운 벚나무...

                  </p>
                </figcaption>
              </figure>
              <figure class="columnView__info4">
                <img src="../html/assets/img/column03_05.jpg" alt="체리블라썸"  />
                <figcaption>
                  <p style="margin-bottom: 40px;">
                    봄에 가장 아름다운 덧 없는 꽃이지만, 어쩌면 그렇기 때문에 더욱 아름답다고 느낄지도 모르겠다.<br>
                    아니면 그 꽃과 곁에 있는 사람때문에 더 그럴지도 모르지...<br>
                    어쩌면 봄의 왕인 장미보다 더 화려한 꽃이라고 생각된다.<br>
                    밤에 봐도 이쁘고, 낮에 봐도 이쁜 벚꽃... 여러분도 그 아름다움에 심취하시길...

                  </p>
                </figcaption>
              </figure>
            <div class="copy">
              <em>copy.</em
              >&nbsp;플랜트 폭스&nbsp;&#124;&nbsp;&nbsp;&nbsp;<em>data.</em>&nbsp;2022.10.30
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
              <li class="columnView__keyword"><a href="https://youtu.be/h2RMj5sqP8w" target="_blank">벚꽃이 피는 모습</a><img
									src="../html/assets/img/column__go.svg"
									alt="유튜브 바로가기"
								/></li>
              <li class="columnView__keyword"><a href="https://youtu.be/jic-l_1u_hc" target="_blank">벚꽃 명소</a><img
									src="../html/assets/img/column__go.svg"
									alt="유튜브 바로가기"
								/></li>
              <li class="columnView__keyword"><a href="https://youtu.be/M_o7GSDVk-Q" target="_blank">벚꽃? 매화?</a><img
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
