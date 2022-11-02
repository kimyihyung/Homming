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
                    <img src="../html/assets/img/plantmoaView24.jpg" alt="">
                </figure>
                <div class="plantmoaView__contents">
                    <div class="title">
                        <h1>Portulaca molokiniensis</h1>
                        <h2>녹비단</h2>
                    </div>
                    <ul class="plantmoaView__keywords">
                        <li class="plantmoaView__keyword">선물하기 좋은</li>
                        <li class="plantmoaView__keyword">초보자용</li>
                        <li class="plantmoaView__keyword">다육/선인장</li>
                    </ul>
                    <div class="plantmoaView__con">
                        <p>
                            녹비단은 녹색의 장미꽃이 핀 것 같이 아름다운 잎이 특징인 쇠비름과의 다육식물입니다. 그 모습이 마치 나비같아서 '나비'라고도 유통되어요. 오밀조밀 모여있는 잎이
                            재물을 불러온다하여 선물용으로 인기가 많은
                            식물입니다. 또한 녹비단은 여름철에 노란색의 꽃을 피우는데, 그 꽃을 보면 '돈벼락을 맞는다!'라는 속설이 있다고 해요. 녹비단은 자라면서 아랫잎을 떨어뜨리며, 잎이
                            떨어진 줄기는 단단하게 목질화되어 마치 작은
                            나무같은 모양으로 보이기도 한답니다. 통통한 잎에 수분을 많이 머금고 있어 건조에 잘 견디지만, 다른 다육식물에 비해 잎이 얇아 수분 요구도는 높은 편에 속해요.
                            하지만 그만큼 과습의 피해를 입기도 쉬워 물주기에
                            주의를 기울여야 하는 다육식물이랍니다. 밝은 빛을 오랫동안 받아야 잎과 잎 사이가 빽빽해 아름다운 수형으로 자라나요. 하지만 너무 강한 직접적인 빛을 받으면 잎 끝이
                            타들어갈 수 있어 간접광이 오랫동안 머무는 곳에
                            두는 게 좋아요. 식물체내에는 독성이 있어 반려동물이나 어린 아이가 섭취하지 않도록 주의해주세요.
                        </p>
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
                    <h2>녹비단</h2>
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
                                통통하고 단단한 잎이 살짝 쭈글쭈글해지고 말랑해지면 너무 차갑지 않은 온도의 물을 주세요. 하지만 토양이 완전히 마르기 전에 물을 주시면 뿌리 호흡이 불량해져
                                과습의 피해를 입을 수 있어 항상 흙이 마른 것을 확인한
                                후에 물을 주세요. 물을 주신 후에는 통풍이 잘 되는 곳에 놓아주시거나 선풍기, 서큘레이터 등으로 공기를 순환시켜 흙 속의 과도한 수분을 날려주시는 게
                                중요하답니다. 물을 충분히 주었음에도 잎이 다시 단단해지지
                                않으면, 오목한 그릇에 물을 담아 화분을 담가 흙이 물을 빨아들일 수 있도록 하는 '저면관수'법으로 물을 주시는 것을 추천드립니다. 녹비단이 심겨진 흙이
                                상토성분이 많다면 물을 너무 과하게 머금어 과습이 오기 쉬우니
                                입자가 큰 마사토나 난석을 섞어 배수성을 높여주시는 게 좋답니다.
                            </p>
                            <h3 class="plantInfo__tit2">여름</h3>
                            <p class="plantInfo__desc2">
                                성장이 빨라지는 봄~여름에는 흙 마름도 빨라져 물 주는 횟수를 늘려주시는 게 좋아요. 햇빛이 많이 드는 곳에서 키우고 계신다면 빛이 강한 한낮을 피해서 물을
                                주세요. 물방울이 볼록렌즈 처럼 빛을 한 곳에 모아주어
                                과한 열기로 인해 잎이 탈 수 있어요.
                            </p>
                            <h3 class="plantInfo__tit3">겨울</h3>
                            <p class="plantInfo__desc3">
                                날씨가 추워지는 늦가을~겨울에는 성장속도가 느려져 흙 마름도 더뎌진답니다. 따라서 물 주는 횟수를 서서히 줄여주시는 게 좋아요. 혹시 녹비단을 베란다에서
                                키우고 계시다면, 겨울철에는 실내로 들여주시고 날씨가 가장
                                따뜻할 때 너무 차갑지 않은 온도의 물을 주시는 게 좋아요.
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
                                녹비단은 한 번 걸러진 밝은 빛을 오랫동안 받을 수 있는 공간에 두는 게 좋아요.
                            </p>
                            <h3 class="plantInfo__tit2">빛이 너무 강하면</h3>
                            <p class="plantInfo__desc2">
                                녹비단은 은은한 밝은 빛을 좋아하는 식물입니다. 너무 강한 빛을 지속적으로 받게 되면 잎 끝이 갈색으로 탈 수 있어요. 따라서 한여름철의 강한 햇빛이 들어오는
                                공간이라면 커튼이나 블라인드 등으로 빛을 가려주시는 게
                                좋아요.
                            <h3 class="plantInfo__tit3">빛이 너무 약하면</h3>
                            <p class="plantInfo__desc3">
                                빛이 많이 부족할 경우 줄기 마디가 길어져 풍성한 느낌이 줄어들 수 있어요. 또한 한쪽 면으로만 빛이 들어온다면 빛이 드는 쪽으로 굽어져 자랄 수 있어 화분
                                전체가 빛을 골고루 받을 수 있도록 화분을 주기적으로
                                돌려주시는 게 좋아요. 빛이 약하면 흙이 마르는 속도도 느려지기 때문에 습기에 약한 녹비단이 과습의 해를 입을 수 있으니 밝은 빛을 받을 수 있는 곳으로
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
                                녹비단은 평균 실내 습도에서 문제없이 잘 자라요. 다만, 여름철 높은 습도에는 주의가 필요해요.
                            </p>
                            <h3 class="plantInfo__tit2">습도가 낮으면</h3>
                            <p class="plantInfo__desc2">
                                습도가 너무 낮은 환경이 지속되면 식물이 뿌리로부터 물을 잘 끌어올릴 수 없게 되어 식물체의 수분이 날아가는 것을 막기 위해서 수분을 내보내는 구멍을
                                막는답니다. 따라서 흙이 말라 물을 주어도 뿌리의 물 흡수가 잘
                                일어나지 않아 오히려 과습의 피해를 입기 쉬운 환경이 될 수 있어요. 주변 공기가 과도하게 낮은 가을~겨울철에는 주변에 다른 식물을 함께두거나 조약돌에 물을
                                적셔 근처에 두는 등 녹비단 근처의 습도를 살짝 높여주시는
                                게 좋아요.
                            </p>
                            <h3 class="plantInfo__tit3">습도가 높으면</h3>
                            <p class="plantInfo__desc3">
                                습도가 너무 높은 환경이 지속되면 줄기가 물러져 썩을 수 있고, 병충해가 생기기 쉬우므로 환기를 자주 해주시거나 서큘레이터를 이용해 공기를 순환시켜 주는 게
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
                                녹비단은 추위에 아주 약해 겨울의 추위만 주의해주시면 건강하게 키우실 수 있어요.
                            </p>
                            <h3 class="plantInfo__tit2">온도가 낮으면</h3>
                            <p class="plantInfo__desc2">
                                온도가 낮아지는 늦가을~겨울에는 추위를 피해 따뜻한 실내에서 키워주시는 것이 좋아요. 15도 이하의 온도에서는 냉해를 입어 몸통이 얼어 물러 썩어버릴 수 있어
                                실내 온도를 20도 이상으로 관리해주시는 게 좋아요.

                            </p>
                            <h3 class="plantInfo__tit2">온도가 높으면</h3>
                            <p class="plantInfo__desc3">
                                여름철 한낮에 직접적인 강한 햇빛이 들어오는 공간에서는 화분 속 흙의 온도도 함께 올라가 뿌리가 상할 수 있으니 살짝 차광을 해 화분 속 온도가 높아지는 것을
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