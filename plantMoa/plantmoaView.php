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
                    <img src="../html/assets/img/plantmoaView01.jpg" alt="">
                </figure>
                <div class="plantmoaView__contents">
                    <div class="title">
                        <h1>Monstera</h1>
                        <h2>몬스테라</h2>
                    </div>
                    <ul class="plantmoaView__keywords">
                        <li class="plantmoaView__keyword">몬스테라</li>
                        <li class="plantmoaView__keyword">초보자용</li>
                        <li class="plantmoaView__keyword">많이찾는</li>
                        <li class="plantmoaView__keyword">잎이큰</li>
                        <li class="plantmoaView__keyword">빛이 적어도 되는</li>
                    </ul>
                    <div class="plantmoaView__con">
                        <p>
                            몬스테라는 덩굴성 대형관엽식물로 6~8m 까지 자랍니다. 잎은 어긋나고 성숙한 것은 지름 1m 정도됩니다. 잎은 진녹색으로 크고 광택이 나며 잎맥 사이에 군데군데
                            타원형의 구멍이 파여 있어 폭우나 강한 바람에도 견딜 수 있는 구조로 발달 됐습니다. 흰색의 꽃이 피고 열매도 달립니다. 그리고 잎은 절엽으로 하여 꽃꽂이 재료로도
                            쓰인다. 직시광선에 노출시키면 잎이 타기 쉬우므로 그늘에 두는것을 추천합니다.
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
                                    <h4 class="notice-item-desc">주변 공기가 건조해지지 않도록 관리해주세요</h4>
                                </li>
                                <li class="notice-item">
                                    <div class="notice-img4"></div>
                                    <h3 class="notice-item-title">잘 자라는 온도</h3>
                                    <h4 class="notice-item-desc"> 16~27℃의 온도에서 잘 자라요</h4>
                                </li>
                            </div>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="plantmoaInfo">
                <div class="info_title">
                    <h1>자세히 알아보기</h1>
                    <h2>몬스테라</h2>
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
                                봄, 여름, 가을에는 흙을 촉촉하게 유지하고(물에 잠기지 않도록 주의) 겨울에는 토양 표면이 말랐을때 충분히 관수함<br>
                                물관리: 빗물을 주면 토양이 산성화 될 수도 있다. 따뜻한 물을 사용한다. / 더운 여름에는 물 젖은 천으로 잎을 닦아 주고, 분무해준다.
                            </p>
                            <h3 class="plantInfo__tit2">여름 / 봄</h3>
                            <p class="plantInfo__desc2">
                                봄과 여름에는 물을 자주 주는 것이 좋습니다. 흙을 항상 촉촉하게 유지해 주시고, 햇빛이잘드는 공간에 놔둬 주세요. 흙의 마름을 확인 하시고 물을 주시고,
                                환기를 잘 시켜 주어야 과습과 병충해의 피해를 막을 수 있습니다.
                            </p>
                            <h3 class="plantInfo__tit3">겨울</h3>
                            <p class="plantInfo__desc3">
                                상당적으로 물이 빨리 마르지 않는 겨울에는 흙의 상태를 확인하시고 적절하게 물을 주는 것이 필요합니다.
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
                                빛이 부족하면 성장이 더디고 마디가 길어져 밉게 자라게 됩니다. 해가 걸러 들어오는 양지나 반음지에서 키워 주세요.<br>
                                실내 어디서든 잘자라는 식물이지만 밝은곳(간접빛)이 있는 곳을 추천합니다.
                            </p>
                            <h3 class="plantInfo__tit2">추천 배치 장소</h3>
                            <p class="plantInfo__desc2">
                                거실 창측 (실내깊이 150~300cm), 발코니 내측 (실내깊이 50~150cm), 발코니 창측 (실내깊이 0~50cm)정도에서 배치하여 키우는 것을
                                추천드립니다.
                            <h3 class="plantInfo__tit3">빛에 따른 변화</h3>
                            <p class="plantInfo__desc3">
                                그늘에서 빛을 받은 식물이므로 직사광선에서는 잎이 검은색으로 탈 수 있습니다. 햇빛을 받는 쪽으로 잎이 잘 자라고 갈라짐이 잘 나타나기 때문에,
                                화분을 돌려가면서 키우는것을 추천합니다.
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
                                70%이상의 높은 습도를 좋아하는 식물입니다. 따뜻하고 공중습도가 높은 상태를 좋아하는 식물이므로, 공중분무를 하시거나 가습기를 틀어 놓는것을 추천합니다.
                            </p>
                            <h3 class="plantInfo__tit2">습도가 낮으면</h3>
                            <p class="plantInfo__desc2">
                                습도가 낮을 경우에는 몬스테라의 잎이 갈색 반점이 생기는 경우가 있습니다. 이때 공중분무와 가습기를 틀어 공중습도를 높입니다. 갈색 반점이 생겨난 잎은
                                잘라내도록 합니다.<br>
                                습도를 높인 경우에도 갈색 반점이 생기면은 잿빛곰팡이병에 걸린 것일 수 있으니 곰팡이약을 사용합니다.
                            </p>
                            <h3 class="plantInfo__tit3">습도가 높거나 흙이 축축한 경우</h3>
                            <p class="plantInfo__desc3">
                                습도가 높거나, 흙이 축축하면 몬스테라의 잎 끝이 갈색으로 마르는 경우가 생길 수 있습니다. 과습이 심하면 마른 흙으로 분갈이를 해주도록 합니다.<br>
                                마른 잎은 돌아오지 않으니 잘 자주는 것을 추천 드립니다.
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
                                15 ~ 20℃의 온도가 적정 온도입니다. 성장 온도는 15 ~ 20℃, 최저 온도는 10℃로 유지해 주세요. 강한 직사광선보다는 반그늘에도 잘 자랍니다.
                            </p>
                            <h3 class="plantInfo__tit2">난이도</h3>
                            <p class="plantInfo__desc2">
                                몬스테라는 뿌리로 영양소를 흡수하기 때문에 분갈이시 큰 화분을 추천합니다.(식물이 빨리 자랍니다.) 너무 어두운 곳에 두면 잎대가 길어지고,
                                잎이 평소보다 작아 질수 있으니 주의 하시길 바랍니다. <br>
                                기르기 난이도는 쉬움 입니다.
                            </p>
                            <h3 class="plantInfo__tit2">키우기 Tip</h3>
                            <p class="plantInfo__desc3">
                                잎이 노랗게 변할 경우 떡잎으로 새순이 곧 나올 징조 입니다. 이때 떡잎은 가위 등으로 밑부분을 자르시면 좋습니다.<br>
                                <em>몬스테라는 독성이 있어 피부에 닿을 경우 심하면 통증과 수포가 생길 수 있습니다! 잎과 줄기를 먹으면 구토를 유발 합니다!</em>
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
    <script src="../../html/assets/js/login.js"></script>

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