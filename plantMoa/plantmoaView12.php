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
                    <img src="../html/assets/img/plantmoaView12.jpeg" alt="">
                </figure>
                <div class="plantmoaView__contents">
                    <div class="title">
                        <h1>Hoya kerrii</h1>
                        <h2>하트 호야 (호야 케리)</h2>
                    </div>
                    <ul class="plantmoaView__keywords">
                        <li class="plantmoaView__keyword">초보자용</li>
                        <li class="plantmoaView__keyword">공기정화</li>
                        <li class="plantmoaView__keyword">선물하기 좋은</li>
                    </ul>
                    <div class="plantmoaView__con">
                        <p>
                            통통한 하트모양의 잎이 사랑스러운 하트호야는 예쁜 생김새는 물론이고 키우기도 까다롭지 않아 식물을 처음 키우는 초보 식집사에게 선물하기 좋은 식물입니다. 그
                            사랑스러운 생김새 떄문에 서양에서는 연인에게 발렌타인
                            데이에 하트호야를 선물한다고 해요. 그래서 'Sweetheart Vine', 'Valentine's Hoya'라고도 불리운답니다. 통통한 잎에는 수분을 많이 머금고
                            있어 물을 자주 주지 않아도 되고, 평균 실내
                            습도에서도 잘 자라 대표적인 순둥이 식물이랍니다. 식물 가게에서 하트모양의 잎만 뿅 심겨져 있는 하트호야도 많이 보셨을텐데, 이 잎꽂이 하트호야는 생장점 없이 뿌리만
                            발달되어 새 잎이 나거나 꽃이 피지 않고 그 모양
                            그대로 유지된다고 해요. 원래의 하트호야는 줄기를 늘어뜨리며 자라는 덩굴식물이에요. 밝은 빛을 충분히 받고 자라면 아름다운 꽃도 보실 수 있답니다.
                        </p>
                    </div>
                    <div class="plantmoaView__item">
                        <ul class="notice-items">
                            <div class="notice-items-flex">
                                <li class="notice-item">
                                    <div class="notice-img1"></div>
                                    <h3 class="notice-item-title">평균 월 1~2회</h3>
                                    <h4 class="notice-item-desc">통통한 잎이 얇아지면 듬뿍 주세요</h4>
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
                                    <h4 class="notice-item-desc">16~27°C의 온도에서 잘 자라요</h4>
                                </li>
                            </div>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="plantmoaInfo">
                <div class="info_title">
                    <h1>자세히 알아보기</h1>
                    <h2>하트 호야</h2>
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
                                하트호야는 건조에 강한 식물이에요. 잎이 살짝 주름졌을 때 물을 주면 과습의 해를 입지 않고 키우실 수 있어요. 물을 주기 전에 흙을 손으로 만졌을 때 속
                                흙까지 말랐는 지 확인한 후 물을 주세요. 흙 전체에 물이
                                골고루 흡수될 수 있도록 화분 배수 구멍으로 물이 흘러나올 때까지 물을 천천히, 흠뻑 주세요. 물을 준 후에는 충분한 환기를 통해 뿌리에 산소를 공급해주세요.
                                과습을 방지하여 뿌리 성장을 돕는답니다.
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
                                날씨가 추워지는 늦가을~겨울에는 성장속도가 느려져 흙 마름도 더뎌진답니다. 따라서 물 주는 횟수도 줄여주시는 게 좋아요. 겨울철에는 날씨가 따뜻한 낮에
                                미지근한 온도의 물을 주시는 게 좋아요.
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
                                하트호야는 밝은 빛을 사랑하는 식물이에요. 밝은 빛이 오래 머무는 곳에서 키워주세요.
                            </p>
                            <h3 class="plantInfo__tit2">빛이 너무 강하면</h3>
                            <p class="plantInfo__desc2">
                                한여름 낮의 뜨거운 직사광선 아래에서는 잎이 화상을 입을 수 있어, 커튼이나 블라인드로 약간의 차광을 해주시는 게 좋아요.
                            <h3 class="plantInfo__tit3">빛이 너무 약하면</h3>
                            <p class="plantInfo__desc3">
                                빛이 너무 약하면 성장이 아주 느려지고 수형이 웃자랄 수 있으니 밝은 공간으로 옮겨주시는 것이 좋아요. 또한 흙 마름이 더뎌져 과습의 해를 입을 위험이
                                높아진답니다.
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
                                호야는 다육성의 잎을 가지고 있어 다양한 습도조건에서도 잘 자라지만, 주변 습도를 높여주시면 더 건강하게 잘 자라요.
                            </p>
                            <h3 class="plantInfo__tit2">습도가 낮으면</h3>
                            <p class="plantInfo__desc2">
                                습도가 낮아 건조해지면 통통한 잎의 끝이 오그라지는 증상이 나타나요. 또한 습도가 너무 낮은 환경이 지속되면 식물이 뿌리로부터 물을 잘 끌어올릴 수 없게 되어
                                잎 끝이 마르거나 잎이 떨어질 수 있어요. 따라서 주변
                                공간의 습도가 너무 낮다면(40% 이하) 분무기를 이용해 식물 주변의 습도를 높여주시거나 가습기를 사용해주시는 게 좋아요. 가습기와 서큘레이터를 함께 이용하면
                                한 곳의 습도만 높아지는 것을 방지할 수 있답니다.
                            </p>
                            <h3 class="plantInfo__tit3">습도가 높으면</h3>
                            <p class="plantInfo__desc3">
                                습도가 높게 지속되면서 공기를 순환시켜주지 않으면 병충해가 생기기 쉬운 환경이 만들어져요. 따라서 환기를 자주 해주시거나 가습기와 서큘레이터를 함께 이용해
                                공기를 순환시켜 주는 게 좋아요.
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
                                고온다습한 열대성 기후의 솔로몬 제도에서 온 스킨답서스는 추위에 아주 약해 주변 온도를 따뜻하게 관리해주셔야 한답니다. 만약 실외나 베란다에서 키우고
                                계시다면, 늦가을~초봄까지는 실내로 들여서 키워주셔야 건강하게
                                키울 수 있습니다.
                            </p>
                            <h3 class="plantInfo__tit2">온도가 낮으면</h3>
                            <p class="plantInfo__desc2">
                                스킨답서스는 낮은 온도에서는 성장이 아주 느려져요. 특히 찬 바람에 아주 약해 우풍을 맞지 않는 공간에 놓아주세요. 날씨가 쌀쌀해지는 늦가을에서 겨울에는
                                식물의 지상부(흙 위의 드러난 부분; 줄기, 잎)가 냉해를
                                입을 수 있고 흙의 온도가 낮아지면 지하부(흙 아래 심겨진 부분)까지 영향을 미칠 수 있어요. 겨울철에도 건강하게 생육을 지속하고 싶으시다면 실내 온도를
                                15ºC 이상으로 관리해주세요. 온도가 낮아지면 잎 색이
                                변하고 가지가 축 늘어지는 냉해를 입을 수 있어요.
                            </p>
                            <h3 class="plantInfo__tit2">온도가 높으면</h3>
                            <p class="plantInfo__desc3">
                                스킨답서스는 서늘한 온도를 좋아하는 식물입니다. 따뜻한 봄과 초여름에 왕성하게 성장하지만 한여름 낮의 뜨거운 온도가 지속되면 잎과 뿌리의 호흡이 불량해질 수
                                있으니 30ºC 이상의 고온의 장소는 피해주세요.
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