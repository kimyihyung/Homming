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
                    <img src="../html/assets/img/plantmoaView16.jpeg" alt="">
                </figure>
                <div class="plantmoaView__contents">
                    <div class="title">
                        <h1>Syngonium podophyllum 'Milk Confetti'</h1>
                        <h2>싱고니움 밀크컨페티</h2>
                    </div>
                    <ul class="plantmoaView__keywords">
                        <li class="plantmoaView__keyword">공기정화</li>
                        <li class="plantmoaView__keyword">빛이 적어도 되는</li>
                        <li class="plantmoaView__keyword">선물하기 좋은</li>
                        <li class="plantmoaView__keyword">초보자용</li>
                    </ul>
                    <div class="plantmoaView__con">
                        <p>
                            싱고니움 밀크컨페티는 녹차라떼 색의 잎에 딸기 우유색의 무늬가 사랑스러운 식물이에요. 파스텔 색상의 은은한 색깔로 인기가 아주 많은 품종입니다. 싱고니움 밀크
                            컨페티는 따뜻한 온도를 좋아하고 은은한 간접광에서도 잘
                            자라 다른 무늬종에 비해 키우기 까다롭지 않은 품종이랍니다. 싱고니움은 잎을 자르면 나오는 수액에 독성이 있으니 아이가 있는 집이나 반려동물이 있는 집에는 주의해서
                            키워야 해요. 빛을 향해 잎이 자라는 특징이 있어서
                            잎이 햇빛을 골고루 받을 수 있게, 화분을 돌려가며 키워주세요.
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
                                    <h3 class="notice-item-title">40~70%</h3>
                                    <h4 class="notice-item-desc">주변 공기가 건조해지지 않도록 관리해주세요</h4>
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
                    <h2>베고니아 콘치폴리아</h2>
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
                                싱고니움은 꾸준한 수분 공급이 중요한 식물입니다. 물을 주기 전 겉 흙이 3cm정도 마른 것을 확인한 후 물을 주시는 것이 좋아요. 물을 과하게 주면 뿌리
                                주변의 흙들이 숨을 잘 쉬지 못해요. 물을 주신 후에는
                                환기를 시켜 공기를 순환시켜 주셔야 한답니다. 또한 싱고니움은 차가운 온도에 약하기 때문에 차가운 물보다 살짝 미지근한 온도의 물을 주는 게 좋아요.
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
                                싱고니움은 나무 아래에서 살아가는 식물이므로 빛이 적은 환경에서도 잘 자라요. 직접적인 강한 햇빛은 피해서 키워주세요. 강한 햇빛 아래에서는 잎이 탈 수
                                있어요.
                            </p>
                            <h3 class="plantInfo__tit2">빛이 너무 강하면</h3>
                            <p class="plantInfo__desc2">
                                한낮의 강한 직접적인 햇빛을 받으면 잎이 타거나 잎이 말라 버릴 수 있어 한낮에는 커튼이나 블라인드로 차광을 해주시는 게 좋아요. 또한 너무 강한 빛
                                아래에서는 싱고니움의 잎 크기가 작아질 수 있습니다.
                            <h3 class="plantInfo__tit3">빛이 너무 약하면</h3>
                            <p class="plantInfo__desc3">
                                빛이 너무 약하면 싱고니움의 줄기가 길고 약하게 웃자랄 수 있어요. 줄기가 힘이 없이 웃자랄 때에는 은은한 밝은 빛이 드는 공간으로 옮겨 주시는 게 좋아요.
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
                                싱고니움은 촉촉한 환경을 아주 좋아해요. 습도가 너무 낮으면 금세 잎을 노랗게 만들어 낙엽지게 만든답니다. 공중 분무나 가습기를 통해 주변 공기를 촉촉하게
                                만들어주세요. 자주 분무를 해주어 주변 공기를 촉촉하게 해
                                주신다면 더 파릇파릇하고 풍성한 싱고니움을 만날 수 있어요.
                            </p>
                            <h3 class="plantInfo__tit2">습도가 낮으면</h3>
                            <p class="plantInfo__desc2">
                                촉촉한 습도를 좋아하는 싱고니움은 습도가 낮아지면 잎이 노랗게 말라가는 현상이 나타나요. 또한 습도가 너무 낮은 환경이 지속되면 식물이 뿌리로부터 물을 잘
                                끌어올릴 수 없게 되어 잎 끝이 마르거나 잎이 줄기째로
                                떨어질 수 있어요. 따라서 주변 공간의 습도가 너무 낮다면(40% 이하) 분무기를 이용해 식물 주변의 습도를 높여주시거나 가습기를 사용해주시는 게 좋아요.
                                가습기와 서큘레이터를 함께 이용하면 한 곳의 습도만 높아지는
                                것을 방지할 수 있답니다.
                            </p>
                            <h3 class="plantInfo__tit3">습도가 높으면</h3>
                            <p class="plantInfo__desc3">
                                싱고니움은 촉촉한 공기를 좋아하는 식물이지만 촉촉하게 습도를 맞추어 주고 공기가 순환되지 못하면 병충해가 생기기 쉬우므로 환기를 자주 해주시거나 가습기와
                                서큘레이터를 함께 이용해 공기를 순환시켜 주는 게 좋아요.
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
                                싱고니움은 따뜻하고 습도가 높은 환경을 좋아해요. 싱고니움은 고온에 가장 잘 견디는 관엽식물에 속해요. 반면 추위에는 아주 약하기 때문에 여름철에는 에어컨
                                바람을 직접 받지 않는 곳에서 키워주시고, 겨울철에는 꼭
                                따뜻한 실내에서 키워주세요. 온도가 낮아질수록 성장속도가 느려져 새 잎을 내어주지 않을 수 있어요.
                            </p>
                            <h3 class="plantInfo__tit2">온도가 낮으면</h3>
                            <p class="plantInfo__desc2">
                                싱고니움은 따뜻한 온도를 좋아하는 식물입니다. 날씨가 쌀쌀해지는 늦가을에서 겨울에는 식물의 지상부(흙 위의 드러난 부분; 줄기, 잎)가 냉해를 입을 수 있고
                                흙의 온도가 낮아지면 지하부(흙 아래 심겨진 부분)까지
                                영향을 미칠 수 있어요. 새 잎을 내지 않거나 새 잎이 바로 말라버릴 수도 있어요. 겨울철에도 건강하게 생육을 지속하고 싶으시다면 실내 온도를 15ºC
                                이상으로 관리해주세요.
                            </p>
                            <h3 class="plantInfo__tit2">온도가 높으면</h3>
                            <p class="plantInfo__desc3">
                                따뜻한 봄, 여름이 오면 싱고니움이 폭풍 성장하는 모습을 볼 수 있을 거에요. 고온에서도 아주 잘 견디므로 너무 강한 빛만 피해주시면 건강하게 잘 키우실 수
                                있어요.
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