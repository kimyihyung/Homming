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
                    <img src="../html/assets/img/plantmoa05.jpeg" alt="">
                </figure>
                <div class="plantmoaView__contents">
                    <div class="title">
                        <h1>Sansevieria cylindrica</h1>
                        <h2>스투키</h2>
                    </div>
                    <ul class="plantmoaView__keywords">
                        <li class="plantmoaView__keyword">다육/선인장</li>
                        <li class="plantmoaView__keyword">초보자용</li>
                        <li class="plantmoaView__keyword">선물하기 좋은</li>
                        <li class="plantmoaView__keyword">공기정화</li>
                        <li class="plantmoaView__keyword">빛이 적어도 되는</li>
                    </ul>
                    <div class="plantmoaView__con">
                        <p>
                            건조하고 따뜻한 아프리카에서 온 스투키는 강한 생명력을 가지고있어 식물을 처음 키우는 초보자들에게 많이 추천하는 식물이에요. 사실 ‘스투키’라는 식물은 우리가 키우는
                            스투키와는 다른 식물이에요. 국내에서 유통되는
                            스투키의 대부분은 ‘실린드리카’라는 식물이랍니다. 스투키와 비슷하게 생겼지만 성장 속도가 빨라서 성장 속도가 느린 스투키 대신 유통되고 있어요. 밤에 산소를 내뿜어
                            침실에 적합한 식물로 인기가 좋지만, 독성이 있어서
                            반려동물과 어린아이가 먹지 않도록 조심해야 합니다.
                        </p>
                    </div>
                    <div class="plantmoaView__item">
                        <ul class="notice-items">
                            <div class="notice-items-flex">
                                <li class="notice-item">
                                    <div class="notice-img1"></div>
                                    <h3 class="notice-item-title">평균 월 1회 이하</h3>
                                    <h4 class="notice-item-desc">단단한 몸통이 말랑해지면 주세요</h4>
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
                                    <h4 class="notice-item-desc">13~27℃의 온도에서 잘 자라요</h4>
                                </li>
                            </div>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="plantmoaInfo">
                <div class="info_title">
                    <h1>자세히 알아보기</h1>
                    <h2>스투키</h2>
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
                                건조한 사막이 고향인 스투키는 잎에 수분을 저장하는 능력이 아주 뛰어나 물이 많이 필요하지 않아요. 오히려 물을 과하게 주어 스투키의 얕은 뿌리가 과습에 죽는
                                경우가 많아요. 물을 주기 전에는 꼭 흙이 다 말랐는 지
                                확인하고 주고, 흙 상태를 파악하고 물 주기가 어렵다면 스투키가 조금 말랑말랑 해지면 물을 주세요. 스투키는 무름병에 취약해서 배수가 매우 잘되어 흙에 물이
                                고여 있지 않는 것이 중요합니다.
                            </p>
                            <h3 class="plantInfo__tit2">여름</h3>
                            <p class="plantInfo__desc2">
                                성장이 빨라지는 봄~여름에는 흙 마름도 빨라져 물 주는 횟수를 늘려주시는 게 좋아요. 흙이 다 말랐는지, 스투키의 몸통이 말랑해지지는 않았는지 더 자주
                                살펴주세요. 물을 주실 때는 너무 차갑지 않은 온도의 물을
                                주시는 게 좋아요.
                            </p>
                            <h3 class="plantInfo__tit3">겨울</h3>
                            <p class="plantInfo__desc3">
                                날씨가 추워지는 늦가을~겨울에는 성장속도가 느려져 흙 마름도 더뎌진답니다. 따라서 물 주는 횟수를 줄여주시는 게 좋아요. 스투키는 추위에 아주 약한
                                식물이에요, 날씨가 가장 따뜻할 때 너무 차갑지 않은 온도의 물을
                                주시는 게 좋아요.
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
                                스투키는 빛에 대한 적응력이 뛰어난 식물입니다. 빛이 적은 곳에서도 잘 자라 실내 형광등으로도 잘 살 수 있지만 어두운 환경이 오래 지속되면 성장이 아주
                                느려진답니다.
                            </p>
                            <h3 class="plantInfo__tit2">추천 배치 장소</h3>
                            <p class="plantInfo__desc2">
                                스투키는 빛이 적은 환경에서도 잘 자라는 식물입니다. 강한 빛을 지속적으로 받게 되면 잎 끝이 타들어갈 수 있어요. 따라서 한여름철의 강한 햇빛이 들어오는
                                공간이라면 커튼이나 블라인드 등으로 빛을 가려주시는 게
                                좋아요.
                            <h3 class="plantInfo__tit3">빛에 따른 변화</h3>
                            <p class="plantInfo__desc3">
                                스투키는 실내의 빛 환경에 잘 적응하지만 빛이 많이 부족할 경우 성장이 아주 느려질 수 있어요.
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
                                40~70% - 건조한 아프리카의 사막에서 온 스투키는 건조한 공기를 잘 견디는 식물입니다. 어떤 습도 조건이든 잘 견디지만 너무 높은 습도가 지속되면 잎이
                                무를 수 있으니 주의해주세요.
                            </p>
                            <h3 class="plantInfo__tit2">습도가 낮으면</h3>
                            <p class="plantInfo__desc2">
                                스투키는 아주 건조한 습도 조건에서도 아주 잘 자라지만 대기가 많이 건조한 봄, 가을철에는 주변에 식물을 놓아 습도를 높여주시면 더 건강하게 잘 자라요.
                            </p>
                            <h3 class="plantInfo__tit3">습도가 높은 경우</h3>
                            <p class="plantInfo__desc3">
                                습도가 너무 높은 환경이 지속되면 식물 잎이 무를 수 있고, 병충해가 생기기 쉬우므로 환기를 자주 해주시거나 서큘레이터를 이용해 공기를 순환시켜 주는 게
                                좋아요. 높은 습도의 장마철에는 제습기를 이용하여 주변 습도를
                                관리해 주시는 것을 추천드립니다.
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
                                13~27℃ - 스투키는 평균 실내온도에서 잘 자라는 식물입니다. 한겨울의 추위만 피해주신다면 건강하게 키우실 수 있어요.
                            </p>
                            <h3 class="plantInfo__tit2">온도가 낮으면</h3>
                            <p class="plantInfo__desc2">
                                온도가 낮아지는 늦가을~겨울에는 추위를 피해 따뜻한 실내에서 키워주시는 것이 좋아요. 10도 이하의 온도에서는 냉해를 입어 몸통이 얼어 물러버릴 수 있어요.
                            </p>
                            <h3 class="plantInfo__tit2">온도가 높으면</h3>
                            <p class="plantInfo__desc3">
                                스투키는 무더운 여름철 새촉을 아주 잘 내어준답니다. 하지만 여름철 한낮에 직접적인 강한 햇빛이 들어오는 공간에서는 화분 속 흙의 온도도 함께 올라가 뿌리가
                                상할 수 있으니 주의해주세요.
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