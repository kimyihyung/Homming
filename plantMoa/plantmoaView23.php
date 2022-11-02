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
                    <img src="../html/assets/img/plantmoaView23.jpg" alt="">
                </figure>
                <div class="plantmoaView__contents">
                    <div class="title">
                        <h1>Crassula muscosa</h1>
                        <h2>녹탑</h2>
                    </div>
                    <ul class="plantmoaView__keywords">
                        <li class="plantmoaView__keyword">공기정화</li>
                        <li class="plantmoaView__keyword">빛이 적어도 되는</li>
                        <li class="plantmoaView__keyword">선물하기 좋은</li>
                        <li class="plantmoaView__keyword">초보자용</li>
                        <li class="plantmoaView__keyword">다육/선인장</li>
                    </ul>
                    <div class="plantmoaView__con">
                        <p>
                            녹탑은 그 모양이 마치 시계줄 같이 생겨서 'Watch Chain'이라고 불리우는 다육식물이에요. 돌나물과에 속하기 때문에 야외에서 강한 빛을 받고 자라면 꽃이
                            피기도 한답니다. 녹탑은 키가 작고 아담해서 테라리움을
                            장식할 때도 많이 사용돼요. 키우기도 어렵지 않아 초보 가드너들에게 추천하는 식물이랍니다.
                        </p>
                    </div>
                    <div class="plantmoaView__item">
                        <ul class="notice-items">
                            <div class="notice-items-flex">
                                <li class="notice-item">
                                    <div class="notice-img1"></div>
                                    <h3 class="notice-item-title">평균 월 1~2회</h3>
                                    <h4 class="notice-item-desc">화분 속 흙이 바싹 마르면 듬뿍 주세요</h4>
                                </li>
                                <li class="notice-item">
                                    <div class="notice-img2"></div>
                                    <h3 class="notice-item-title">양지</h3>
                                    <h4 class="notice-item-desc">하루 6시간 이상 밝은 햇빛이 필요해요</h4>
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
                    <h2>녹탑</h2>
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
                                단단하던 줄기에 힘이 없어지면 너무 차갑지 않은 온도의 물을 듬뿍 주세요. 녹탑은 몸통에 에 수분을 유지하는 능력이 뛰어나 물 주는 시기를 조금 놓쳐도 잘
                                견디는 편이에요. 토양이 완전히 마르기 전에 물을 주시면
                                뿌리 호흡이 불량해져 과습의 피해를 입을 수 있고, 화학성분에 예민한 편이기 때문에 너무 차갑지 않은 온도의 수돗물을 하루정도 받아두셨다가 주시는 게 좋아요.
                                물을 줄 때는 식물체에 직접 닿지 않게 물을주고, 물을
                                준 후에는 받침대에 고인 물을 바로 버려주세요. 물 준 후에는 통풍이 잘 되는 곳에 놓아주면 토양이 과하게 축축해지는 것을 방지할 수 있어요.
                            </p>
                            <h3 class="plantInfo__tit2">여름</h3>
                            <p class="plantInfo__desc2">
                                성장이 빨라지는 봄~여름에는 흙 마름도 빨라져 물 주는 횟수를 늘려주시는 게 좋아요. 햇빛이 많이 드는 곳에서 키우고 계신다면 빛이 강한 한낮을 피해서 물을
                                주세요. 물방울이 볼록렌즈 처럼 빛을 한 곳에 모아주어
                                과한 열기로 인해 잎이 탈 수 있어요.
                            </p>
                            <h3 class="plantInfo__tit3">겨울</h3>
                            <p class="plantInfo__desc3">
                                녹탑은 날씨가 추워지는 늦가을~겨울에는 성장속도가 느려져 흙 마름도 더뎌진답니다. 따라서 물 주는 횟수를 서서히 줄여주시는 게 좋아요. 혹시 생선뼈 선인장을
                                베란다에서 키우고 계시다면, 겨울철에는 실내로 들여주시고
                                날씨가 가장 따뜻할 때 너무 차갑지 않은 온도의 물을 주시는 게 좋아요.
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
                                녹탑은 빛을 사랑하는 식물이에요. 밝은 빛이 가장 오래 머무는 곳에서 키워주세요.
                            </p>
                            <h3 class="plantInfo__tit2">빛이 너무 강하면</h3>
                            <p class="plantInfo__desc2">
                                한낮의 너무 강한 빛을 지속적으로 받게 되면 줄기 끝 생장점이 탈 수 있어요. 따라서 한여름철의 강한 햇빛이 들어오는 공간이라면 커튼이나 블라인드 등으로 빛을
                                가려주시는 게 좋아요.
                            <h3 class="plantInfo__tit3">빛이 너무 약하면</h3>
                            <p class="plantInfo__desc3">
                                빛이 부족할 경우 줄기 마디가 길어져 웃자랄 수 있어요. 화분을 주기적으로 돌려주어 빛을 골고루 받을 수 있게 해주시면 조밀조밀 예쁘게 자란 녹탑을 만날 수
                                있어요.

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
                                녹탑은 평균 실내 습도에서 문제없지만 습도가 높아지는 여름 특히 장마철의 습도를 조심해야해요.
                            </p>
                            <h3 class="plantInfo__tit2">습도가 낮으면</h3>
                            <p class="plantInfo__desc2">
                                습도가 너무 낮은 환경이 지속되면 식물이 뿌리로부터 물을 잘 끌어올릴 수 없게 되어 통통한 몸통이 얇아지고 줄기 끝 생장점이 파괴될 수 있어요. 따라서 주변
                                공간의 습도가 너무 낮다면(40%이하) 식물 주변의 습도를
                                높여주시는 게 좋아요. 가습기와 서큘레이터를 함께 이용하면 한 곳의 습도만 높아지는 것을 방지할 수 있답니다.

                            </p>
                            <h3 class="plantInfo__tit3">습도가 높으면</h3>
                            <p class="plantInfo__desc3">
                                습도가 너무 높은 환경이 지속되면 녹탑이 물러져 썩을 수 있고, 병충해가 생기기 쉬우므로 환기를 자주 해주시거나 서큘레이터를 이용해 공기를 순환시켜 주는 게
                                좋아요. 높은 습도의 장마철에는 제습기를 이용하여 주변
                                습도를 관리해 주시는 것을 추천드립니다.
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
                                녹탑은 한겨울의 추위만 피해주신다면 건강하게 키우실 수 있어요. 겨울에는 따뜻한 실내에서 키워주세요.
                            </p>
                            <h3 class="plantInfo__tit2">온도가 낮으면</h3>
                            <p class="plantInfo__desc2">
                                온도가 낮아지는 늦가을~겨울에는 추위를 피해 따뜻한 실내에서 키워주시는 것이 좋아요. 5도 이하의 온도에서는 냉해를 입어 몸통이 얼어 물러 썩어버릴 수
                                있어요.

                            </p>
                            <h3 class="plantInfo__tit2">온도가 높으면</h3>
                            <p class="plantInfo__desc3">
                                녹탑은 따뜻한 온도를 좋아하는 식물이지만, 여름철 한낮에 직접적인 강한 햇빛이 들어오는 공간에서는 화분 속 흙의 온도도 함께 올라가 뿌리가 상할 수 있으니
                                주의해주세요.
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