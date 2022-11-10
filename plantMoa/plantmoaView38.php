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
                    style="background-image: url(https://huga.s3.ap-northeast-2.amazonaws.com/plantImages/16583842859321.jpg);">
                </figure>
                <!-- 이미지 링크 변경 -->
                <div class="plantmoaView__contents">
                    <div class="title">
                        <h1>Senecio rowleyanus</h1>
                        <h2>화이트 고스트</h2>
                    </div>
                    <ul class="plantmoaView__keywords">
                        <li class="plantmoaView__keyword">공기정화</li>
                        <li class="plantmoaView__keyword">선물하기 좋은</li>
                    </ul>
                    <div class="plantmoaView__con">
                        <p>
                       하얀 우유에 초록색 물감을 풀어놓은 듯한 오묘하고 독특한 색을 가지고 있는 화이트 고스트는 그 색감과 특이한 모양으로 식물 하나만으로도 공간의 분위기를 확 살려주는 다육식물입니다. 화이트 고스트는 선인장처럼 보이지만 다육식물인 유포르비아의 한 종류에요. 식물의 초록색을 띠게 하는 색소인 엽록소가 부족해서 하얀색을 띠고 있어요. 식물은 빛에서 필요한 영양분을 흡수하는 '광합성'을 하는데, 광합성량은 엽록소가 많을수록 많이 일어난답니다. 따라서 초록색을 띠는 다른 식물보다 광합성을 잘 할 수 없어 밝은 빛을 오랫동안 받을 수 있는 공간에 두어야 해요. 화이트 고스트를 자르거나 상처를 내게 되면 하얀 진액이 나오는데, 이 진액에는 독성이 있어 알러지 반응을 일으킬 수 있기 때문에 다루실 때 항상 주의가 필요한 식물입니다. </p>
                    </div>
                    <div class="plantmoaView__item">
                        <ul class="notice-items">
                           <div class="notice-items-flex">
                                <li class="notice-item">
                                    <div class="notice-img1"></div>
                                    <h3 class="notice-item-title">평균 월 1~2회</h3>
                                    <h4 class="notice-item-desc">통통한 잎이 살짝 쭈글해지면 듬뿍 주세요</h4>
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
                    <h2>화이트 고스트</h2>
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
                           화이트 고스트는 두꺼운 줄기에 수분을 많이 머금고 있어 건조한 환경에 견디는 능력이 뛰어난 다육식물입니다. 흙이 다 마르기 전에 물을 주면 몸통이 물러버릴 수 있으니 꼭 흙이 마른 것을 확인한 후에 물을 주셔야해요. 통통하게 부풀어있던 몸통이 살짝 쭈굴쭈꿀해지면 너무 차갑지 않은 온도의 물을 듬뿍 주세요. 한 달에 1~2회만 물을 주면 충분하답니다. 물을 주실 때는 몸통에 직접 닿지 않게 주셔야 무름을 방지할 수 있답니다. </p>
                            <h3 class="plantInfo__tit2">여름</h3>
                            <p class="plantInfo__desc2">
                               성장이 빨라지는 봄~여름에는 흙 마름도 빨라져 물 주는 횟수를 늘려주시는 게 좋아요. 여름철에는 가장 더운 시간을 피해 저녁에 물을 주세요. 물을 준 후 흙의 온도가 함께 올라가 뿌리가 상할 수 있어요.


                            </p>
                            <h3 class="plantInfo__tit3">겨울</h3>
                            <p class="plantInfo__desc3">
                            날씨가 추워지는 늦가을~겨울에는 성장속도가 매우 느려져 흙 마름도 더뎌진답니다. 따라서 물 주는 횟수를 더 줄여주시는 게 좋아요. 겨울철에는 날씨가 가장 따뜻한 낮에 너무 차갑지 않은 온도의 물을 주시는 게 좋아요. </p>
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
                      화이트 고스트는 밝은 빛을 필요로 하는 식물이에요. 가장 밝은 빛이 오래 머무는 곳에서 키워주세요.   <h3 class="plantInfo__tit2">빛이 너무 강하면</h3>
                            <p class="plantInfo__desc2">
                           강한 빛을 지속적으로 받게 되면 줄기 끝 생장점이 탈 수 있어요. 따라서 한여름철의 강한 햇빛이 바로 들어오는 공간이라면 커튼이나 블라인드 등으로 빛을 살짝 가려주시는 게 좋아요. 밝은 빛을 많이 받으면 몸통 끝이 살짝 붉은 분홍색으로 변하기도 한답니다. <h3 class="plantInfo__tit3">빛이 너무 약하면</h3>
                            <p class="plantInfo__desc3">
                           빛이 많이 부족할 경우 줄기가 얇게 웃자라고 밝은 곳을 향해 굽어 자랄 수 있어요. 또한 흙이 잘 마르지 않아 몸통이 물러질 위험도 높아지니 밝은 빛을 받을 수 있는 곳에서 키워주세요.  </p>
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
                            화이트 고스트는 수분을 머금고 있는 다육식물이기 때문에 건조한 환경을 좋아해요. 평균 실내 습도에서 무난히 잘 자라며, 장마철의 높은 습도에서는 주의가 필요하답니다.</p>
                            <h3 class="plantInfo__tit2">습도가 낮으면</h3>
                            <p class="plantInfo__desc2">
                      습도가 너무 낮은 환경이 지속되면 식물이 뿌리로부터 물을 잘 끌어올릴 수 없게 되어 통통한 몸통이 얇아지고 줄기 끝 생장점이 파괴될 수 있어요. 따라서 주변 공간의 습도가 너무 낮다면(40%이하) 주변에 식물을 놓아두거나 멀리서 가습기를 틀어서 약간의 습도를 높여주는 것이 좋아요. 가습기와 서큘레이터를 함께 이용하면 한 곳의 습도만 높아지는 것을 방지할 수 있답니다.    <h3 class="plantInfo__tit3">습도가 높으면</h3>
                            <p class="plantInfo__desc3">
                           습도가 너무 높은 환경이 지속되면 식물 잎이 무를 수 있고, 병충해가 생기기 쉬우므로 환기를 자주 해주시거나 서큘레이터를 이용해 공기를 순환시켜 주는 게 좋아요. 높은 습도의 장마철에는 제습기를 이용하여 주변 습도를 관리해 주시는 것을 추천드립니다. </p>
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
                            화이트 고스트는 따뜻한 온도를 좋아하는 식물입니다. 한겨울의 추위만 피해주신다면 건강하게 키우실 수 있어요. </p>
                            <h3 class="plantInfo__tit2">온도가 낮으면</h3>
                            <p class="plantInfo__desc2">
                            온도가 낮아지는 늦가을~겨울에는 추위를 피해 따뜻한 실내에서 키워주시는 것이 좋아요. 찬바람이 드나드는 곳도 피해주세요. 특히 10도 이하의 온도에서는 냉해를 입어 몸통이 얼어 물러버릴 수 있어요. </p>
                            <h3 class="plantInfo__tit2">온도가 높으면</h3>
                            <p class="plantInfo__desc3">
                           여름철 한낮에 직접적인 강한 햇빛이 들어오는 공간에서는 화분 속 흙의 온도도 함께 올라가 뿌리가 상할 수 있으니 주의해주세요. </p>
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