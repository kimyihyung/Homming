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
                    style="background-image: url(https://huga.s3.ap-northeast-2.amazonaws.com/plantImages/16625356046481.jpg);">
                </figure>
                <!-- 이미지 링크 변경 -->
                <div class="plantmoaView__contents">
                    <div class="title">
                        <h1>Syngonium podophyllym 'Silver Dwarf'</h1>
                        <h2>싱고니움 실버 드워프</h2>
                    </div>
                    <ul class="plantmoaView__keywords">
                        <li class="plantmoaView__keyword">공기정화</li>
                        <li class="plantmoaView__keyword">빛이 적어도 되는</li>
                        <li class="plantmoaView__keyword">선물하기 좋은</li>
                    </ul>
                    <div class="plantmoaView__con">
                        <p>
                        싱고니움 실버 드워프는 마치 하얀 눈을 맞은 것 처럼 아름답게 빛나는 민트빛의 싱고니움입니다. 키가 작게 자라는 습성이 있어 앙증맞은 미니 사이즈를 좋아하시는 식집사분들에게 추천하는식물이에요. 잎 끝이 갈색으로 타 들어가 아름다운 빛깔의 잎이 상할 수 있으므로 직접적인 강한 빛은 피해 놓아주시고, 주변 공기를 촉촉하게 유지해 주면 건강하게 새 잎을 내어 준다고 해요. 빛이 드는 방향으로 줄기가 굽어져 자랄 수 있으니 식물 전체에 빛을 골고루 받을 수 있게 주기적으로 화분을 돌리면서 키워주세요. 잎을 자르면 나오는 수액에 독성이 있으니 아이가 있는 집이나 반려동물이 있는 집에는 주의해서 키워야 해요.
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
                    <h2>싱고니움 실버 드워프</h2>
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
                           스위트 바질은 물을 굉장히 좋아하는 식물이에요. 그만큼 물을 자주 줘야하는 식물이기 때문에, 통풍이 잘 안되는 실내에서는 과습의 피해를 입기도 쉽답니다. 따라서 화분 위에서 3~5cm 정도의 높이까지의 흙이 마른 것을 확인한 후 물을 주시고, 물을 줄 때는 화분 밑으로 물이 빠져나올 때까지 천천히 충분히 주어 흙 전체에 충분히 물이 흡수될 수 있게 해주세요. 자주 조금씩 물을 주는 것보다는 겉 흙이 말랐을 때 듬뿍 주는 게 물을 더 효과적으로 흡수할 수 있답니다. 물을 준 후에는 화분 받침대의 물을 바로 버려주고, 공기 순환이 잘 되는 곳에 두어 뿌리가 숨을 잘 쉴 수 있도록 해주세요. </p>
                            <h3 class="plantInfo__tit2">여름</h3>
                            <p class="plantInfo__desc2">
                              성장이 빨라지는 봄~여름에는 흙 마름도 빨라져 물 주는 횟수를 늘려주시는 게 좋아요. 여름철에는 가장 더운 시간을 피해 저녁에 물을 주세요. 물을 준 후 흙의 온도가 함께 올라가 뿌리가 상할 수 있어요.
                            </p>
                            <h3 class="plantInfo__tit3">겨울</h3>
                            <p class="plantInfo__desc3">
                           날씨가 추워지는 늦가을~겨울에는 성장속도가 느려져 흙 마름도 더뎌진답니다. 따라서 물 주는 횟수를 서서히 줄여주시는 게 좋아요. 겨울철에는 날씨가 가장 따뜻한 낮에 너무 차갑지 않은 온도의 물을 주시는 게 좋아요.  </p>
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
스위트 바질은 밝은 빛이 오래 머무는 곳을 좋아해요. 하루 평균 6시간 정도는 밝은 빛을 볼 수 있도록 해주세요.

  </p>
                            <h3 class="plantInfo__tit2">빛이 너무 강하면</h3>
                            <p class="plantInfo__desc2">
                       바질트리는 한낮의 직접적인 강한 빛을 지속적으로 받게 되면 얇고 작은 잎이 타 화상자국이 생길 수 있어요. 강한 햇빛이 직접적으로 들어오는 공간이라면 한낮에는 커튼이나 블라인드 등으로 빛을 가려주시는 게 좋아요. </p>
                            <h3 class="plantInfo__tit3">빛이 너무 약하면</h3>
                            <p class="plantInfo__desc3">
                          빛이 부족할 경우 줄기가 얇게 웃자라고 밝은 곳을 향해 굽어 자랄 수 있어요. 또한 잎에 힘이 없고 잎의 크기가 작아져 밝은 빛을 받을 수 있는 공간에서 화분을 주기적으로 돌려주시며 키우는 게 좋아요.   </p>
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
                           스위트 바질은 너무 습한 곳은 피해주세요. 평균 실내 습도에서 무난히 잘 자라며, 장마철의 높은 습도에서는 주의가 필요하답니다.

 </p>
                            <h3 class="plantInfo__tit2">습도가 낮으면</h3>
                            <p class="plantInfo__desc2">
                    습도가 너무 낮은 환경이 지속되면 바질트리의 새 순이 마를 수 있어요. 따라서 주변 공간의 습도가 너무 낮다면(40%이하) 주변에 식물을 놓아두거나 멀리서 가습기를 틀어서 약간의 습도를 높여주는 것이 좋아요. 가습기와 서큘레이터를 함께 이용하면 한 곳의 습도만 높아지는 것을 방지할 수 있답니다.   
                    <h3 class="plantInfo__tit3">습도가 높으면</h3>
                            <p class="plantInfo__desc3">
                            습도가 너무 높은 환경이 지속되면서 공기가 잘 순환하지 않으면 잎이 무를 수 있고, 잎이 누렇게 변할 수 있어요. 또한 병충해가 생기기 쉬운 환경이 되므로 환기를 자주 해주시거나 서큘레이터를 이용해 공기를 순환시켜 주는 게 좋아요. 높은 습도의 장마철에는 제습기를 이용하여 주변 습도를 관리해 주시는 것을 추천드립니다.</p>
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
                          스위트 바질은 평균 실내 온도에서 잘 자라는 식물입니다. 한겨울의 추위만 피해주신다면 건강하게 키우실 수 있어요.  </p>
                            <h3 class="plantInfo__tit2">온도가 낮으면</h3>
                            <p class="plantInfo__desc2">
                         온도가 낮아지는 늦가을~겨울에는 추위를 피해 따뜻한 실내에서 키워주시는 것이 좋아요. 날씨가 쌀쌀해지는 늦가을에서 겨울에는 식물의 지상부(흙 위의 드러난 부분; 줄기, 잎)가 냉해를 입을 수 있고 흙의 온도가 낮아지면 지하부(흙 아래 심겨진 부분)까지 영향을 미칠 수 있어요. 새 잎을 내지 않거나 새 잎이 바로 말라버릴 수도 있어요. 겨울철에도 건강하게 생육을 지속하고 싶으시다면 실내 온도를 15ºC 이상으로 관리해주세요.   </p>
                            <h3 class="plantInfo__tit2">온도가 높으면</h3>
                            <p class="plantInfo__desc3">
                              여름철 한낮에 직접적인 강한 햇빛이 들어오는 공간에서는 화분 속 흙의 온도도 함께 올라가 뿌리가 상할 수 있고, 잎과 뿌리의 호흡이 불량해질 수 있으니 30ºC 이상의 고온의 장소는 피해주세요.
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