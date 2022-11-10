<?php
    include "../connect/session.php";
    include "../connect/connect.php";
?>
<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>식물모아 상세</title>

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
    <!-- //header -->

    <main id="main">
        <section id="plantmoaView" class="container">
            <div class="plantmoaView__inner">
                <figure class="plantmoaView__img2"
                    style="background-image: url(https://huga.s3.ap-northeast-2.amazonaws.com/plantImages/16625523760131.jpg);">
                </figure>
                <!-- 이미지 링크 변경 -->
                <div class="plantmoaView__contents">
                    <div class="title">
                        <h1>Rhaphidophora decursiva</h1>
                        <h2>라피도포라 디컬시바</h2>
                    </div>
                    <ul class="plantmoaView__keywords">
                        <li class="plantmoaView__keyword">빛이 적어도 되는</li>
                        <li class="plantmoaView__keyword">초보자용</li>
                    </ul>
                    <div class="plantmoaView__con">
                        <p>
                           라피도포라 디컬시바는 아시아의 열대 우림이 원산지인 덩굴성 식물이에요. 옆으로 기며 자라는 줄기와 줄기 방향의 수직으로 자라는 잎이 유니크한 디컬시바는 진한 녹색의 시원하게 찢어진 잎이 매력적이랍니다. 수태봉이나 지지대로 모양을 잡아주지 않으면 땅을 기어가며 자라나기 때문에 원하는 방향으로 줄기를 유도하면서 키우는 게 좋아요. 디컬시바는 빛이 적은 곳에서도 잘 자라고 일반적인 실내 습도에서 잘 자란답니다.
                        </p>
                    </div>
                    <div class="plantmoaView__item">
                        <ul class="notice-items">
                            <div class="notice-items-flex">
                                <li class="notice-item">
                                    <div class="notice-img1"></div>
                                    <h3 class="notice-item-title">평균 주 1~2회</h3>
                                    <h4 class="notice-item-desc">흙 표면부터 3cm까지 마르면, 듬뿍 주세요</h4>
                                </li>
                                <li class="notice-item">
                                    <div class="notice-img2"></div>
                                    <h3 class="notice-item-title">반양지</h3>
                                    <h4 class="notice-item-desc">하루 2~3시간 정도의 은은한 햇빛이 필요해요</h4>
                                </li>
                            </div>
                            <div class="notice-items-flex">
                                <li class="notice-item">
                                    <div class="notice-img3"></div>
                                    <h3 class="notice-item-title">40~70%</h3>
                                    <h4 class="notice-item-desc">주변 공기가 너무 축축하지 않게 관리해주세요</h4>
                                </li>
                                <li class="notice-item">
                                    <div class="notice-img4"></div>
                                    <h3 class="notice-item-title">잘 자라는 온도</h3>
                                    <h4 class="notice-item-desc">15~25℃의 온도에서 잘 자라요</h4>
                                </li>
                            </div>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="plantmoaInfo">
                <div class="info_title">
                    <h1>자세히 알아보기</h1>
                    <h2>라피도포라 디컬시바</h2>
                </div>
                <div class="details-title-fixed">
                    <ul class="nav nav-tabs" id="detailsTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" id="water-tab" data-toggle="tab" href="#water" role="tab"
                                aria-controls="water" aria-selected="true">물
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="light-tab" data-toggle="tab" href="#light" role="tab"
                                aria-controls="light" aria-selected="false">빛
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="humidity-tab" data-toggle="tab" href="#humidity" role="tab"
                                aria-controls="humidity" aria-selected="false">습도
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="temperature-tab" data-toggle="tab" href="#temperature" role="tab"
                                aria-controls="temperature" aria-selected="false">관리
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="plantmoaInfo__inner2">
                    <div class="tabInfo active">
                        <figure class="plantmoaInfo__img">
                            <img src="../html/assets/img/plantmoaView02.jpg" alt="물관리">
                        </figure>
                        <div class="plantmo__Water">
                            <h3 class="plantInfo__tit">물 관리</h3>
                            <p class="plantInfo__desc">
                                디컬시바는 촉촉한 공기는 좋아하지만, 뿌리 과습에는 약한 식물입니다. 항상 흙마름을 체크하신 후 물을 주셔야 뿌리 과습을 예방할 수 있답니다. 화분 위에서 3cm 정도 높이의 흙이 보송하게 말랐을 때 물을 주세요. 물을 주실 때는 화분 밑으로 물이 빠져나올 때까지 충분히 주셔야 흙 전체에 충분히 물이 흡수될 수 있답니다. 물을 줄 때는 너무 차갑지 않은 온도의 물을 주는 것이 좋아요.
                            </p>
                            <h3 class="plantInfo__tit2">여름</h3>
                            <p class="plantInfo__desc2">
                               성장이 빨라지는 봄~여름에는 흙 마름도 빨라져 물 주는 횟수를 늘려주시는 게 좋아요. 햇빛이 잘 드는 공간에서 키우고 계신다면 빛이 강한 한낮을 피해서 아침이나 저녁시간에 물을 주세요. 물방울이 볼록렌즈 처럼 빛을 한 곳에 모아주어 과한 열기로 인해 잎이 상할 수 있어요. 장마철에는 흙의 마름을 꼭 확인하시고 물을 주시고 환기를 잘 시켜 주어야 과습과 병충해의 피해를 막을 수 있답니다.

                            </p>
                            <h3 class="plantInfo__tit3">겨울</h3>
                            <p class="plantInfo__desc3">
                              날씨가 추워지는 늦가을~겨울에는 성장속도가 느려져 흙 마름도 더뎌진답니다. 따라서 물 주는 횟수도 줄여주시는 게 좋아요. 겨울철에는 날씨가 가장 따뜻할 때 너무 차갑지 않은 온도의 물을 주시는 게 좋아요.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="plantmoaInfo__inner2">
                    <div class="tabInfo">
                        <figure class="plantmoaInfo__img">
                            <img src="../html/assets/img/plantmoaView02_02.jpg" alt="빛 관리">
                        </figure>
                        <div class="plantmo__Water">
                            <h3 class="plantInfo__tit">빛 관리</h3>
                            <p class="plantInfo__desc">
                                디컬시바는 직접적인 햇빛보다는 커튼 등을 거쳐 부드러워진 간접적인 빛을 좋아한답니다. 직접적인 강한 빛 아래에서는 잎 끝이 까맣게 탈 수 있어요.
                            </p>
                            <h3 class="plantInfo__tit2">빛이 너무 강하면</h3>
                            <p class="plantInfo__desc2">
                                직접적인 강한 햇빛 아래에서는 잎이 탈 수 있으니 한낮에는 커튼이나 블라인드로 약간의 차광을 해주시는 게 좋아요. </p>
                            <h3 class="plantInfo__tit3">빛이 너무 약하면</h3>
                            <p class="plantInfo__desc3">
                                빛이 너무 약하면 잎 색이 밝게 변하고 잎이 얇아지며 축 처지는는 현상이 나타날 수 있어요. 또한 잎이 나는 줄기의 마디가 길어져 수형이 웃자랄 수 있으니 밝은 공간으로 옮겨주시는 것이 좋아요. 
                            </p>
                        </div>
                    </div>
                </div>
                <div class="plantmoaInfo__inner2">
                    <div class="tabInfo">
                        <figure class="plantmoaInfo__img">
                            <img src="../html/assets/img/plantmoaView02_03.jpg" alt="습도 관리">
                        </figure>
                        <div class="plantmo__Water">
                            <h3 class="plantInfo__tit">습도는?</h3>
                            <p class="plantInfo__desc">
                               디컬시바는 보통 실내 습도에 잘 적응하지만 건조한 것보다는 습한 공기를 더 좋아해요.
                            </p>
                            <h3 class="plantInfo__tit2">습도가 낮으면</h3>
                            <p class="plantInfo__desc2">
                              디컬시바는 습도가 낮아 건조해지면 잎 끝이 마르는 증상이 나타나요. 또한 습도가 너무 낮은 환경이 지속되면 식물이 뿌리로부터 물을 잘 끌어올릴 수 없게 되어 잎 끝이 마르거나 잎이 떨어질 수 있어요. 따라서 주변 공간의 습도가 너무 낮다면(40% 이하) 분무기를 이용해 식물 주변의 습도를 높여주시거나 가습기를 사용해주시는 게 좋아요. 가습기와 서큘레이터를 함께 이용하면 한 곳의 습도만 높아지는 것을 방지할 수 있답니다.     </p>
                            <h3 class="plantInfo__tit3">습도가 높으면</h3>
                            <p class="plantInfo__desc3">
                         잎이 무거워 처지는 느낌이 들고, 흙이 잘 마르지 않아 과습의 피해를 입을 수 있어요. 또한 습도가 높게 지속되면서 공기를 순환시켜주지 않으면 병충해가 생기기 쉬운 환경이 만들어져요. 또한 줄기나 잎 끝이 갈색으로 물러질 수 있습니다. 따라서 환기를 자주 해주시거나 가습기와 서큘레이터를 함께 이용해 공기를 순환시켜 주는 게 좋아요. </p>
                        </div>
                    </div>
                </div>
                <div class="plantmoaInfo__inner2">
                    <div class="tabInfo">
                        <figure class="plantmoaInfo__img">
                            <img src="../html/assets/img/plantmoaView02_04.jpg" alt="관리">
                        </figure>
                        <div class="plantmo__Water">
                            <h3 class="plantInfo__tit">적정 온도</h3>
                            <p class="plantInfo__desc">
                               열대우림지역이 원산지인 히메 몬스테라는 보통 실내 온도에서 잘 자라고 따뜻한 환경을 좋아해요. 다만 겨울철의 추위를 신경 써야 한답니다.
                            </p>
                            <h3 class="plantInfo__tit2">온도가 낮으면</h3>
                            <p class="plantInfo__desc2">
                           열대우림지역이 원산지인 디컬시바는 따뜻한 환경을 좋아해요. 날씨가 쌀쌀해지는 늦가을에서 겨울에는 식물의 지상부(흙 위의 드러난 부분; 줄기, 잎)가 냉해를 입을 수 있고 흙의 온도가 낮아지면 지하부(흙 아래 심겨진 부분)까지 영향을 미칠 수 있어요. 겨울철에도 건강하게 생육을 지속하고 싶으시다면 실내 온도를 13ºC 이상으로 관리해주세요. </p>
                            <h3 class="plantInfo__tit2">온도가 높으면</h3>
                            <p class="plantInfo__desc3">
                               따뜻한 봄, 여름이 오면 새 잎이 돋아나는 모습을 볼 수 있을 거에요. 하지만 여름 한낮의 뜨거운 온도가 지속되면 잎과 뿌리의 호흡이 불량해질 수 있으니 30ºC 이상의 고온의 장소는 피해주세요.
                            </p>
                        </div>
                    </div>
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

    <script>
        //식물 모아 상세 관리 탭 버튼
        const tabBtn = document.querySelectorAll(".nav-tabs > li > a");
        const tabCont = document.querySelectorAll(".plantmoaInfo__inner2 > div");

        tabBtn.forEach((element,index) => {
            element.addEventListener("click", (event) => {
                event.preventDefault();

                tabBtn.forEach(a => {
                    a.classList.remove("active");
                })

                element.classList.add("active");

                tabCont.forEach(div => {
                    div.style.display = "none";
                });
                tabCont[index].style.display = "flex";
            })

        })
    </script>
</body>

</html>