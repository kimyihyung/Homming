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
                    <img src="../html/assets/img/plantmoaView03.png" alt="">
                </figure>
                <div class="plantmoaView__contents">
                    <div class="title">
                        <h1>Cyclamen</h1>
                        <h2>시클라멘</h2>
                    </div>
                    <ul class="plantmoaView__keywords">
                        <li class="plantmoaView__keyword">꽃을 감상하는</li>
                        <li class="plantmoaView__keyword">선물하기 좋은</li>
                    </ul>
                    <div class="plantmoaView__con">
                        <p>
                            시클라멘은 공중에 둥둥 떠있는 난을 닮은 꽃이 있는 식물이에요. 구근 식물이어서 겨울에 꽃을 한껏 피우고 날씨가 따뜻해지면 휴면기로 접어들어요. 꽃 색상은 보라색,
                            흰색, 분홍색 등등으로 다양하고 프릴이 있는 품종도
                            있어요.
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
                                    <h4 class="notice-item-desc">햇빛을 좋아하지만, 그늘에서도 괜찮아요.</h4>
                                </li>
                            </div>
                            <div class="notice-items-flex">
                                <li class="notice-item">
                                    <div class="notice-img3"></div>
                                    <h3 class="notice-item-title">40~70%</h3>
                                    <h4 class="notice-item-desc">보통날의 환경에 적합해요.</h4>
                                </li>
                                <li class="notice-item">
                                    <div class="notice-img4"></div>
                                    <h3 class="notice-item-title">잘 자라는 온도</h3>
                                    <h4 class="notice-item-desc">12~20℃의 온도에서 잘 자라요</h4>
                                </li>
                            </div>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="plantmoaInfo">
                <div class="info_title">
                    <h1>자세히 알아보기</h1>
                    <h2>시클라멘</h2>
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
                                시클라멘이 빠르게 성장하는 가을~봄에는 보통 주 1~2회 겉흙이 마르면 화분 밑으로 물이 흘러 나올만큼 듬뿍 주세요. 온도가 높아지면 휴면기에 접어들어
                                늦봄부터
                                성장속도가 느려지기 때문에 물 주는 주기를 늘려주세요.
                                물주기는 계절과 키우는 환경에 따라 변하기 때문에 식물의 건강을 생각한다면 식물이 물을 필요로 할 때 주는 것이 좋아요. 화분안의 흙이 항상 물에 잠겨잇으면
                                뿌리가 숨쉬기 힘들어요. 화분에 손가락을 넣었을 때
                                건조하거나, 화분을 들었을 때 무게가 가볍거나, 잎에 힘이 없어보이고 얇아지거나 쭈글해졌을 때 물을 주는 것이 좋아요.
                            </p>
                            <h3 class="plantInfo__tit2">여름</h3>
                            <p class="plantInfo__desc2">
                                온도가 높아지면 휴면기에 접어들어 늦봄부터
                                성장속도가 느려지기 때문에 물 주는 주기를 늘려주세요.
                            </p>
                            <h3 class="plantInfo__tit3">겨울</h3>
                            <p class="plantInfo__desc3">
                                빠르게 성장하는 가을~봄에는 보통 주 1~2회 겉흙이 마르면 화분 밑으로 물이 흘러 나올만큼 듬뿍 주세요.
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
                                햇빛은 식물이 살아가는데 있어서 꼭 필요한 요소에요. 시클라멘은 창문이나 커튼을 거친 부드러운 햇빛을 좋아해요. 햇빛이 부족할 경우 잎의 색이 연해질 수
                                있으니 밝은 곳에서 키우는 것이 좋아요. 한여름의 뜨거운 햇빛
                                아래서는 잎이 탈 수 있으니 주의해주세요.
                            </p>
                            <h3 class="plantInfo__tit2">추천 배치 장소</h3>
                            <p class="plantInfo__desc2">
                                시클라멘은 창문이나 커튼을 거친 부드러운 햇빛을 좋아해요.
                            <h3 class="plantInfo__tit3">빛에 따른 변화</h3>
                            <p class="plantInfo__desc3">
                                빛 관리의 도움이 필요하다면 식물 생장용 LED를 추천드립니다.
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
                                40~70% - 봄, 가을, 겨울 날씨의 습도를 좋아해요. 너무 습한 환경에서는 과습이 올 수 있어요. 쾌적한 습도를 유지하기 위해 환기를 하거나 서큘레이터를
                                이용하면 좋아요.
                            </p>
                            <h3 class="plantInfo__tit2">습도가 낮으면</h3>
                            <p class="plantInfo__desc2">
                                공기의 흐름이 제한적인 곳이라면, 선풍기와 서큘레이터의 도움을 받아보는 것을 추천드립니다.
                            </p>
                            <h3 class="plantInfo__tit3">습도가 높거나 흙이 축축한 경우</h3>
                            <p class="plantInfo__desc3">
                                습한 환경을 좋아하지만, 너무 습한 경우에는 과습이 올 수 있기에 쾌적한 습도 유지를 위해 노력해주세요
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
                                12~20℃ - 서늘한 온도에서 무난하게 잘 자라요. 따뜻한 온도에서 빠르게 성장하지만 온도가 낮아질수록 성장속도가 느려져요. 10℃ 이하에서는 냉해를 입을
                                수 있으니 추운 겨울철에는 베란다나 실내의 따뜻한 곳에서
                                키우는 것이 좋아요.
                            </p>
                            <h3 class="plantInfo__tit2">온도가 낮으면</h3>
                            <p class="plantInfo__desc2">
                                12~20℃ - 서늘한 온도에서 무난하게 잘 자라요. 서능한 온도를 좋아하니, 서늘한 온도를 유지해주새요
                            </p>
                            <h3 class="plantInfo__tit2">온도가 높으면</h3>
                            <p class="plantInfo__desc3">
                                따뜻한 온도에서 빠르게 성장하지만 온도가 낮아질수록 성장속도가 느려져요. 10℃ 이하에서는 냉해를 입을
                                수 있으니 추운 겨울철에는 베란다나 실내의 따뜻한 곳에서
                                키우는 것이 좋아요.
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