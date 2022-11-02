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
                    <img src="../html/assets/img/plantmoaView10.jpeg" alt="">
                </figure>
                <div class="plantmoaView__contents">
                    <div class="title">
                        <h1>Philodendron 'Jose Buono'</h1>
                        <h2>필로덴드론 호세부오노</h2>
                    </div>
                    <ul class="plantmoaView__keywords">
                        <li class="plantmoaView__keyword">초보자용</li>
                        <li class="plantmoaView__keyword">공기정화</li>
                        <li class="plantmoaView__keyword">빛이 적어도 되는</li>
                    </ul>
                    <div class="plantmoaView__con">
                        <p>
                            길쭉한 하트모양의 시원시원한 잎에 아름다운 흰색 무늬를 가진 필로덴드론 호세부오노는 무늬종 필로덴드론 중에서도 키우기 까다롭지 않은 편에 속해요. 흙 위로 공중
                            뿌리가 자라나며 줄기를 지지하기도 하며, 수태봉으로
                            지지해주면 잎이 더 힘있고 크게 성장한답니다. 버럴막스는 열대우림같은 환경에서 가장 잘 자라요. 주변 공기를 따뜻하게, 그리고 촉촉하게 관리해주시면 건강하게 잘 키울
                            수 있어요. 필로덴드론의 종류답게 공기 중의
                            포름알데히드와 일산화탄소를 제거하는 능력이 뛰어나 실내 공기정화 식물로의 역할도 수행해요.
                        </p>
                    </div>
                    <div class="plantmoaView__item">
                        <ul class="notice-items">
                            <div class="notice-items-flex">
                                <li class="notice-item">
                                    <div class="notice-img1"></div>
                                    <h3 class="notice-item-title">평균 주 1~2회</h3>
                                    <h4 class="notice-item-desc">흙 표면부터 3cm까지 마르면, 듬뿍 주세요.</h4>
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
                                    <h4 class="notice-item-desc">주변 공기가 건조해지지 않도록 관리해주세요</h4>
                                </li>
                                <li class="notice-item">
                                    <div class="notice-img4"></div>
                                    <h3 class="notice-item-title">잘 자라는 온도</h3>
                                    <h4 class="notice-item-desc">16~27℃의 온도에서 잘 자라요</h4>
                                </li>
                            </div>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="plantmoaInfo">
                <div class="info_title">
                    <h1>자세히 알아보기</h1>
                    <h2>필로덴드론 호세부오노</h2>
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
                                호세부오노는 촉촉한 공기는 좋아하지만, 뿌리 과습에는 약해요. 흙이 너무 축축하게 오래 지속되면 잎에 힘이 없이 축 처질 수 있어 물을 주기 전 항상 흙의
                                마름 정도를 파악한 후 물을 주세요. 화분 위에서 3~5cm
                                정도 높이의 흙이 보송하게 마르면 물을 주세요. 물을 주실 때는 화분 밑으로 물이 빠져나올 때까지 충분히 주셔야 흙 전체에 충분히 물이 흡수될 수 있답니다.
                                물을 준 후에는 화분받침에 고인 물은 바로 버려주셔야
                                뿌리의 호흡을 도울 수 있어요.
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
                                날씨가 추워지는 늦가을~겨울에는 성장속도가 느려져 흙 마름도 더뎌진답니다. 따라서 물 주는 횟수도 줄여주시는 게 좋아요. 겨울철에는 화분 속 흙이 대부분
                                말랐을 때, 미지근한 온도의 물을 주시는 게 좋아요.
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
                                호세부오노는 큰 나무 아래에서 자라던 식물로, 부드러운 걸러진 빛을 가장 좋아한답니다. 밝은 간접광이 오래 들어오는 공간에 두시고, 직접적인 강한 빛은
                                피해주세요.
                            </p>
                            <h3 class="plantInfo__tit2">빛이 너무 강하면</h3>
                            <p class="plantInfo__desc2">
                                뜨거운 직접적인 햇빛 아래에서는 잎 끝이 탈 수 있어 커튼이나 블라인드로 약간의 차광을 해주시는 게 좋아요.
                            <h3 class="plantInfo__tit3">빛이 너무 약하면</h3>
                            <p class="plantInfo__desc3">
                                빛이 너무 약하면 호세부오노의 성장속도가 아주 느려질 수 있어요. 또한 잎이 노랗게 바라고, 줄기가 힘이 없어져 축 처져 자라는 현상이 나타날 수 있어요.
                                줄기가 튼튼한 버럴막스를 만나기 위해서는 더 밝은 빛을 받을
                                수 있는 곳으로 옮겨주세요.
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
                                버럴막스는 높은 습도를 아주 좋아해요. 가습기를 이용해주시거나 잎 주변에 자주 분무해주어 주변 습도를 높게 관리해주세요.
                            </p>
                            <h3 class="plantInfo__tit2">습도가 낮으면</h3>
                            <p class="plantInfo__desc2">
                                습도가 낮아 건조해지면 잎 끝에 수분이 부족한 듯이 갈색으로 마르고, 새 순에 상처가 생길 수 있어요. 또한 습도가 너무 낮은 환경이 지속되면 식물이
                                뿌리로부터 물을 잘 끌어올릴 수 없게 되어 잎 끝이 마르거나 잎이
                                떨어질 수 있어요. 따라서 주변 공간의 습도가 너무 낮다면(40% 이하) 분무기를 이용해 식물 주변의 습도를 높여주시거나 가습기를 사용해주시는 게 좋아요.
                                가습기와 서큘레이터를 함께 이용하면 한 곳의 습도만 높아지는
                                것을 방지할 수 있답니다.
                            </p>
                            <h3 class="plantInfo__tit3">습도가 높거나 흙이 축축한 경우</h3>
                            <p class="plantInfo__desc3">
                                습도가 높게 지속되면서 공기를 순환시켜주지 않으면 병충해가 생기기 쉬운 환경이 만들어져요. 따라서 환기를 자주 해주시거나 가습기와 서큘레이터를 함께 이용해
                                공기를 순환시켜 주는 게 좋아요.
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
                                호세부오노는 고온다습한 열대우림에서 온 식물이에요. 추위에 약해 주변 온도를 따뜻하게 관리해주셔야 한답니다. 만약 실외에서 키우고 계시다면, 늦가을~초봄까지는
                                실내로 들여서 키워주셔야 건강하게 키울 수 있습니다.
                            </p>
                            <h3 class="plantInfo__tit2">온도가 낮으면</h3>
                            <p class="plantInfo__desc2">
                                호세부오노는 찬 바람에 아주 약해 우풍을 맞지 않는 공간에 놓아주세요. 날씨가 쌀쌀해지는 늦가을에서 겨울에는 식물의 지상부(흙 위의 드러난 부분; 줄기,
                                잎)가 냉해를 입을 수 있고 흙의 온도가 낮아지면 지하부(흙
                                아래 심겨진 부분)까지 영향을 미칠 수 있어요. 겨울철에도 건강하게 생육을 지속하고 싶으시다면 실내 온도를 15ºC 이상으로 관리해주세요. 온도가 낮아지면
                                잎이 얼어 잎 색이 변하고 가지가 축 늘어지는 냉해를 입을
                                수 있어요.
                            </p>
                            <h3 class="plantInfo__tit2">온도가 높으면</h3>
                            <p class="plantInfo__desc3">
                                따뜻한 봄과 초여름에는 호세부오노가 빠르게 성장하는 모습을 만날 수 있어요. 하지만 한여름 낮의 뜨거운 온도가 지속되면 잎과 뿌리의 호흡이 불량해질 수 있으니
                                30ºC 이상의 고온의 장소는 피해주세요.
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
    <!-- login팝업 -->
    <script src="../../html/../html/assets/js/login.js"></script>

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