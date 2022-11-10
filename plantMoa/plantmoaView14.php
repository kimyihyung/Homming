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
                <figure class="plantmoaView__img">
                    <img src="../html/assets/img/plantmoaView14.jpeg" alt="">
                </figure>
                <div class="plantmoaView__contents">
                    <div class="title">
                        <h1>Coniogramme emeiensis 'Golden Zebra'</h1>
                        <h2>코니오그램 에메이엔시스 '골든 제브라'</h2>
                    </div>
                    <ul class="plantmoaView__keywords">
                        <li class="plantmoaView__keyword">공기정화</li>
                        <li class="plantmoaView__keyword">빛이 적어도 되는</li>
                        <li class="plantmoaView__keyword">선물하기 좋은</li>
                    </ul>
                    <div class="plantmoaView__con">
                        <p>
                            코니오그램 에메이엔시스는 반질반질 윤이나는 라임색 잎에 초록색 가로 줄무늬가 아름다운 고사리과 식물이에요. 잎의 무늬가 마치 얼룩말의 무늬 같다고 하여 'Golden
                            Zebra'라는 이름이 붙여졌답니다. 서양에서는
                            잎 모양이 대나무 같다고 하여 'Bamboo Fern'이라고 불리고 있어요. 코니오그램은 고사리과 식물답게 촉촉한 습도를 사랑하는 식물입니다. 초보 집사님들이
                            키우기에는 살짝 난이도가 높은 식물로, 흙이 마른 것을
                            확인한 후에 물을 주시고 주변 공기는 항상 촉촉하게 관리해주시면 건강하게 키우실 수 있어요.
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
                                    <h3 class="notice-item-title">반음지</h3>
                                    <h4 class="notice-item-desc">하루 2~3시간 정도의 은은한 햇빛이 필요해요</h4>
                                </li>
                            </div>
                            <div class="notice-items-flex">
                                <li class="notice-item">
                                    <div class="notice-img3"></div>
                                    <h3 class="notice-item-title">70% 이상</h3>
                                    <h4 class="notice-item-desc">주변 공기를 촉촉하게 관리해주세요</h4>
                                </li>
                                <li class="notice-item">
                                    <div class="notice-img4"></div>
                                    <h3 class="notice-item-title">잘 자라는 온도</h3>
                                    <h4 class="notice-item-desc">21~25℃의 온도에서 잘 자라요</h4>
                                </li>
                            </div>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="plantmoaInfo">
                <div class="info_title">
                    <h1>자세히 알아보기</h1>
                    <h2>코니오그램</h2>
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
                                코니오그램은 흙이 계속 축축하면 과습으로 인해 잎 끝이 검게 변할 수 있어요. 물을 주기 전에는 항상 화분 높이의 절반 정도까지 흙이 말랐는 지 확인한 후에
                                물을 주시는 게 좋아요. 물을 준 후에는 공기 순환이 잘
                                되는 곳에 두어 흙이 과하게 젖는 것을 방지해주셔야 뿌리가 건강하게 자랄 수 있답니다. 물을 주실 때는 샤워기를 통해 잎 샤워를 함께 시켜주시면 더 건강하고
                                싱그러운 코니오그램을 만나보실 수 있어요.
                            </p>
                            <h3 class="plantInfo__tit2">여름</h3>
                            <p class="plantInfo__desc2">
                                성장이 빨라지는 봄~여름에는 흙 마름도 빨라져 물 주는 횟수를 늘려주시는 게 좋아요. 햇빛이 잘 드는 공간에서 키우고 계신다면 빛이 강한 한낮을 피해서
                                아침이나 저녁시간에 물을 주세요. 물방울이 볼록렌즈 처럼 빛을
                                한 곳에 모아주어 과한 열기로 인해 잎이 상할 수 있어요. 장마철에는 흙의 마름을 꼭 확인하시고 물을 주시고 환기를 잘 시켜 주어야 과습과 병충해의 피해를
                                막을 수 있답니다.
                            </p>
                            <h3 class="plantInfo__tit3">겨울</h3>
                            <p class="plantInfo__desc3">
                                날씨가 추워지는 늦가을~겨울에는 성장속도가 느려져 흙 마름도 더뎌진답니다. 따라서 물 주는 횟수도 줄여주시는 게 좋아요. 겨울철에는 날씨가 가장 따뜻할 때
                                너무 차갑지 않은 온도의 물을 주시는 게 좋아요.
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
                                코니오그램은 창문이나 커튼을 거친 부드러운 햇빛을 좋아해요. 은은한 밝은 빛이 오래 머무는 곳에서 키워주세요.
                            </p>
                            <h3 class="plantInfo__tit2">빛이 너무 강하면</h3>
                            <p class="plantInfo__desc2">
                                코니오그램은 한낮의 강한 직접적인 햇빛을 받으면 잎 끝이 타 들어갈 수 있으니 한낮에는 커튼이나 블라인드로 차광을 해주시는 게 좋아요.
                            <h3 class="plantInfo__tit3">빛이 너무 약하면</h3>
                            <p class="plantInfo__desc3">
                                너무 어두워 빛이 부족한 곳에서는 코니오그램의 도톰하고 빳빳한 잎에 힘이 없어질 수 있어요. 또한 빛이 적은 곳에서는 흙 마름도 더뎌져 과습의 피해가 오기
                                쉬워집니다. 은은한 밝은 빛을 받을 수 있는 곳으로
                                옮겨주세요.
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
                                코니오그램은 촉촉한 환경을 좋아해요. 자주 분무를 해주어 주변 공기를 촉촉하게 해 주신다면 더 파릇파릇하고 풍성해질 거에요,
                            </p>
                            <h3 class="plantInfo__tit2">습도가 낮으면</h3>
                            <p class="plantInfo__desc2">
                                촉촉한 습도를 좋아하는 코니오그램은 습도가 낮아지면 잎 끝이 갈색으로 타들어가는 현상이 나타나요. 또한 습도가 너무 낮은 환경이 지속되면 식물이 뿌리로부터
                                물을 잘 끌어올릴 수 없게 되어 잎 끝이 마르거나 잎이
                                떨어질 수 있어요. 따라서 주변 공간의 습도가 너무 낮다면(40% 이하) 분무기를 이용해 식물 주변의 습도를 높여주시거나 가습기를 사용해주시는 게 좋아요.
                                가습기와 서큘레이터를 함께 이용하면 한 곳의 습도만 높아지는
                                것을 방지할 수 있답니다.
                            </p>
                            <h3 class="plantInfo__tit3">습도가 높으면</h3>
                            <p class="plantInfo__desc3">
                                높은 습도가 유지되면서 공기가 함께 순환되지 못하면 병충해가 생기기 쉬우므로 환기를 자주 해주시거나 가습기와 서큘레이터를 함께 이용해 공기를 순환시켜 주는 게
                                좋아요.
                            </p>
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
                                수채화 고무나무는 추위에 아주 약하고 온도변화에 예민한 식물이에요. 온도 변화가 심한 창가나 에어컨, 난방기구 아래에 두지 마세요. 특히 차가운 바람이
                                드나드는 곳은 피해주셔야 잎이 떨어지는 것을 방지할 수 있어요.
                            </p>
                            <h3 class="plantInfo__tit2">온도가 낮으면</h3>
                            <p class="plantInfo__desc2">
                                크로톤은 따뜻한 온도를 좋아하는 식물입니다. 날씨가 쌀쌀해지는 늦가을에서 겨울에는 식물의 지상부(흙 위의 드러난 부분; 줄기, 잎)가 냉해를 입을 수 있고
                                흙의 온도가 낮아지면 지하부(흙 아래 심겨진 부분)까지
                                영향을 미칠 수 있어요. 주변 온도가 10ºC 이하로 내려가면 잎이 떨어지고, 5ºC 이하로 내려가면 냉해를 입어 고사할 수 있어요. 겨울철에도 건강하게
                                생육을 지속하고 싶으시다면 실내 온도를 15ºC 이상으로
                                관리해주세요.
                            </p>
                            <h3 class="plantInfo__tit2">온도가 높으면</h3>
                            <p class="plantInfo__desc3">
                                크로톤은는 따뜻한 온도를 좋아하는 식물입니다. 따뜻한 봄, 여름이 오면 건강하게 성장하는 모습을 볼 수 있을 거에요. 하지만 여름 한낮의 뜨거운 온도가
                                지속되면 잎과 뿌리의 호흡이 불량해질 수 있으니 30ºC 이상의
                                고온의 장소는 피해주세요.
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