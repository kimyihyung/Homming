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
                    style="background-image: url(https://huga.s3.ap-northeast-2.amazonaws.com/plantImages/16589155784795.jpg);">
                </figure>
                <!-- 이미지 링크 변경 -->
                <div class="plantmoaView__contents">
                    <div class="title">
                        <h1>Euphorbia hypogaea</h1>
                        <h2>괴마옥 (파인애플 선인장)</h2>
                    </div>
                    <ul class="plantmoaView__keywords">
                        <li class="plantmoaView__keyword">공기정화</li>
                        <li class="plantmoaView__keyword">빛이 적어도 되는</li>
                        <li class="plantmoaView__keyword">선물하기 좋은</li>
                    </ul>
                    <div class="plantmoaView__con">
                        <p>
                       파인애플을 닮은 괴마옥은 남아프리카 케이프 지역의 열대 초원에서 온 다육식물이에요. '귀신을 쫓는구슬'이라는 뜻의 이름으로 나쁜 기운을 물리쳐준다고 해요. 게다가 물을 자주 주지 않아도 되고, 키우기 어렵지 않아서 선물용으로도 인기 있는 식물입니다. 위로 쭉쭉 키를 키우는 괴마옥은 새로 자라는 줄기는 녹색을 띠고 있지만 시간이 지날수록 갈색으로 목질화되어 괴마옥을 더 파인애플처럼 보이게 해요. 괴마옥은 아미산과 철갑환의 교잡종으로, 어렸을 때 아미산과 아주 비슷한 생김새를 가지고 있어 간혹 아미산을 괴마옥으로 판매하는 경우가 있어요. 아미산은 키가 잘 크지 않고 옆으로 자구를 내어 퍼지면서 자란답니다. 괴마옥을 자르거나 상처를 내게 되면 하얀 진액이 나오는데, 이 진액에는 독성이 있어 직접 손에 닿지 않도록 항상 주의가 필요해요. </p>
                    </div>
                    <div class="plantmoaView__item">
                        <ul class="notice-items">
                            <div class="notice-items-flex">
                                <li class="notice-item">
                                    <div class="notice-img1"></div>
                                    <h3 class="notice-item-title">평균 월 1회 이하</h3>
                                    <h4 class="notice-item-desc">단단한 몸통이 말랑해지면 듬뿍 주세요</h4>
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
                                    <h3 class="notice-item-title">40% 이하</h3>
                                    <h4 class="notice-item-desc">주변 공기를 건조하게 관리해주세요</h4>
                                </li>
                                <li class="notice-item">
                                    <div class="notice-img4"></div>
                                    <h3 class="notice-item-title">잘 자라는 온도</h3>
                                    <h4 class="notice-item-desc">15~30℃의 온도에서 잘 자라요</h4>
                                </li>
                            </div>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="plantmoaInfo">
                <div class="info_title">
                    <h1>자세히 알아보기</h1>
                    <h2>괴마옥 (파인애플 선인장)</h2>
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
                         괴마옥 두꺼운 줄기에 수분을 많이 머금고 있어 건조한 환경에 견디는 능력이 뛰어난 다육식물입니다. 흙이 다 마르기 전에 물을 주면 몸통이 물러버릴 수 있으니 꼭 흙이 마른 것을 확인한 후에 물을 주셔야해요. 물을 주실 때는 몸통에 직접 닿지 않게 주셔야 무름을 방지할 수 있답니다. 너무 차갑지 않은 온도의 물을 듬뿍 주세요. 물을 준 후에는 받침대에 고인 물을 바로 버리고, 통풍이 잘 되는 곳에 두세요.   </p>
                            <h3 class="plantInfo__tit2">여름</h3>
                            <p class="plantInfo__desc2">
                              성장이 빨라지는 봄~여름에는 흙 마름도 빨라져 물 주는 횟수를 늘려주시는 게 좋아요. 무더운 여름철에는 가장 더운 시간을 피해 저녁에 물을 주세요. 물을 준 후 흙의 온도가 함께 올라가 뿌리가 상할 수 있어요.
                            </p>
                            <h3 class="plantInfo__tit3">겨울</h3>
                            <p class="plantInfo__desc3">
                              날씨가 추워지는 늦가을~겨울에는 성장속도가 느려져 흙 마름도 더뎌진답니다. 따라서 물 주는 횟수도 줄여주시는 게 좋아요. 겨울철에는 날씨가 가장 따뜻할 때 너무 차갑지 않은 온도의 물을 주시는 게 좋아요.
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
                       괴마옥은 밝은 빛을 좋아하는 식물이에요. 가장 밝은 빛이 오래 머무는 곳에서 키워주세요.  <h3 class="plantInfo__tit2">빛이 너무 강하면</h3>
                            <p class="plantInfo__desc2">
                           강한 빛을 지속적으로 받게 되면 잎 끝이 탈 수 있어요. 따라서 한여름철의 강한 햇빛이 바로 들어오는 공간이라면 커튼이나 블라인드 등으로 빛을 살짝 가려주시는 게 좋아요. <h3 class="plantInfo__tit3">빛이 너무 약하면</h3>
                            <p class="plantInfo__desc3">
                            빛이 많이 부족할 경우 줄기가 얇게 웃자라고 밝은 곳을 향해 굽어 자랄 수 있어요. 또한 흙이 잘 마르지 않아 몸통이 물러질 위험도 높아지니 밝은 빛을 받을 수 있는 곳에서 키워주세요.</p>
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
                           괴마옥은 건조한 환경을 좋아해요. 평균 실내 습도에서 무난히 잘 자라며, 장마철의 높은 습도에서는 몸통이 물러지지 않도록 주의가 필요하답니다. </p>
                            <h3 class="plantInfo__tit2">습도가 낮으면</h3>
                            <p class="plantInfo__desc2">
                       괴마옥은 건조한 습도에도 잘 견뎌요. 주변 공간의 습도가 너무 낮다면(40%이하) 괴마옥의 잎이 바스락거리며 마르거나 흙이 바싹 말라 뿌리가 상할 수 있어요. 주변에 식물을 함께 놓아주시거나 쟁반에 조약돌을 놓은 후 물을 받아 근처에 두시면 주변 습도를 올릴 수 있답니다.<h3 class="plantInfo__tit3">습도가 높으면</h3>
                            <p class="plantInfo__desc3">
                          습도가 너무 높은 환경이 지속되면 몸통이 마를 수 있고, 병충해가 생기기 쉬우므로 환기를 자주 해주시거나 서큘레이터를 이용해 공기를 순환시켜 주는 게 좋아요. 높은 습도의 장마철에는 제습기를 이용하여 주변 습도를 관리해 주시는 것을 추천드립니다.  </p>
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
                          괴마옥은 따뜻한 온도를 좋아하는 식물입니다. 한겨울의 추위만 피해주신다면 건강하게 키우실 수 있어요.  </p>
                            <h3 class="plantInfo__tit2">온도가 낮으면</h3>
                            <p class="plantInfo__desc2">
                            온도가 낮아지는 늦가을~겨울에는 추위를 피해 따뜻한 실내에서 키워주시는 것이 좋아요. 찬바람이 드나드는 곳도 피해주세요. 특히 10℃ 이하의 온도에서는 냉해를 입어 몸통이 얼어 물러버릴 수 있어요. </p>
                            <h3 class="plantInfo__tit2">온도가 높으면</h3>
                            <p class="plantInfo__desc3">
                           30℃가 넘는 여름철 한낮에 직접적인 강한 햇빛이 들어오는 공간에서는 화분 속 흙의 온도도 함께 올라가 뿌리가 상할 수 있으니 주의해주세요. </p>
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