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
            />1040
          </p>
        </div>
        <div class="columnView__inner">
          <div class="columnView__title">
            <h1>춥고 긴 겨울이 버거운 실내 식물들을 위한 응급처치법</h1>
            <p>차가운 물, 찬 공기, 그늘을 피해 주세요!</p>
          </div>
          <div class="columnView__contents">
            <figure class="columnView__info1">
              <img src="../html/assets/img/cardColumn03_01.jpg" alt="" />
              <figcaption>
                <h2>모든게 다 얼어버릴 것 같은 겨울</h2>
                <p>
                  주택에서 첫 번째 겨울을 맞았을 땐 화분들이 단체로 얼음 땡을
                  하는 줄 알았어요. 다들 그대로 멈춰 꼼짝도 하지 않더라고요.
                  살아 있는지 죽은 건지 대체 어떻게 알 수가 있겠어요. 그런데도
                  봄이 되니 꿈틀꿈틀 솟아나더라고요. 생명의 힘. 그러나 이번
                  겨울은 유난히 길어 과연 그날이 오긴 올까 싶어요. 영하 10도
                  이하로 내려가는 날씨를 이토록 자주 봤던 겨울이 있었나요.
                  기록할 만한 엄청난 겨울을 보내고 있는 것 같아요. 실제로 30년
                  만의 가장 추운 겨울이래요!
                </p>
                <p>
                  머리카락까지 얼어붙을 듯한 추운 겨울이나 혼이 쏙 빠지는 더운
                  여름은 사람도 견디기 힘들지만 식물에게도 가혹합니다.
                  실내공기정화식물 대부분은 영상 15도 이상 실내 기온에서
                  무난하게 견디는데, 이번 겨울이 유난히 춥고 길어지고 있어
                  버거워하는 것 같아요. 저희 집에도 시들시들한 노란 잎으로
                  불만을 표시하는 애들이 몇 있어요. 이렇게 적극적으로 의사
                  표현하는 식물이 있을 때는 ‘별 일 없을 거야’하고 외면하지
                  마시고, 몇 가지 응급 처치를 해 주세요.
                </p>
              </figcaption>
            </figure>
            <figure class="columnView__info2">
              <img src="../html/assets/img/cardColumn03_02.jpg" alt="" />
              <figcaption>
                <h2>식물들 응급처치!!</h2>
                <p>
                  지금 바로 자리에서 일어나 식물에게 가셔서 혹시 창문에
                  나뭇가지가 닿아 있는지 확인해 보세요. 창문 가장자리는 실내와
                  온도차가 커요. 유리창에 식물의 잎이 닿아 있다면 화분을
                  옮겨주세요. 냉해를 입을 수 있어요. 그래도 식물이 시들시들하다
                  싶으면 해가 잘 드는 곳, 따뜻한 곳으로 자리를 옮겨 주세요.
                  온도에 민감한 아이들은 잠깐 사이에도 세상을 떠날 수 있어요.
                  정들었던 식물이 떠나는 그 기분, 반려동물과 이별할 때와 다르지
                  않습니다. 난데없는 이별을 막으려면 외출하실 때에도 보일러
                  온도는 19~20 정도에 맞춰 주시는 편이 좋습니다.
                </p>
                <p>
                  화분에 물을 주실 때 역시 물 온도를 주의해야 해요. 수도꼭지에서
                  지금 바로 받은 차가운 물을 그대로 화분에 주시면 ‘너를 부숴
                  버릴 거야’와 같은 의미예요. 뿌리에 갑자기 차가운 물세례를
                  받으면 냉해를 입어 바로 죽어 버릴 수 있어요. 수돗물을 하룻밤
                  정도 묵혀 실내 온도에 맞추고, 염소를 날린 다음 화분에 주면
                  좋겠지만 바쁜 우리가 식물을 공주처럼 모실 순 없지 않겠어요.
                  저는 온수로 미지근하게 해서 줍니다. 겨울이라도 EM용액은 꼭
                  넣어 주고요. 겨울엔 생장이 멈추는 시기이니 비료는 쉽니다.
                </p>
                <p>
                  난방을 구동하는 계절 특성상 주의할 점이 있어요. 화분이 바닥에
                  바로 맞닿아 있다면 바닥과 화분 사이에 공간을 띄워 주세요.
                  화분받침이 있다고 해도 바닥의 온기가 뿌리로 전달되면 썩을 수
                  있어요. 물받이가 있는 화분 받침을 사용하는 것도 한 방법이고,
                  스툴 위나 테이블 위에 올려 두어도 좋습니다. 화분받침이 접시
                  형태라면 돌을 깔아 바닥면에서 띄워줍니다. 실내공기정화식물은
                  뿌리와 뿌리의 미생물이 호흡이 원활할수록 공기 정화 효과가 크니
                  통풍이 잘 되도록 신경 써 주세요.
                </p>
              </figcaption>
            </figure>
            <figure class="columnView__info3">
              <img src="../html/assets/img/cardColumn03_03.jpg" alt="" />
              <figcaption>
                <h2>건조할 때는?</h2>
                <p>
                  건조한 공기 덕분에 잎사귀도 퍼석하게 말라요. 잎에 스프레이를
                  하루 1~2회 정도 해 주면 캠핑장 산속에서 자고 온 아가들
                  얼굴처럼 뽀얗게 맑은 얼굴로 반짝거립니다. EM용액을 타 주면
                  좋아요. 미생물 덕분에 잎이 더욱 반짝반짝 해 지거든요. 노즐이
                  금속으로 되어 물 입자가 곱게 뿌려지는 스프레이를 쓰시면 바닥에
                  떨어지는 물방울을 줄일 수 있어요. 마루가 물에 젖으면 내구성이
                  떨어지니까 걸레를 들고 다니며 닦습니다. 타일이나 장판 바닥은
                  어떤 스프레이를 쓰셔도 아무 문제없습니다.
                </p>
              </figcaption>
            </figure>
            <figure class="columnView__info4">
              <img src="../html/assets/img/cardColumn03_04.jpg" alt="" />
              <figcaption>
                <p>
                  저희는 겨울에 조금 춥게 지내는 편인데, 19~20도 정도로
                  유지합니다.
                </p>
                <p>
                  식물원 온실의 온도가 16~18도 안팎이니 식물을 위해서는 20도
                  정도면 충분해요. 건강한 겨울 되세요!
                </p>
              </figcaption>
            </figure>
            <div class="copy">
              <em>copy.</em
              >&nbsp;김눈누&nbsp;&#124;&nbsp;&nbsp;&nbsp;<em>data.</em>&nbsp;2022.10.19
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
              <li class="columnView__keyword">겨울</li>
              <li class="columnView__keyword">응급처치</li>
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
