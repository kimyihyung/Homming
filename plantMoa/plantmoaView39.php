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
                    style="background-image: url(https://huga.s3.ap-northeast-2.amazonaws.com/plantImages/16576830538731.jpg);">
                </figure>
                <!-- 이미지 링크 변경 -->
                <div class="plantmoaView__contents">
                    <div class="title">
                        <h1>Plectranthus hadiensis var. tomentosus</h1>
                        <h2>장미허브</h2>
                    </div>
                    <ul class="plantmoaView__keywords">
                        <li class="plantmoaView__keyword">공기정화</li>
                        <li class="plantmoaView__keyword">선물하기 좋은</li>
                    </ul>
                    <div class="plantmoaView__con">
                        <p>
                      장미허브는 꿀풀과 플렉트란서스속의 허브식물로, 도톰한 톱니모양의 귀여운 잎에서 좋은 향이 나고 잎이 나오는 모양이 장미 꽃을 닮아 장미허브라고 불려요. 줄기가 자라나면 아랫 줄기가 나무처럼 목질화되어 자라는 성질이 있어 치기를 통해 잎을 솎아내 동그란 외목대 수형으로도 만들 수 있답니다. 장미허브는 생명력이 강해 식물을 처음 키우시는 초보 식집사도 잘 키울 수 있어요. 음이온 발생량이 많고, 주변 습도를 높여주며, 이산화탄소를 제거해주는 기능이 탁월해 공기정화능력도 뛰어난 식물이랍니다. 장미허브는 잎이 통통하게 수분을 잘 머금고 있어서 다육식물과 비슷하게 관리해주셔야해요.  </p>
                    </div>
                    <div class="plantmoaView__item">
                        <ul class="notice-items">
                            <div class="notice-items-flex">
                                <li class="notice-item">
                                    <div class="notice-img1"></div>
                                    <h3 class="notice-item-title">평균 주 1~2회</h3>
                                    <h4 class="notice-item-desc">화분 속 흙이 다 마르면 듬뿍 주세요</h4>
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
                                    <h4 class="notice-item-desc">주변 공기가 건조해지지 않도록 관리해주세요</h4>
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
                    <h2>장미허브</h2>
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
                           장미허브는 두꺼운 잎에 수분을 유지하는 능력이 뛰어난 식물입니다. 통통하게 부풀어있던 잎이 살짝 쭈굴쭈꿀해지거나, 빳빳하게 서있던 잎이 아래로 힘 없이 처졌을 때 너무 차갑지 않은 온도의 물을 듬뿍 주세요. 물을 주실 때는 꼭 흙이 말랐는 지 확인한 후 주세요. 흙이 완전히 마르기 전에 물을 주시면 뿌리 호흡이 불량해져 과습의 피해를 입을 수 있고, 물을 주실 때 몸통에 직접 닿지 않게 주셔야 무름을 방지할 수 있답니다. 물을 주신 후에는 화분 받침대에 물이 계속 고여 뿌리가 습해지지 않게 주의해주세요. </p>
                            <h3 class="plantInfo__tit2">여름</h3>
                            <p class="plantInfo__desc2">
                             성장이 빨라지는 봄~여름에는 흙 마름도 빨라져 물 주는 횟수를 늘려주시는 게 좋아요. 여름철에는 가장 더운 시간을 피해 저녁에 물을 주세요. 물을 준 후 흙의 온도가 함께 올라가 뿌리가 상할 수 있어요.
                            </p>
                            <h3 class="plantInfo__tit3">겨울</h3>
                            <p class="plantInfo__desc3">
                            날씨가 추워지는 늦가을~겨울에는 성장속도가 느려져 흙 마름도 더뎌진답니다. 따라서 물 주는 횟수를 서서히 줄여주시는 게 좋아요. 겨울철에는 날씨가 가장 따뜻한 낮에 너무 차갑지 않은 온도의 물을 주시는 게 좋아요.

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
                      장미허브는 밝은 빛이 오래 머무는 곳을 좋아해요. 실내의 빛에도 잘 적응하지만 너무 어두운 곳에서 키우신다면 줄기가 웃자랄 수 있어요.<h3 class="plantInfo__tit2">빛이 너무 강하면</h3>
                            <p class="plantInfo__desc2">
                           장미허브는 밝은 빛을 좋아하는 식물입니다. 하지만 직접적인 강한 빛을 지속적으로 받게 되면 보드라운 잎이 타 화상자국이 생길 수 있어요. 강한 햇빛이 직접적으로 들어오는 공간이라면 한낮에는 커튼이나 블라인드 등으로 빛을 가려주시는 게 좋아요. <h3 class="plantInfo__tit3">빛이 너무 약하면</h3>
                            <p class="plantInfo__desc3">
                            장미허브는 빛이 많이 부족할 경우 줄기가 얇게 웃자라고 밝은 곳을 향해 굽어 자랄 수 있어요. 또한 잎이 촘촘하게 나지 않아 수형이 망가질 수 있어 밝은 빛을 받을 수 있는 공간에서 화분을 주기적으로 돌려주시며 키우는 게 좋아요. </p>
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
                          장미허브는 너무 습한 곳은 피해주세요. 평균 실내 습도에서 무난히 잘 자라며, 장마철의 높은 습도에서는 주의가 필요하답니다.  </p>
                            <h3 class="plantInfo__tit2">습도가 낮으면</h3>
                            <p class="plantInfo__desc2">
                       습도가 너무 낮은 환경이 지속되면 장미허브의 새 순이 마를 수 있어요. 따라서 주변 공간의 습도가 너무 낮다면(40%이하) 주변에 식물을 놓아두거나 멀리서 가습기를 틀어서 약간의 습도를 높여주는 것이 좋아요. 가습기와 서큘레이터를 함께 이용하면 한 곳의 습도만 높아지는 것을 방지할 수 있답니다. 

<h3 class="plantInfo__tit3">습도가 높으면</h3>
                            <p class="plantInfo__desc3">
                          습도가 너무 높은 환경이 지속되면서 공기가 잘 순환하지 않으면 잎이 무를 수 있고, 잎이 누렇게 변할 수 있어요. 또한 병충해가 생기기 쉬운 환경이 되므로 환기를 자주 해주시거나 서큘레이터를 이용해 공기를 순환시켜 주는 게 좋아요. 높은 습도의 장마철에는 제습기를 이용하여 주변 습도를 관리해 주시는 것을 추천드립니다.  </p>
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
                           장미허브는 평균 실내 온도에서 잘 자라는 식물입니다. 한겨울의 추위만 피해주신다면 건강하게 키우실 수 있어요. </p>
                            <h3 class="plantInfo__tit2">온도가 낮으면</h3>
                            <p class="plantInfo__desc2">
                            온도가 낮아지는 늦가을~겨울에는 추위를 피해 따뜻한 실내에서 키워주시는 것이 좋아요. 찬바람이 드나드는 곳도 피해주세요. 특히 10도 이하의 온도에서는 냉해를 입어 잎이 얼고 물러버릴 수 있어요. </p>
                            <h3 class="plantInfo__tit2">온도가 높으면</h3>
                            <p class="plantInfo__desc3">
                            장미허브는 따뜻한 온도를 좋아하는 식물이지만, 여름철 한낮에 직접적인 강한 햇빛이 들어오는 공간에서는 화분 속 흙의 온도도 함께 올라가 뿌리가 상할 수 있으니 주의해주세요.</p>
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