<?php
    include "../connect/connect.php";
    include "../connect/session.php";
?>
<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>식물모아</title>

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
        <section id="plantmoa" class="container">
            <div class="plantmoa__inner">
                <div class="plantmoa__title">
                    <h2>식물모아</h2>
                </div>
                <!-- <div class="plantmoa__card">
                    <fieldset>
                        <select name="cardOption" id="cardOption">
                            <option value="title">전체</option>
                            <option value="content">다육이/선인장</option>
                            <option value="content">관엽/공기정화</option>
                            <option value="content">꽃</option>
                            <option value="content">관엽/대형</option>
                        </select>
                        <select name="cardOption" id="cardOption">
                            <option value="title">다육이/선인장</option>
                            <option value="content">선인장</option>
                            <option value="content">다육이</option>
                            <option value="content">에케베리아</option>
                        </select>
                        <select name="cardOption" id="cardOption">
                            <option value="title">관엽/공기정화 식물</option>
                            <option value="content">관엽식물</option>
                            <option value="content">공기정화식물</option>
                            <option value="content">기타 관엽식물</option>
                        </select>
                        <select name="cardOption" id="cardOption">
                            <option value="title">꽃 식물</option>
                            <option value="content">동백</option>
                            <option value="content">허브</option>
                        </select>
                        <select name="cardOption" id="cardOption">
                            <option value="title">관엽/대형 식물</option>
                            <option value="content">넝쿨류</option>
                            <option value="content">열매류</option>
                        </select>
                    </fieldset>
                </div> -->

                <div class="first_filter_section" id="first_filter">
                    <ul class="filter_lists">
                        <button class="filter_btn active" type="button" data-filter="all">all</button>
                        <button class="filter_btn" type="button" data-filter="초보자용">초보자용</button>
                        <button class="filter_btn" type="button" data-filter="다육/선인장">다육/선인장</button>
                        <button class="filter_btn" type="button" data-filter="반려동물 안전한">반려동물 안전한</button>
                    </ul>
                </div>

                <div class="card__inner search_list_section">
                    <div class="card" data-category="반려동물 안전한">
                        <a href="../plantMoa/plantmoaView.php">
                            <div class="card__header">
                                <figure>
                                    <img src="../html/assets/img/plantmoa01.jpg" alt="몬스테라">
                                </figure>
                            </div>
                            <div class="card__contents">
                                <img src="../html/assets/img/plantMain_icon.svg" alt="식물모아 식물아이콘">
                                <h3>몬스테라</h3>
                            </div>
                        </a>
                    </div>
                    <div class="card" data-category="반려동물 안전한">
                        <a href="../plantMoa/plantmoaView02.php">
                            <div class="card__header">
                                <figure>
                                    <img src="../html/assets/img/plantmoa02.jpg" alt="싱고니움">
                                </figure>
                            </div>
                            <div class="card__contents">
                                <img src="../html/assets/img/plantMain_icon.svg" alt="식물모아 식물아이콘">
                                <h3>싱고니움</h3>
                            </div>
                        </a>
                    </div>
                    <div class="card" data-category="반려동물 안전한">
                        <a href="../plantMoa/plantmoaView03.php">
                            <div class="card__header">
                                <figure>
                                    <img src="../html/assets/img/plantmoa03.jpg" alt="시클라멘">
                                </figure>
                            </div>
                            <div class="card__contents">
                                <img src="../html/assets/img/plantMain_icon.svg" alt="식물모아 식물아이콘">
                                <h3>시클라멘</h3>
                            </div>
                        </a>
                    </div>
                    <div class="card" data-category="반려동물 안전한">
                        <a href="../plantMoa/plantmoaView04.php">
                            <div class="card__header">
                                <figure>
                                    <img src="../html/assets/img/plantmoa04.jpeg" alt="인도 고무나무">
                                </figure>
                            </div>
                            <div class="card__contents">
                                <img src="../html/assets/img/plantMain_icon.svg" alt="식물모아 식물아이콘">
                                <h3>인도 고무나무</h3>
                            </div>
                        </a>
                    </div>
                    <div class="card" data-category="반려동물 안전한">
                        <a href="../plantMoa/plantmoaView05.php">
                            <div class="card__header">
                                <figure>
                                    <img src="../html/assets/img/plantmoa05.jpeg" alt="스투키">
                                </figure>
                            </div>
                            <div class="card__contents">
                                <img src="../html/assets/img/plantMain_icon.svg" alt="식물모아 식물아이콘">
                                <h3>스투키</h3>
                            </div>
                        </a>
                    </div>
                    <div class="card" data-category="반려동물 안전한">
                        <a href="../plantMoa/plantmoaView06.php">
                            <div class="card__header">
                                <figure><img src="../html/assets/img/plantmoa06.jpeg" alt="청페페">
                                </figure>
                            </div>
                            <div class="card__contents">
                                <img src="../html/assets/img/plantMain_icon.svg" alt="식물모아 식물아이콘">
                                <h3>청페페</h3>
                            </div>
                        </a>
                    </div>
                    <div class="card" data-category="반려동물 안전한">
                        <a href="../plantMoa/plantmoaView07.php">
                            <div class="card__header">
                                <figure>
                                    <img src="../html/assets/img/plantmoa07.jpeg" alt="바질트리">
                                </figure>
                                <div class="card__contents">
                                    <img src="../html/assets/img/plantMain_icon.svg" alt="식물모아 식물아이콘">
                                    <h3>바질트리</h3>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="card" data-category="반려동물 안전한">
                        <a href="../plantMoa/plantmoaView08.php">
                            <div class="card__header">
                                <figure>
                                    <img src="../html/assets/img/plantmoa08.jpg" alt="라벤더">
                                </figure>
                            </div>
                            <div class="card__contents">
                                <img src="../html/assets/img/plantMain_icon.svg" alt="식물모아 식물아이콘">
                                <h3>라벤더</h3>
                            </div>
                        </a>
                    </div>
                    <div class="card" data-category="초보자용">
                        <a href="../plantMoa/plantmoaView09.php">
                            <div class="card__header2"
                                style="background-image: url(https://huga.s3.ap-northeast-2.amazonaws.com/plantImages/1666595398149312379556_646855853565767_1253948151984691753_n.jpg);">
                            </div>
                            <div class="card__contents">
                                <img src="../html/assets/img/plantMain_icon.svg" alt="식물모아 식물아이콘">
                                <h3>필로덴드론 '프린스 오브 오렌지' (선라이트 콩고)</h3>
                            </div>
                        </a>
                    </div>
                    <div class="card" data-category="초보자용">
                        <a href="../plantMoa/plantmoaView10.php">
                            <div class="card__header2"
                                style="background-image: url(https://huga.s3.ap-northeast-2.amazonaws.com/plantImages/1665648189116236565741_580284253380375_3570178949738701144_n.jpg);">
                            </div>
                            <div class="card__contents">
                                <img src="../html/assets/img/plantMain_icon.svg" alt="식물모아 식물아이콘">
                                <h3>필로덴드론 호세부오노</h3>
                            </div>
                        </a>
                    </div>
                    <div class="card" data-category="초보자용">
                        <a href="../plantMoa/plantmoaView11.php">
                            <div class="card__header2"
                                style="background-image: url(https://huga.s3.ap-northeast-2.amazonaws.com/plantImages/16655813305921.jpg);">
                            </div>
                            <div class="card__contents">
                                <img src="../html/assets/img/plantMain_icon.svg" alt="식물모아 식물아이콘">
                                <h3>스킨답서스 화이트 마블퀸 (마블퀸 스킨답서스)</h3>
                            </div>
                        </a>
                    </div>
                    <div class="card" data-category="반려동물 안전한">
                        <a href="../plantMoa/plantmoaView12.php">
                            <div class="card__header2"
                                style="background-image: url(https://huga.s3.ap-northeast-2.amazonaws.com/plantImages/16655792924111.jpg);">
                            </div>
                            <div class="card__contents">
                                <img src="../html/assets/img/plantMain_icon.svg" alt="식물모아 식물아이콘">
                                <h3>하트 호야 (호야 케리)</h3>
                            </div>
                        </a>
                    </div>
                    <div class="card" data-category="반려동물 안전한">
                        <a href="../plantMoa/plantmoaView13.php">
                            <div class="card__header2"
                                style="background-image: url(https://huga.s3.ap-northeast-2.amazonaws.com/plantImages/16643677823861.jpg);">
                            </div>
                            <div class="card__contents">
                                <img src="../html/assets/img/plantMain_icon.svg" alt="식물모아 식물아이콘">
                                <h3>바나나 크로톤</h3>
                            </div>
                        </a>
                    </div>
                    <div class="card" data-category="초보자용">
                        <a href="../plantMoa/plantmoaView14.php">
                            <div class="card__header2"
                                style="background-image: url(https://huga.s3.ap-northeast-2.amazonaws.com/plantImages/16643664666541.jpg);">
                            </div>
                            <div class="card__contents">
                                <img src="../html/assets/img/plantMain_icon.svg" alt="식물모아 식물아이콘">
                                <h3>코니오그램 에메이엔시스 '골든 제브라'</h3>
                            </div>
                        </a>
                    </div>
                    <div class="card" data-category="초보자용">
                        <a href="../plantMoa/plantmoaView15.php">
                            <div class="card__header2"
                                style="background-image: url(https://huga.s3.ap-northeast-2.amazonaws.com/plantImages/16643476966881.jpg);">
                            </div>
                            <div class="card__contents">
                                <img src="../html/assets/img/plantMain_icon.svg" alt="식물모아 식물아이콘">
                                <h3>베고니아 콘치폴리아</h3>
                            </div>
                        </a>
                    </div>
                    <div class="card" data-category="초보자용">
                        <a href="../plantMoa/plantmoaView16.php">
                            <div class="card__header2"
                                style="background-image: url(https://huga.s3.ap-northeast-2.amazonaws.com/plantImages/16643362462431.jpg);">
                            </div>
                            <div class="card__contents">
                                <img src="../html/assets/img/plantMain_icon.svg" alt="식물모아 식물아이콘">
                                <h3>싱고니움 밀크컨페티</h3>
                            </div>
                        </a>
                    </div>
                    <div class="card" data-category="초보자용">
                        <a href="../plantMoa/plantmoaView17.php">
                            <div class="card__header2"
                                style="background-image: url(https://huga.s3.ap-northeast-2.amazonaws.com/plantImages/16642833765131.jpg);">
                            </div>
                            <div class="card__contents">
                                <img src="../html/assets/img/plantMain_icon.svg" alt="식물모아 식물아이콘">
                                <h3>필로덴드론 옥시카르디움 '브라질'</h3>
                            </div>
                        </a>
                    </div>
                    <div class="card" data-category="초보자용">
                        <a href="../plantMoa/plantmoaView18.php">
                            <div class="card__header2"
                                style="background-image: url(https://huga.s3.ap-northeast-2.amazonaws.com/plantImages/16642733650961.jpg);">
                            </div>
                            <div class="card__contents">
                                <img src="../html/assets/img/plantMain_icon.svg" alt="식물모아 식물아이콘">
                                <h3>형광 스킨답서스(네온 스킨답서스)</h3>
                            </div>
                        </a>
                    </div>
                    <div class="card" data-category="다육/선인장">
                        <a href="../plantMoa/plantmoaView19.php">
                            <div class="card__header2"
                                style="background-image: url(https://huga.s3.ap-northeast-2.amazonaws.com/plantImages/16626269782041.jpg);">
                            </div>
                            <div class="card__contents">
                                <img src="../html/assets/img/plantMain_icon.svg" alt="식물모아 식물아이콘">
                                <h3>금황환 선인장</h3>
                            </div>
                        </a>
                    </div>
                    <div class="card" data-category="다육/선인장">
                        <a href="../plantMoa/plantmoaView20.php">
                            <div class="card__header2"
                                style="background-image: url(https://huga.s3.ap-northeast-2.amazonaws.com/plantImages/16643447797491.jpg);">
                            </div>
                            <div class="card__contents">
                                <img src="../html/assets/img/plantMain_icon.svg" alt="식물모아 식물아이콘">
                                <h3>리톱스</h3>
                            </div>
                        </a>
                    </div>
                    <div class="card" data-category="다육/선인장">
                        <a href="../plantMoa/plantmoaView21.php">
                            <div class="card__header2"
                                style="background-image: url(https://huga.s3.ap-northeast-2.amazonaws.com/plantImages/1662622984610293155066_454013439520666_6374164835676991354_n.jpg);">
                            </div>
                            <div class="card__contents">
                                <img src="../html/assets/img/plantMain_icon.svg" alt="식물모아 식물아이콘">
                                <h3>제옥 (플레이오스필로스 넬리)</h3>
                            </div>
                        </a>
                    </div>
                    <div class="card" data-category="초보자용">
                        <div class="card__header2"
                            style="background-image: url(https://huga.s3.ap-northeast-2.amazonaws.com/plantImages/16625523760131.jpg);">
                        </div>
                        <div class="card__contents">
                            <img src="../html/assets/img/plantMain_icon.svg" alt="식물모아 식물아이콘">
                            <h3>라피도포라 디컬시바</h3>
                        </div>
                    </div>
                    <div class="card" data-category="초보자용">
                        <div class="card__header2"
                            style="background-image: url(https://huga.s3.ap-northeast-2.amazonaws.com/plantImages/16625491132521.jpg);">
                        </div>
                        <div class="card__contents">
                            <img src="../html/assets/img/plantMain_icon.svg" alt="식물모아 식물아이콘">
                            <h3>필로덴드론 버럴 막스</h3>
                        </div>
                    </div>
                    <div class="card" data-category="초보자용">
                        <div class="card__header2"
                            style="background-image: url(https://huga.s3.ap-northeast-2.amazonaws.com/plantImages/16625473636791.jpg);">
                        </div>
                        <div class="card__contents">
                            <img src="../html/assets/img/plantMain_icon.svg" alt="식물모아 식물아이콘">
                            <h3>쉬베리아나 고무나무</h3>
                        </div>
                    </div>
                    <div class="card" data-category="반려동물 안전한">
                        <div class="card__header2"
                            style="background-image: url(https://huga.s3.ap-northeast-2.amazonaws.com/plantImages/16625356046481.jpg);">
                        </div>
                        <div class="card__contents">
                            <img src="../html/assets/img/plantMain_icon.svg" alt="식물모아 식물아이콘">
                            <h3>싱고니움 실버 드워프</h3>
                        </div>
                    </div>
                    <div class="card" data-category="반려동물 안전한">
                        <div class="card__header2"
                            style="background-image: url(https://huga.s3.ap-northeast-2.amazonaws.com/plantImages/16624708504524.jpg);">
                        </div>
                        <div class="card__contents">
                            <img src="../html/assets/img/plantMain_icon.svg" alt="식물모아 식물아이콘">
                            <h3>꽃 베고니아</h3>
                        </div>
                    </div>
                    <div class="card" data-category="초보자용">
                        <div class="card__header2"
                            style="background-image: url(https://huga.s3.ap-northeast-2.amazonaws.com/plantImages/16624647206471.jpg);">
                        </div>
                        <div class="card__contents">
                            <img src="../html/assets/img/plantMain_icon.svg" alt="식물모아 식물아이콘">
                            <h3>목성 베고니아</h3>
                        </div>
                    </div>
                    <div class="card" data-category="초보자용">
                        <div class="card__header2"
                            style="background-image: url(https://huga.s3.ap-northeast-2.amazonaws.com/plantImages/16624575870041.jpg);">
                        </div>
                        <div class="card__contents">
                            <img src="../html/assets/img/plantMain_icon.svg" alt="식물모아 식물아이콘">
                            <h3>필로덴드론 콩고</h3>
                        </div>
                    </div>
                    <div class="card" data-category="초보자용">
                        <div class="card__header2"
                            style="background-image: url(https://huga.s3.ap-northeast-2.amazonaws.com/plantImages/16623816022761.jpg);">
                        </div>
                        <div class="card__contents">
                            <img src="../html/assets/img/plantMain_icon.svg" alt="식물모아 식물아이콘">
                            <h3>필로덴드론 파스타짜넘</h3>
                        </div>
                    </div>
                    <div class="card" data-category="초보자용">
                        <div class="card__header2"
                            style="background-image: url(https://huga.s3.ap-northeast-2.amazonaws.com/plantImages/16623789637091.jpg);">
                        </div>
                        <div class="card__contents">
                            <img src="../html/assets/img/plantMain_icon.svg" alt="식물모아 식물아이콘">
                            <h3>필로덴드론 낭가리텐스</h3>
                        </div>
                    </div>
                    <div class="card" data-category="초보자용">
                        <div class="card__header2"
                            style="background-image: url(https://huga.s3.ap-northeast-2.amazonaws.com/plantImages/16623767922831.jpg);">
                        </div>
                        <div class="card__contents">
                            <img src="../html/assets/img/plantMain_icon.svg" alt="식물모아 식물아이콘">
                            <h3>피어리스 (시기지움)</h3>
                        </div>
                    </div>
                    <div class="card" data-category="초보자용">
                        <div class="card__header2"
                            style="background-image: url(https://huga.s3.ap-northeast-2.amazonaws.com/plantImages/16621154868341.jpg);">
                        </div>
                        <div class="card__contents">
                            <img src="../html/assets/img/plantMain_icon.svg" alt="식물모아 식물아이콘">
                            <h3>아글라오네마 스노우 사파이어</h3>
                        </div>
                    </div>
                    <div class="card" data-category="초보자용">
                        <div class="card__header2"
                            style="background-image: url(https://huga.s3.ap-northeast-2.amazonaws.com/plantImages/166210964447669155729_2098054937169756_7496432532346811516_n.jpg);">
                        </div>
                        <div class="card__contents">
                            <img src="../html/assets/img/plantMain_icon.svg" alt="식물모아 식물아이콘">
                            <h3>디펜바키아 마리안느</h3>
                        </div>
                    </div>
                    <div class="card" data-category="초보자용">
                        <div class="card__header2"
                            style="background-image: url(https://huga.s3.ap-northeast-2.amazonaws.com/plantImages/1662103929782162854177_126836032719803_3424332521819803638_n.jpg);">
                        </div>
                        <div class="card__contents">
                            <img src="../html/assets/img/plantMain_icon.svg" alt="식물모아 식물아이콘">
                            <h3>칼라데아 뷰티스타</h3>
                        </div>
                    </div>
                    <div class="card" data-category="초보자용">
                        <div class="card__header2"
                            style="background-image: url(https://huga.s3.ap-northeast-2.amazonaws.com/plantImages/166210229796039989418_457025104785751_8754219444352349172_n.jpg);">
                        </div>
                        <div class="card__contents">
                            <img src="../html/assets/img/plantMain_icon.svg" alt="식물모아 식물아이콘">
                            <h3>칼라데아 마코야나</h3>
                        </div>
                    </div>
                    <div class="card" data-category="반려동물 안전한">
                        <div class="card__header2"
                            style="background-image: url(https://huga.s3.ap-northeast-2.amazonaws.com/plantImages/1662029401806146364315_413805276357646_843839882721336741_n.webp);">
                        </div>
                        <div class="card__contents">
                            <img src="../html/assets/img/plantMain_icon.svg" alt="식물모아 식물아이콘">
                            <h3>싱고니움 그린 스플래쉬</h3>
                        </div>
                    </div>
                    <div class="card" data-category="반려동물 안전한">
                        <div class="card__header2"
                            style="background-image: url(https://huga.s3.ap-northeast-2.amazonaws.com/plantImages/16618530324161.webp);">
                        </div>
                        <div class="card__contents">
                            <img src="../html/assets/img/plantMain_icon.svg" alt="식물모아 식물아이콘">
                            <h3>인도 고무나무</h3>
                        </div>
                    </div>
                    <div class="card" data-category="초보자용">
                        <div class="card__header2"
                            style="background-image: url(https://huga.s3.ap-northeast-2.amazonaws.com/plantImages/16618497631991.jpg);">
                        </div>
                        <div class="card__contents">
                            <img src="../html/assets/img/plantMain_icon.svg" alt="식물모아 식물아이콘">
                            <h3>무늬 벤자민 고무나무</h3>
                        </div>
                    </div>
                    <div class="card" data-category="초보자용">
                        <div class="card__header2"
                            style="background-image: url(https://huga.s3.ap-northeast-2.amazonaws.com/plantImages/16618470142591.jpg);">
                        </div>
                        <div class="card__contents">
                            <img src="../html/assets/img/plantMain_icon.svg" alt="식물모아 식물아이콘">
                            <h3>필로덴드론 글로리오섬</h3>
                        </div>
                    </div>
                    <div class="card" data-category="초보자용">
                        <div class="card__header2"
                            style="background-image: url(https://huga.s3.ap-northeast-2.amazonaws.com/plantImages/16618394697261.webp);">
                        </div>
                        <div class="card__contents">
                            <img src="../html/assets/img/plantMain_icon.svg" alt="식물모아 식물아이콘">
                            <h3>피토니아 (휘토니아)</h3>
                        </div>
                    </div>
                    <div class="card" data-category="초보자용">
                        <div class="card__header2"
                            style="background-image: url(https://huga.s3.ap-northeast-2.amazonaws.com/plantImages/16615031034483.jpg);">
                        </div>
                        <div class="card__contents">
                            <img src="../html/assets/img/plantMain_icon.svg" alt="식물모아 식물아이콘">
                            <h3>소코라코 (브레이니아 니보사)</h3>
                        </div>
                    </div>
                    <div class="card" data-category="초보자용">
                        <div class="card__header2"
                            style="background-image: url(https://huga.s3.ap-northeast-2.amazonaws.com/plantImages/16614304042061%20%281%29.webp);">
                        </div>
                        <div class="card__contents">
                            <img src="../html/assets/img/plantMain_icon.svg" alt="식물모아 식물아이콘">
                            <h3>오렌지 자스민</h3>
                        </div>
                    </div>
                    <div class="card" data-category="초보자용">
                        <div class="card__header2"
                            style="background-image: url(https://huga.s3.ap-northeast-2.amazonaws.com/plantImages/16614236055081.jpg);">
                        </div>
                        <div class="card__contents">
                            <img src="../html/assets/img/plantMain_icon.svg" alt="식물모아 식물아이콘">
                            <h3>청페페</h3>
                        </div>
                    </div>
                    <div class="card" data-category="초보자용">
                        <div class="card__header2"
                            style="background-image: url(https://huga.s3.ap-northeast-2.amazonaws.com/plantImages/16614198340501.webp);">
                        </div>
                        <div class="card__contents">
                            <img src="../html/assets/img/plantMain_icon.svg" alt="식물모아 식물아이콘">
                            <h3>칼라디움</h3>
                        </div>
                    </div>
                    <div class="card" data-category="초보자용">
                        <div class="card__header2"
                            style="background-image: url(https://huga.s3.ap-northeast-2.amazonaws.com/plantImages/16613473008541.jpg);">
                        </div>
                        <div class="card__contents">
                            <img src="../html/assets/img/plantMain_icon.svg" alt="식물모아 식물아이콘">
                            <h3>카네이션</h3>
                        </div>
                    </div>
                    <div class="card" data-category="초보자용">
                        <div class="card__header2"
                            style="background-image: url(https://huga.s3.ap-northeast-2.amazonaws.com/plantImages/16613463306313.jpg);">
                        </div>
                        <div class="card__contents">
                            <img src="../html/assets/img/plantMain_icon.svg" alt="식물모아 식물아이콘">
                            <h3>유칼립투스 구니</h3>
                        </div>
                    </div>
                    <div class="card" data-category="다육/선인장">
                        <a href="../plantMoa/plantmoaView22.php">
                            <div class="card__header2"
                                style="background-image: url(https://huga.s3.ap-northeast-2.amazonaws.com/plantImages/16613458461801.webp);">
                            </div>
                            <div class="card__contents">
                                <img src="../html/assets/img/plantMain_icon.svg" alt="식물모아 식물아이콘">
                                <h3>만세 선인장</h3>
                            </div>
                        </a>
                    </div>
                    <div class="card" data-category="다육/선인장">
                        <a href="../plantMoa/plantmoaView23.php">
                            <div class="card__header2"
                                style="background-image: url(https://huga.s3.ap-northeast-2.amazonaws.com/plantImages/16613444523961.webp);">
                            </div>
                            <div class="card__contents">
                                <img src="../html/assets/img/plantMain_icon.svg" alt="식물모아 식물아이콘">
                                <h3>녹탑</h3>
                            </div>
                        </a>
                    </div>
                    <div class="card" data-category="초보자용">
                        <div class="card__header2"
                            style="background-image: url(https://huga.s3.ap-northeast-2.amazonaws.com/plantImages/16613428615941.jpg);">
                        </div>
                        <div class="card__contents">
                            <img src="../html/assets/img/plantMain_icon.svg" alt="식물모아 식물아이콘">
                            <h3>무늬 라벤더 (황금 라벤더)</h3>
                        </div>
                    </div>
                    <div class="card" data-category="반려동물 안전한">
                        <div class="card__header2"
                            style="background-image: url(https://huga.s3.ap-northeast-2.amazonaws.com/plantImages/16613392739811.jpg);">
                        </div>
                        <div class="card__contents">
                            <img src="../html/assets/img/plantMain_icon.svg" alt="식물모아 식물아이콘">
                            <h3>스위트 바질</h3>
                        </div>
                    </div>
                    <div class="card" data-category="초보자용">
                        <div class="card__header2"
                            style="background-image: url(https://huga.s3.ap-northeast-2.amazonaws.com/plantImages/16613384767681.jpg);">
                        </div>
                        <div class="card__contents">
                            <img src="../html/assets/img/plantMain_icon.svg" alt="식물모아 식물아이콘">
                            <h3>바질트리</h3>
                        </div>
                    </div>
                    <div class="card" data-category="초보자용">
                        <div class="card__header2"
                            style="background-image: url(https://huga.s3.ap-northeast-2.amazonaws.com/plantImages/16614913180811.jpg);">
                        </div>
                        <div class="card__contents">
                            <img src="../html/assets/img/plantMain_icon.svg" alt="식물모아 식물아이콘">
                            <h3>페페로미아 에덴로소</h3>
                        </div>
                    </div>
                    <div class="card" data-category="초보자용">
                        <div class="card__header2"
                            style="background-image: url(https://huga.s3.ap-northeast-2.amazonaws.com/plantImages/1661250532248240109424_993482748143308_461166286270372281_n.webp);">
                        </div>
                        <div class="card__contents">
                            <img src="../html/assets/img/plantMain_icon.svg" alt="식물모아 식물아이콘">
                            <h3>필로덴드론 파라이소 베르디</h3>
                        </div>
                    </div>
                    <div class="card" data-category="초보자용">
                        <div class="card__header2"
                            style="background-image: url(https://huga.s3.ap-northeast-2.amazonaws.com/plantImages/16612445057871.webp);">
                        </div>
                        <div class="card__contents">
                            <img src="../html/assets/img/plantMain_icon.svg" alt="식물모아 식물아이콘">
                            <h3>코르딜리네 초콜렛 퀸</h3>
                        </div>
                    </div>
                    <div class="card" data-category="초보자용">
                        <div class="card__header2"
                            style="background-image: url(https://huga.s3.ap-northeast-2.amazonaws.com/plantImages/1661170307041283903769_1395163510995389_2566184886126845746_n.webp);">
                        </div>
                        <div class="card__contents">
                            <img src="../html/assets/img/plantMain_icon.svg" alt="식물모아 식물아이콘">
                            <h3>디펜바키아 실버다이아</h3>
                        </div>
                    </div>
                    <div class="card" data-category="초보자용">
                        <div class="card__header2"
                            style="background-image: url(https://huga.s3.ap-northeast-2.amazonaws.com/plantImages/16611600519551.webp);">
                        </div>
                        <div class="card__contents">
                            <img src="../html/assets/img/plantMain_icon.svg" alt="식물모아 식물아이콘">
                            <h3>구즈마니아</h3>
                        </div>
                    </div>
                    <div class="card" data-category="초보자용">
                        <div class="card__header2"
                            style="background-image: url(https://huga.s3.ap-northeast-2.amazonaws.com/plantImages/16611586457111.webp);">
                        </div>
                        <div class="card__contents">
                            <img src="../html/assets/img/plantMain_icon.svg" alt="식물모아 식물아이콘">
                            <h3>아스파라거스 메이리</h3>
                        </div>
                    </div>
                    <div class="card" data-category="다육/선인장">
                        <a href="../plantMoa/plantmoaView24.php">
                            <div class="card__header2"
                                style="background-image: url(https://huga.s3.ap-northeast-2.amazonaws.com/plantImages/16611509631951.webp);">
                            </div>
                            <div class="card__contents">
                                <img src="../html/assets/img/plantMain_icon.svg" alt="식물모아 식물아이콘">
                                <h3>녹비단</h3>
                            </div>
                        </a>
                    </div>
                    <div class="card" data-category="반려동물 안전한">
                        <div class="card__header2"
                            style="background-image: url(https://huga.s3.ap-northeast-2.amazonaws.com/plantImages/1660910768960248566454_1120365818768589_3917802631000907011_n.webp);">
                        </div>
                        <div class="card__contents">
                            <img src="../html/assets/img/plantMain_icon.svg" alt="식물모아 식물아이콘">
                            <h3>싱고니움 매직 마블</h3>
                        </div>
                    </div>
                    <div class="card" data-category="반려동물 안전한">
                        <div class="card__header2"
                            style="background-image: url(https://huga.s3.ap-northeast-2.amazonaws.com/plantImages/16626287285771.jpg);">
                        </div>
                        <div class="card__contents">
                            <img src="../html/assets/img/plantMain_icon.svg" alt="식물모아 식물아이콘">
                            <h3>무늬 싱고니움 (싱고니움 알보 바리에가타)</h3>
                        </div>
                    </div>
                    <div class="card" data-category="반려동물 안전한">
                        <div class="card__header2"
                            style="background-image: url(https://huga.s3.ap-northeast-2.amazonaws.com/plantImages/16612577343941.webp);">
                        </div>
                        <div class="card__contents">
                            <img src="../html/assets/img/plantMain_icon.svg" alt="식물모아 식물아이콘">
                            <h3>싱고니움 핑크 쥬얼리 (스트로베리 아이스)</h3>
                        </div>
                    </div>
                    <div class="card" data-category="반려동물 안전한">
                        <div class="card__header2"
                            style="background-image: url(https://huga.s3.ap-northeast-2.amazonaws.com/plantImages/16642773661731.jpg);">
                        </div>
                        <div class="card__contents">
                            <img src="../html/assets/img/plantMain_icon.svg" alt="식물모아 식물아이콘">
                            <h3>싱고니움 핑크스팟</h3>
                        </div>
                    </div>
                    <div class="card" data-category="다육/선인장">
                        <a href="../plantMoa/plantmoaView25.php">
                            <div class="card__header2"
                                style="background-image: url(https://huga.s3.ap-northeast-2.amazonaws.com/plantImages/16607334014111.webp);">
                            </div>
                            <div class="card__contents">
                                <img src="../html/assets/img/plantMain_icon.svg" alt="식물모아 식물아이콘">
                                <h3>귀면각 선인장 (연성각)</h3>
                            </div>
                        </a>
                    </div>
                    <div class="card" data-category="다육/선인장">
                        <a href="../plantMoa/plantmoaView26.php">
                            <div class="card__header2"
                                style="background-image: url(https://huga.s3.ap-northeast-2.amazonaws.com/plantImages/16607286907181.webp);">
                            </div>
                            <div class="card__contents">
                                <img src="../html/assets/img/plantMain_icon.svg" alt="식물모아 식물아이콘">
                                <h3>녹영 (콩란)</h3>
                            </div>
                        </a>
                    </div>
                    <div class="card" data-category="초보자용">
                        <div class="card__header2"
                            style="background-image: url(https://huga.s3.ap-northeast-2.amazonaws.com/plantImages/16607259575981.webp);">
                        </div>
                        <div class="card__contents">
                            <img src="../html/assets/img/plantMain_icon.svg" alt="식물모아 식물아이콘">
                            <h3>안스리움 애로우</h3>
                        </div>
                    </div>
                    <div class="card" data-category="초보자용">
                        <div class="card__header2"
                            style="background-image: url(https://huga.s3.ap-northeast-2.amazonaws.com/plantImages/16607197344481.jpg);">
                        </div>
                        <div class="card__contents">
                            <img src="../html/assets/img/plantMain_icon.svg" alt="식물모아 식물아이콘">
                            <h3>칼라디움 힐로뷰티 (뷰티히로)</h3>
                        </div>
                    </div>
                    <div class="card" data-category="반려동물 안전한">
                        <div class="card__header2"
                            style="background-image: url(https://huga.s3.ap-northeast-2.amazonaws.com/plantImages/1660713873311279620376_159256706566691_1863757321957442975_n%20%281%29.webp);">
                        </div>
                        <div class="card__contents">
                            <img src="../html/assets/img/plantMain_icon.svg" alt="식물모아 식물아이콘">
                            <h3>싱고니움 웬들란디 (벨벳 싱고니움)</h3>
                        </div>
                    </div>
                    <div class="card" data-category="초보자용">
                        <div class="card__header2"
                            style="background-image: url(https://huga.s3.ap-northeast-2.amazonaws.com/plantImages/16606475482201.jpg);">
                        </div>
                        <div class="card__contents">
                            <img src="../html/assets/img/plantMain_icon.svg" alt="식물모아 식물아이콘">
                            <h3>싱고니움 레드스팟</h3>
                        </div>
                    </div>
                    <div class="card" data-category="반려동물 안전한">
                        <div class="card__header2"
                            style="background-image: url(https://huga.s3.ap-northeast-2.amazonaws.com/plantImages/1659004033315251222046_171808241816383_8323937322833953965_n.jpg);">
                        </div>
                        <div class="card__contents">
                            <img src="../html/assets/img/plantMain_icon.svg" alt="식물모아 식물아이콘">
                            <h3>싱고니움 글로고</h3>
                        </div>
                    </div>
                    <div class="card" data-category="다육 선인장">
                        <div class="card__header2"
                            style="background-image: url(https://huga.s3.ap-northeast-2.amazonaws.com/plantImages/16589883591131.jpg);">
                        </div>
                        <div class="card__contents">
                            <img src="../html/assets/img/plantMain_icon.svg" alt="식물모아 식물아이콘">
                            <h3>핑크 은행목 (핑크 아악무)</h3>
                        </div>
                    </div>
                    <div class="card" data-category="다육/선인장">
                        <div class="card__header2"
                            style="background-image: url(https://huga.s3.ap-northeast-2.amazonaws.com/plantImages/16589155784795.jpg);">
                        </div>
                        <div class="card__contents">
                            <img src="../html/assets/img/plantMain_icon.svg" alt="식물모아 식물아이콘">
                            <h3>괴마옥 (파인애플 선인장)</h3>
                        </div>
                    </div>
                    <div class="card" data-category="초보자용">
                        <div class="card__header2"
                            style="background-image: url(https://huga.s3.ap-northeast-2.amazonaws.com/plantImages/16588414295811.jpg);">
                        </div>
                        <div class="card__contents">
                            <img src="../html/assets/img/plantMain_icon.svg" alt="식물모아 식물아이콘">
                            <h3>천리향 (서향 나무)</h3>
                        </div>
                    </div>
                    <div class="card" data-category="초보자용">
                        <div class="card__header2"
                            style="background-image: url(https://huga.s3.ap-northeast-2.amazonaws.com/plantImages/16587541120841.jpg);">
                        </div>
                        <div class="card__contents">
                            <img src="../html/assets/img/plantMain_icon.svg" alt="식물모아 식물아이콘">
                            <h3>수국</h3>
                        </div>
                    </div>
                    <div class="card" data-category="초보자용">
                        <div class="card__header2"
                            style="background-image: url(https://huga.s3.ap-northeast-2.amazonaws.com/plantImages/16587374965001.jpg);">
                        </div>
                        <div class="card__contents">
                            <img src="../html/assets/img/plantMain_icon.svg" alt="식물모아 식물아이콘">
                            <h3>휘커스 움베르타 (움벨라타 고무나무)</h3>
                        </div>
                    </div>
                    <div class="card" data-category="초보자용">
                        <div class="card__header2"
                            style="background-image: url(https://huga.s3.ap-northeast-2.amazonaws.com/plantImages/16584741755341.jpg);">
                        </div>
                        <div class="card__contents">
                            <img src="../html/assets/img/plantMain_icon.svg" alt="식물모아 식물아이콘">
                            <h3>무늬 페페</h3>
                        </div>
                    </div>
                    <div class="card" data-category="다육/선인장">
                        <div class="card__header2"
                            style="background-image: url(https://huga.s3.ap-northeast-2.amazonaws.com/plantImages/16584011927651.jpg);">
                        </div>
                        <div class="card__contents">
                            <img src="../html/assets/img/plantMain_icon.svg" alt="식물모아 식물아이콘">
                            <h3>파키포디움 호롬벤세</h3>
                        </div>
                    </div>
                    <div class="card" data-category="초보자용">
                        <div class="card__header2"
                            style="background-image: url(https://huga.s3.ap-northeast-2.amazonaws.com/plantImages/16583932433881.jpg);">
                        </div>
                        <div class="card__contents">
                            <img src="../html/assets/img/plantMain_icon.svg" alt="식물모아 식물아이콘">
                            <h3>루비 고무나무</h3>
                        </div>
                    </div>
                    <div class="card" data-category="초보자용">
                        <div class="card__header2"
                            style="background-image: url(https://huga.s3.ap-northeast-2.amazonaws.com/plantImages/16583882685611.jpg);">
                        </div>
                        <div class="card__contents">
                            <img src="../html/assets/img/plantMain_icon.svg" alt="식물모아 식물아이콘">
                            <h3>필로덴드론 플로리다 뷰티</h3>
                        </div>
                    </div>
                    <div class="card" data-category="초보자용">
                        <div class="card__header2"
                            style="background-image: url(https://huga.s3.ap-northeast-2.amazonaws.com/plantImages/16583872614261.jpg);">
                        </div>
                        <div class="card__contents">
                            <img src="../html/assets/img/plantMain_icon.svg" alt="식물모아 식물아이콘">
                            <h3>필로덴드론 플로리다 그린</h3>
                        </div>
                    </div>
                    <div class="card" data-category="다육/선인장">
                        <div class="card__header2"
                            style="background-image: url(https://huga.s3.ap-northeast-2.amazonaws.com/plantImages/16583842859321.jpg);">
                        </div>
                        <div class="card__contents">
                            <img src="../html/assets/img/plantMain_icon.svg" alt="식물모아 식물아이콘">
                            <h3>화이트 고스트</h3>
                        </div>
                    </div>
                    <div class="card" data-category="초보자용">
                        <div class="card__header2"
                            style="background-image: url(https://huga.s3.ap-northeast-2.amazonaws.com/plantImages/16583148489411.jpg);">
                        </div>
                        <div class="card__contents">
                            <img src="../html/assets/img/plantMain_icon.svg" alt="식물모아 식물아이콘">
                            <h3>안스리움</h3>
                        </div>
                    </div>
                    <div class="card" data-category="초보자용">
                        <div class="card__header2"
                            style="background-image: url(https://huga.s3.ap-northeast-2.amazonaws.com/plantImages/16583032470521.jpg);">
                        </div>
                        <div class="card__contents">
                            <img src="../html/assets/img/plantMain_icon.svg" alt="식물모아 식물아이콘">
                            <h3>벤자민 고무나무</h3>
                        </div>
                    </div>
                    <div class="card" data-category="초보자용">
                        <div class="card__header2"
                            style="background-image: url(https://huga.s3.ap-northeast-2.amazonaws.com/plantImages/16582372667021.jpg);">
                        </div>
                        <div class="card__contents">
                            <img src="../html/assets/img/plantMain_icon.svg" alt="식물모아 식물아이콘">
                            <h3>크테난테 루베르시아나</h3>
                        </div>
                    </div>
                    <div class="card" data-category="초보자용">
                        <div class="card__header2"
                            style="background-image: url(https://huga.s3.ap-northeast-2.amazonaws.com/plantImages/16582349251081.jpg);">
                        </div>
                        <div class="card__contents">
                            <img src="../html/assets/img/plantMain_icon.svg" alt="식물모아 식물아이콘">
                            <h3>칼라데아 인시그니스</h3>
                        </div>
                    </div>
                    <div class="card" data-category="초보자용">
                        <div class="card__header2"
                            style="background-image: url(https://huga.s3.ap-northeast-2.amazonaws.com/plantImages/16626194810131.jpg);">
                        </div>
                        <div class="card__contents">
                            <img src="../html/assets/img/plantMain_icon.svg" alt="식물모아 식물아이콘">
                            <h3>필로덴드론 실버 스워드</h3>
                        </div>
                    </div>
                    <div class="card" data-category="초보자용">
                        <div class="card__header2"
                            style="background-image: url(https://huga.s3.ap-northeast-2.amazonaws.com/plantImages/16642771815801.jpg);">
                        </div>
                        <div class="card__contents">
                            <img src="../html/assets/img/plantMain_icon.svg" alt="식물모아 식물아이콘">
                            <h3>옥천 앵두 (예루살렘 체리)</h3>
                        </div>
                    </div>
                    <div class="card" data-category="초보자용">
                        <div class="card__header2"
                            style="background-image: url(https://huga.s3.ap-northeast-2.amazonaws.com/plantImages/16582165342371.jpg);">
                        </div>
                        <div class="card__contents">
                            <img src="../html/assets/img/plantMain_icon.svg" alt="식물모아 식물아이콘">
                            <h3>골드 셀렘 (필로덴드론 바르세비치 아우레아)</h3>
                        </div>
                    </div>
                    <div class="card" data-category="초보자용">
                        <div class="card__header2"
                            style="background-image: url(https://huga.s3.ap-northeast-2.amazonaws.com/plantImages/16626310947431.jpg);">
                        </div>
                        <div class="card__contents">
                            <img src="../html/assets/img/plantMain_icon.svg" alt="식물모아 식물아이콘">
                            <h3>무늬 홍콩야자</h3>
                        </div>
                    </div>
                    <div class="card" data-category="반려동물 안전한">
                        <div class="card__header2"
                            style="background-image: url(https://huga.s3.ap-northeast-2.amazonaws.com/plantImages/16581426566831.jpg);">
                        </div>
                        <div class="card__contents">
                            <img src="../html/assets/img/plantMain_icon.svg" alt="식물모아 식물아이콘">
                            <h3>황칠나무</h3>
                        </div>
                    </div>
                    <div class="card" data-category="초보자용">
                        <div class="card__header2"
                            style="background-image: url(https://huga.s3.ap-northeast-2.amazonaws.com/plantImages/16581368415291.jpg);">
                        </div>
                        <div class="card__contents">
                            <img src="../html/assets/img/plantMain_icon.svg" alt="식물모아 식물아이콘">
                            <h3>틸란드시아 이오난사</h3>
                        </div>
                    </div>
                    <div class="card" data-category="반려동물 안전한">
                        <div class="card__header2"
                            style="background-image: url(https://huga.s3.ap-northeast-2.amazonaws.com/plantImages/16581333356292.jpg);">
                        </div>
                        <div class="card__contents">
                            <img src="../html/assets/img/plantMain_icon.svg" alt="식물모아 식물아이콘">
                            <h3>크로톤</h3>
                        </div>
                    </div>
                    <div class="card" data-category="초보자용">
                        <div class="card__header2"
                            style="background-image: url(https://huga.s3.ap-northeast-2.amazonaws.com/plantImages/16581206079071.jpg);">
                        </div>
                        <div class="card__contents">
                            <img src="../html/assets/img/plantMain_icon.svg" alt="식물모아 식물아이콘">
                            <h3>벵갈 고무나무</h3>
                        </div>
                    </div>
                    <div class="card" data-category="반려동물 안전한">
                        <div class="card__header2"
                            style="background-image: url(https://huga.s3.ap-northeast-2.amazonaws.com/plantImages/16581186418581.jpg);">
                        </div>
                        <div class="card__contents">
                            <img src="../html/assets/img/plantMain_icon.svg" alt="식물모아 식물아이콘">
                            <h3>켄차 야자</h3>
                        </div>
                    </div>
                    <div class="card" data-category="초보자용">
                        <div class="card__header2"
                            style="background-image: url(https://huga.s3.ap-northeast-2.amazonaws.com/plantImages/16578852900841.jpg);">
                        </div>
                        <div class="card__contents">
                            <img src="../html/assets/img/plantMain_icon.svg" alt="식물모아 식물아이콘">
                            <h3>호프 셀렘 (필로덴드론 바이피나티피덤)</h3>
                        </div>
                    </div>
                    <div class="card" data-category="초보자용">
                        <div class="card__header2"
                            style="background-image: url(https://huga.s3.ap-northeast-2.amazonaws.com/plantImages/16578815415471.jpg);">
                        </div>
                        <div class="card__contents">
                            <img src="../html/assets/img/plantMain_icon.svg" alt="식물모아 식물아이콘">
                            <h3>필로덴드론 멜라노크리섬</h3>
                        </div>
                    </div>
                    <div class="card" data-category="초보자용">
                        <div class="card__header2"
                            style="background-image: url(https://huga.s3.ap-northeast-2.amazonaws.com/plantImages/16578778410801.jpg);">
                        </div>
                        <div class="card__contents">
                            <img src="../html/assets/img/plantMain_icon.svg" alt="식물모아 식물아이콘">
                            <h3>필로덴드론 플로리다 고스트</h3>
                        </div>
                    </div>
                    <div class="card" data-category="초보자용">
                        <div class="card__header2"
                            style="background-image: url(https://huga.s3.ap-northeast-2.amazonaws.com/plantImages/16578742528021.jpg);">
                        </div>
                        <div class="card__contents">
                            <img src="../html/assets/img/plantMain_icon.svg" alt="식물모아 식물아이콘">
                            <h3>필로덴드론 화이트 프린세스</h3>
                        </div>
                    </div>
                    <div class="card" data-category="초보자용">
                        <div class="card__header2"
                            style="background-image: url(https://huga.s3.ap-northeast-2.amazonaws.com/plantImages/16578668561091.jpg);">
                        </div>
                        <div class="card__contents">
                            <img src="../html/assets/img/plantMain_icon.svg" alt="식물모아 식물아이콘">
                            <h3>칼라데아 오르비폴리아</h3>
                        </div>
                    </div>
                    <div class="card" data-category="초보자용">
                        <div class="card__header2"
                            style="background-image: url(https://huga.s3.ap-northeast-2.amazonaws.com/plantImages/1657864931148293477495_778521616501072_860287767594825843_n.jpg);">
                        </div>
                        <div class="card__contents">
                            <img src="../html/assets/img/plantMain_icon.svg" alt="식물모아 식물아이콘">
                            <h3>캄피오 아비스 (아스플레니움 니두스 캄피오)</h3>
                        </div>
                    </div>
                    <div class="card" data-category="초보자용">
                        <div class="card__header2"
                            style="background-image: url(https://huga.s3.ap-northeast-2.amazonaws.com/plantImages/16578634475461.jpg);">
                        </div>
                        <div class="card__contents">
                            <img src="../html/assets/img/plantMain_icon.svg" alt="식물모아 식물아이콘">
                            <h3>렉스 베고니아</h3>
                        </div>
                    </div>
                    <div class="card" data-category="반려동물 안전한">
                        <div class="card__header2"
                            style="background-image: url(https://huga.s3.ap-northeast-2.amazonaws.com/plantImages/16578613013451.jpg);">
                        </div>
                        <div class="card__contents">
                            <img src="../html/assets/img/plantMain_icon.svg" alt="식물모아 식물아이콘">
                            <h3>그린 마란타 (마란타 커초비아나)</h3>
                        </div>
                    </div>
                    <div class="card" data-category="초보자용">
                        <div class="card__header2"
                            style="background-image: url(https://huga.s3.ap-northeast-2.amazonaws.com/plantImages/16578598825371.jpg);">
                        </div>
                        <div class="card__contents">
                            <img src="../html/assets/img/plantMain_icon.svg" alt="식물모아 식물아이콘">
                            <h3>마란타 류코뉴라</h3>
                        </div>
                    </div>
                    <div class="card" data-category="초보자용">
                        <div class="card__header2"
                            style="background-image: url(https://huga.s3.ap-northeast-2.amazonaws.com/plantImages/16578033102311.jpg);">
                        </div>
                        <div class="card__contents">
                            <img src="../html/assets/img/plantMain_icon.svg" alt="식물모아 식물아이콘">
                            <h3>필로덴드론 핑크 프린세스</h3>
                        </div>
                    </div>
                    <div class="card" data-category="초보자용">
                        <div class="card__header2"
                            style="background-image: url(https://huga.s3.ap-northeast-2.amazonaws.com/plantImages/16578015211911.jpg);">
                        </div>
                        <div class="card__contents">
                            <img src="../html/assets/img/plantMain_icon.svg" alt="식물모아 식물아이콘">
                            <h3>필로덴드론 핑크 콩고 (핑크 콩고)</h3>
                        </div>
                    </div>
                    <div class="card" data-category="초보자용">
                        <div class="card__header2"
                            style="background-image: url(https://huga.s3.ap-northeast-2.amazonaws.com/plantImages/16578532939461.jpg);">
                        </div>
                        <div class="card__contents">
                            <img src="../html/assets/img/plantMain_icon.svg" alt="식물모아 식물아이콘">
                            <h3>칼라데아 스트로만데 (스트로만테 멀티컬러)</h3>
                        </div>
                    </div>
                    <div class="card" data-category="초보자용">
                        <div class="card__header2"
                            style="background-image: url(https://huga.s3.ap-northeast-2.amazonaws.com/plantImages/16577893621561.jpg);">
                        </div>
                        <div class="card__contents">
                            <img src="../html/assets/img/plantMain_icon.svg" alt="식물모아 식물아이콘">
                            <h3>칼라데아 퓨전화이트</h3>
                        </div>
                    </div>
                    <div class="card" data-category="초보자용">
                        <div class="card__header2"
                            style="background-image: url(https://huga.s3.ap-northeast-2.amazonaws.com/plantImages/16577112490281.jpg);">
                        </div>
                        <div class="card__contents">
                            <img src="../html/assets/img/plantMain_icon.svg" alt="식물모아 식물아이콘">
                            <h3>알리 고무나무</h3>
                        </div>
                    </div>
                    <div class="card" data-category="초보자용">
                        <div class="card__header2"
                            style="background-image: url(https://huga.s3.ap-northeast-2.amazonaws.com/plantImages/16577093773841.jpg);">
                        </div>
                        <div class="card__contents">
                            <img src="../html/assets/img/plantMain_icon.svg" alt="식물모아 식물아이콘">
                            <h3>미모사</h3>
                        </div>
                    </div>
                    <div class="card" data-category="반려동물 안전한">
                        <div class="card__header2"
                            style="background-image: url(https://huga.s3.ap-northeast-2.amazonaws.com/plantImages/16577022377041.jpg);">
                        </div>
                        <div class="card__contents">
                            <img src="../html/assets/img/plantMain_icon.svg" alt="식물모아 식물아이콘">
                            <h3>개운죽</h3>
                        </div>
                    </div>
                    <div class="card" data-category="반려동물 안전한">
                        <div class="card__header2"
                            style="background-image: url(https://huga.s3.ap-northeast-2.amazonaws.com/plantImages/16576939842101.jpg);">
                        </div>
                        <div class="card__contents">
                            <img src="../html/assets/img/plantMain_icon.svg" alt="식물모아 식물아이콘">
                            <h3>남천</h3>
                        </div>
                    </div>
                    <div class="card" data-category="다육/선인장">
                        <div class="card__header2"
                            style="background-image: url(https://huga.s3.ap-northeast-2.amazonaws.com/plantImages/16576830538731.jpg);">
                        </div>
                        <div class="card__contents">
                            <img src="../html/assets/img/plantMain_icon.svg" alt="식물모아 식물아이콘">
                            <h3>장미허브</h3>
                        </div>
                    </div>
                    <div class="card" data-category="다육/선인장">
                        <div class="card__header2"
                            style="background-image: url(https://huga.s3.ap-northeast-2.amazonaws.com/plantImages/16576214006871.jpg);">
                        </div>
                        <div class="card__contents">
                            <img src="../html/assets/img/plantMain_icon.svg" alt="식물모아 식물아이콘">
                            <h3>산세베리아</h3>
                        </div>
                    </div>
                    <div class="card" data-category="반려동물 안전한">
                        <div class="card__header2"
                            style="background-image: url(https://huga.s3.ap-northeast-2.amazonaws.com/plantImages/16576186333491.jpg);">
                        </div>
                        <div class="card__contents">
                            <img src="../html/assets/img/plantMain_icon.svg" alt="식물모아 식물아이콘">
                            <h3>박쥐란</h3>
                        </div>
                    </div>
                    <div class="card" data-category="초보자용">
                        <div class="card__header2"
                            style="background-image: url(https://huga.s3.ap-northeast-2.amazonaws.com/plantImages/16576093455991.jpg);">
                        </div>
                        <div class="card__contents">
                            <img src="../html/assets/img/plantMain_icon.svg" alt="식물모아 식물아이콘">
                            <h3>알로카시아 오도라</h3>
                        </div>
                    </div>
                    <div class="card" data-category="초보자용">
                        <div class="card__header2"
                            style="background-image: url(https://huga.s3.ap-northeast-2.amazonaws.com/plantImages/16576011119021.jpg);">
                        </div>
                        <div class="card__contents">
                            <img src="../html/assets/img/plantMain_icon.svg" alt="식물모아 식물아이콘">
                            <h3>필로덴드론 셀로움</h3>
                        </div>
                    </div>
                    <div class="card" data-category="반려동물 안전한">
                        <div class="card__header2"
                            style="background-image: url(https://huga.s3.ap-northeast-2.amazonaws.com/plantImages/16575392076981.jpg);">
                        </div>
                        <div class="card__contents">
                            <img src="../html/assets/img/plantMain_icon.svg" alt="식물모아 식물아이콘">
                            <h3>유칼립투스 폴리안</h3>
                        </div>
                    </div>
                    <div class="card" data-category="반려동물 안전한">
                        <div class="card__header2"
                            style="background-image: url(https://huga.s3.ap-northeast-2.amazonaws.com/plantImages/16575319170061.jpg);">
                        </div>
                        <div class="card__contents">
                            <img src="../html/assets/img/plantMain_icon.svg" alt="식물모아 식물아이콘">
                            <h3>수박 페페로미아</h3>
                        </div>
                    </div>
                    <div class="card" data-category="초보자용">
                        <div class="card__header2"
                            style="background-image: url(https://huga.s3.ap-northeast-2.amazonaws.com/plantImages/16575226926251.jpg);">
                        </div>
                        <div class="card__contents">
                            <img src="../html/assets/img/plantMain_icon.svg" alt="식물모아 식물아이콘">
                            <h3>알로카시아 프라이덱</h3>
                        </div>
                    </div>
                    <div class="card" data-category="초보자용">
                        <div class="card__header2"
                            style="background-image: url(https://huga.s3.ap-northeast-2.amazonaws.com/plantImages/16575175366941.jpg);">
                        </div>
                        <div class="card__contents">
                            <img src="../html/assets/img/plantMain_icon.svg" alt="식물모아 식물아이콘">
                            <h3>필로덴드론 버킨 (무늬 콩고)</h3>
                        </div>
                    </div>
                    <div class="card" data-category="초보자용">
                        <div class="card__header2"
                            style="background-image: url(https://huga.s3.ap-northeast-2.amazonaws.com/plantImages/16572773318795.jpg);">
                        </div>
                        <div class="card__contents">
                            <img src="../html/assets/img/plantMain_icon.svg" alt="식물모아 식물아이콘">
                            <h3>알보 몬스테라 (몬스테라 알보 바리에가타)</h3>
                        </div>
                    </div>
                    <div class="card" data-category="초보자용">
                        <div class="card__header2"
                            style="background-image: url(https://huga.s3.ap-northeast-2.amazonaws.com/plantImages/16571933693961.jpg);">
                        </div>
                        <div class="card__contents">
                            <img src="../html/assets/img/plantMain_icon.svg" alt="식물모아 식물아이콘">
                            <h3>드라세나 맛상게아나 (행운목)</h3>
                        </div>
                    </div>
                    <div class="card" data-category="반려동물 안전한">
                        <div class="card__header2"
                            style="background-image: url(https://huga.s3.ap-northeast-2.amazonaws.com/plantImages/16571895453071.jpg);">
                        </div>
                        <div class="card__contents">
                            <img src="../html/assets/img/plantMain_icon.svg" alt="식물모아 식물아이콘">
                            <h3>해피트리</h3>
                        </div>
                    </div>
                    <div class="card" data-category="초보자용">
                        <div class="card__header2"
                            style="background-image: url(https://huga.s3.ap-northeast-2.amazonaws.com/plantImages/16571814681171.jpg);">
                        </div>
                        <div class="card__contents">
                            <img src="../html/assets/img/plantMain_icon.svg" alt="식물모아 식물아이콘">
                            <h3>아레카 야자</h3>
                        </div>
                    </div>
                    <div class="card" data-category="반려동물 안전한">
                        <div class="card__header2"
                            style="background-image: url(https://huga.s3.ap-northeast-2.amazonaws.com/plantImages/16571618369301.jpg);">
                        </div>
                        <div class="card__contents">
                            <img src="../html/assets/img/plantMain_icon.svg" alt="식물모아 식물아이콘">
                            <h3>여인초</h3>
                        </div>
                    </div>
                    <div class="card" data-category="초보자용">
                        <div class="card__header2"
                            style="background-image: url(https://huga.s3.ap-northeast-2.amazonaws.com/plantImages/16570206835391.jpg);">
                        </div>
                        <div class="card__contents">
                            <img src="../html/assets/img/plantMain_icon.svg" alt="식물모아 식물아이콘">
                            <h3>머틀 허브나무</h3>
                        </div>
                    </div>
                    <div class="card" data-category="초보자용">
                        <div class="card__header2"
                            style="background-image: url(https://huga.s3.ap-northeast-2.amazonaws.com/plantImages/16569208787741.jpg);">
                        </div>
                        <div class="card__contents">
                            <img src="../html/assets/img/plantMain_icon.svg" alt="식물모아 식물아이콘">
                            <h3>관음죽</h3>
                        </div>
                    </div>
                    <div class="card" data-category="초보자용">
                        <div class="card__header2"
                            style="background-image: url(https://huga.s3.ap-northeast-2.amazonaws.com/plantImages/16566803322751.jpg);">
                        </div>
                        <div class="card__contents">
                            <img src="../html/assets/img/plantMain_icon.svg" alt="식물모아 식물아이콘">
                            <h3>호야 카르노사 (무늬 호야)</h3>
                        </div>
                    </div>
                    <div class="card" data-category="반려동물 안전한">
                        <div class="card__header2"
                            style="background-image: url(https://huga.s3.ap-northeast-2.amazonaws.com/plantImages/1657534573911111.jpg);">
                        </div>
                        <div class="card__contents">
                            <img src="../html/assets/img/plantMain_icon.svg" alt="식물모아 식물아이콘">
                            <h3>파키라</h3>
                        </div>
                    </div>
                    <div class="card" data-category="반려동물 안전한">
                        <div class="card__header2"
                            style="background-image: url(https://huga.s3.ap-northeast-2.amazonaws.com/plantImages/16558864259591.jpg);">
                        </div>
                        <div class="card__contents">
                            <img src="../html/assets/img/plantMain_icon.svg" alt="식물모아 식물아이콘">
                            <h3>로즈마리</h3>
                        </div>
                    </div>
                    <div class="card" data-category="다육/선인장">
                        <div class="card__header2"
                            style="background-image: url(https://huga.s3.ap-northeast-2.amazonaws.com/plantImages/16558794016261.jpg);">
                        </div>
                        <div class="card__contents">
                            <img src="../html/assets/img/plantMain_icon.svg" alt="식물모아 식물아이콘">
                            <h3>아데니움 (석화)</h3>
                        </div>
                    </div>
                    <div class="card" data-category="초보자용">
                        <div class="card__header2"
                            style="background-image: url(https://huga.s3.ap-northeast-2.amazonaws.com/plantImages/16558791487471.jpg);">
                        </div>
                        <div class="card__contents">
                            <img src="../html/assets/img/plantMain_icon.svg" alt="식물모아 식물아이콘">
                            <h3>히메 몬스테라 (미니 몬스테라)</h3>
                        </div>
                    </div>
                    <div class="card" data-category="반려동물 안전한">
                        <div class="card__header2"
                            style="background-image: url(https://huga.s3.ap-northeast-2.amazonaws.com/plantImages/16558788076611.jpg);">
                        </div>
                        <div class="card__contents">
                            <img src="../html/assets/img/plantMain_icon.svg" alt="식물모아 식물아이콘">
                            <h3>홍콩야자 (쉐프렐라 홍콩)</h3>
                        </div>
                    </div>
                    <div class="card" data-category="초보자용">
                        <div class="card__header2"
                            style="background-image: url(https://huga.s3.ap-northeast-2.amazonaws.com/plantImages/16558785701661.jpg);">
                        </div>
                        <div class="card__contents">
                            <img src="../html/assets/img/plantMain_icon.svg" alt="식물모아 식물아이콘">
                            <h3>홍공작 (무늬 백량금)</h3>
                        </div>
                    </div>
                    <div class="card" data-category="초보자용">
                        <div class="card__header2"
                            style="background-image: url(https://huga.s3.ap-northeast-2.amazonaws.com/plantImages/16558779648691.jpg);">
                        </div>
                        <div class="card__contents">
                            <img src="../html/assets/img/plantMain_icon.svg" alt="식물모아 식물아이콘">
                            <h3>필레아 페페로미오데스</h3>
                        </div>
                    </div>
                    <div class="card" data-category="반려동물 안전한">
                        <div class="card__header2"
                            style="background-image: url(https://huga.s3.ap-northeast-2.amazonaws.com/plantImages/16577865762001.jpg);">
                        </div>
                        <div class="card__contents">
                            <img src="../html/assets/img/plantMain_icon.svg" alt="식물모아 식물아이콘">
                            <h3>프테리스 고사리</h3>
                        </div>
                    </div>
                    <div class="card" data-category="반려동물 안전한">
                        <div class="card__header2"
                            style="background-image: url(https://huga.s3.ap-northeast-2.amazonaws.com/plantImages/16558765860501.jpg);">
                        </div>
                        <div class="card__contents">
                            <img src="../html/assets/img/plantMain_icon.svg" alt="식물모아 식물아이콘">
                            <h3>테이블야자</h3>
                        </div>
                    </div>
                    <div class="card" data-category="초보자용">
                        <div class="card__header2"
                            style="background-image: url(https://huga.s3.ap-northeast-2.amazonaws.com/plantImages/16558759184851.jpg);">
                        </div>
                        <div class="card__contents">
                            <img src="../html/assets/img/plantMain_icon.svg" alt="식물모아 식물아이콘">
                            <h3>칼라데아 프레디 (칼라데아 콘친나)</h3>
                        </div>
                    </div>
                    <div class="card" data-category="초보자용">
                        <div class="card__header2"
                            style="background-image: url(https://huga.s3.ap-northeast-2.amazonaws.com/plantImages/16558755529471.jpg);">
                        </div>
                        <div class="card__contents">
                            <img src="../html/assets/img/plantMain_icon.svg" alt="식물모아 식물아이콘">
                            <h3>칼라데아 진저 (칼라데아 오나타)</h3>
                        </div>
                    </div>
                    <div class="card" data-category="초보자용">
                        <div class="card__header2"
                            style="background-image: url(https://huga.s3.ap-northeast-2.amazonaws.com/plantImages/16558747675201.jpg);">
                        </div>
                        <div class="card__contents">
                            <img src="../html/assets/img/plantMain_icon.svg" alt="식물모아 식물아이콘">
                            <h3>칼라데아 아마그리스 (크테난테 아마그리스)</h3>
                        </div>
                    </div>
                    <div class="card" data-category="다육/선인장">
                        <div class="card__header2"
                            style="background-image: url(https://huga.s3.ap-northeast-2.amazonaws.com/plantImages/16558734435411.jpg);">
                        </div>
                        <div class="card__contents">
                            <img src="../html/assets/img/plantMain_icon.svg" alt="식물모아 식물아이콘">
                            <h3>청산호 (연필 선인장)</h3>
                        </div>
                    </div>
                    <div class="card" data-category="반려동물 안전한">
                        <div class="card__header2"
                            style="background-image: url(https://huga.s3.ap-northeast-2.amazonaws.com/plantImages/16558729797901.jpg);">
                        </div>
                        <div class="card__contents">
                            <img src="../html/assets/img/plantMain_icon.svg" alt="식물모아 식물아이콘">
                            <h3>율마 (윌마)</h3>
                        </div>
                    </div>
                    <div class="card" data-category="반려동물 안전한">
                        <div class="card__header2"
                            style="background-image: url(https://huga.s3.ap-northeast-2.amazonaws.com/plantImages/16558726074381.jpg);">
                        </div>
                        <div class="card__contents">
                            <img src="../html/assets/img/plantMain_icon.svg" alt="식물모아 식물아이콘">
                            <h3>올리브 나무</h3>
                        </div>
                    </div>
                    <div class="card" data-category="초보자용">
                        <div class="card__header2"
                            style="background-image: url(https://huga.s3.ap-northeast-2.amazonaws.com/plantImages/16558722552341.jpg);">
                        </div>
                        <div class="card__contents">
                            <img src="../html/assets/img/plantMain_icon.svg" alt="식물모아 식물아이콘">
                            <h3>오색 마삭줄 (초설 마삭줄)</h3>
                        </div>
                    </div>
                    <div class="card" data-category="초보자용">
                        <div class="card__header2"
                            style="background-image: url(https://huga.s3.ap-northeast-2.amazonaws.com/plantImages/16558693813941.jpg);">
                        </div>
                        <div class="card__contents">
                            <img src="../html/assets/img/plantMain_icon.svg" alt="식물모아 식물아이콘">
                            <h3>아이비 (헤데라)</h3>
                        </div>
                    </div>
                    <div class="card" data-category="초보자용">
                        <div class="card__header2"
                            style="background-image: url(https://huga.s3.ap-northeast-2.amazonaws.com/plantImages/16558691009431.jpg);">
                        </div>
                        <div class="card__contents">
                            <img src="../html/assets/img/plantMain_icon.svg" alt="식물모아 식물아이콘">
                            <h3>아스파라거스 나누스</h3>
                        </div>
                    </div>
                    <div class="card" data-category="반려동물 안전한">
                        <div class="card__header2"
                            style="background-image: url(https://huga.s3.ap-northeast-2.amazonaws.com/plantImages/16558676279931.jpg);">
                        </div>
                        <div class="card__contents">
                            <img src="../html/assets/img/plantMain_icon.svg" alt="식물모아 식물아이콘">
                            <h3>아비스</h3>
                        </div>
                    </div>
                    <div class="card" data-category="초보자용">
                        <div class="card__header2"
                            style="background-image: url(https://huga.s3.ap-northeast-2.amazonaws.com/plantImages/16558672135631.jpg);">
                        </div>
                        <div class="card__contents">
                            <img src="../html/assets/img/plantMain_icon.svg" alt="식물모아 식물아이콘">
                            <h3>아라우카리아</h3>
                        </div>
                    </div>
                    <div class="card" data-category="반려동물 안전한">
                        <div class="card__header2"
                            style="background-image: url(https://huga.s3.ap-northeast-2.amazonaws.com/plantImages/16558172175451.jpg);">
                        </div>
                        <div class="card__contents">
                            <img src="../html/assets/img/plantMain_icon.svg" alt="식물모아 식물아이콘">
                            <h3>스파티필름</h3>
                        </div>
                    </div>
                    <div class="card" data-category="반려동물 안전한">
                        <div class="card__header2"
                            style="background-image: url(https://huga.s3.ap-northeast-2.amazonaws.com/plantImages/16578749906331.jpg);">
                        </div>
                        <div class="card__contents">
                            <img src="../html/assets/img/plantMain_icon.svg" alt="식물모아 식물아이콘">
                            <h3>핑크 싱고니움 (네온 싱고니움)</h3>
                        </div>
                    </div>
                    <div class="card" data-category="반려동물 안전한">
                        <div class="card__header2"
                            style="background-image: url(https://huga.s3.ap-northeast-2.amazonaws.com/plantImages/16558167034572.jpg);">
                        </div>
                        <div class="card__contents">
                            <img src="../html/assets/img/plantMain_icon.svg" alt="식물모아 식물아이콘">
                            <h3>싱고니움</h3>
                        </div>
                    </div>
                    <div class="card" data-category="초보자용">
                        <div class="card__header2"
                            style="background-image: url(https://huga.s3.ap-northeast-2.amazonaws.com/plantImages/16558163317161.jpg);">
                        </div>
                        <div class="card__contents">
                            <img src="../html/assets/img/plantMain_icon.svg" alt="식물모아 식물아이콘">
                            <h3>스프링 골풀 (스프링 준쿠스)</h3>
                        </div>
                    </div>
                    <div class="card" data-category="다육/선인장">
                        <div class="card__header2"
                            style="background-image: url(https://huga.s3.ap-northeast-2.amazonaws.com/plantImages/1662619339309275685073_451859856695918_7461780793129810940_n.jpg);">
                        </div>
                        <div class="card__contents">
                            <img src="../html/assets/img/plantMain_icon.svg" alt="식물모아 식물아이콘">
                            <h3>스투키</h3>
                        </div>
                    </div>
                    <div class="card" data-category="초보자용">
                        <div class="card__header2"
                            style="background-image: url(https://huga.s3.ap-northeast-2.amazonaws.com/plantImages/16558155726801.jpg);">
                        </div>
                        <div class="card__contents">
                            <img src="../html/assets/img/plantMain_icon.svg" alt="식물모아 식물아이콘">
                            <h3>스킨답서스</h3>
                        </div>
                    </div>
                    <div class="card" data-category="초보자용">
                        <div class="card__header2"
                            style="background-image: url(https://huga.s3.ap-northeast-2.amazonaws.com/plantImages/16558151967671.jpg);">
                        </div>
                        <div class="card__contents">
                            <img src="../html/assets/img/plantMain_icon.svg" alt="식물모아 식물아이콘">
                            <h3>스노우 스파티필름</h3>
                        </div>
                    </div>
                    <div class="card" data-category="초보자용">
                        <div class="card__header2"
                            style="background-image: url(https://huga.s3.ap-northeast-2.amazonaws.com/plantImages/16558148739281.jpg);">
                        </div>
                        <div class="card__contents">
                            <img src="../html/assets/img/plantMain_icon.svg" alt="식물모아 식물아이콘">
                            <h3>수채화 고무나무</h3>
                        </div>
                    </div>
                    <div class="card" data-category="초보자용">
                        <div class="card__header2"
                            style="background-image: url(https://huga.s3.ap-northeast-2.amazonaws.com/plantImages/16558143643712.jpg);">
                        </div>
                        <div class="card__contents">
                            <img src="../html/assets/img/plantMain_icon.svg" alt="식물모아 식물아이콘">
                            <h3>소철</h3>
                        </div>
                    </div>
                    <div class="card" data-category="다육/선인장">
                        <div class="card__header2"
                            style="background-image: url(https://huga.s3.ap-northeast-2.amazonaws.com/plantImages/16558139776991.jpg);">
                        </div>
                        <div class="card__contents">
                            <img src="../html/assets/img/plantMain_icon.svg" alt="식물모아 식물아이콘">
                            <h3>생선뼈 선인장 (피쉬본)</h3>
                        </div>
                    </div>
                    <div class="card" data-category="다육/선인장">
                        <div class="card__header2"
                            style="background-image: url(https://huga.s3.ap-northeast-2.amazonaws.com/plantImages/16558134075021.jpg);">
                        </div>
                        <div class="card__contents">
                            <img src="../html/assets/img/plantMain_icon.svg" alt="식물모아 식물아이콘">
                            <h3>산세베리아 문샤인</h3>
                        </div>
                    </div>
                    <div class="card" data-category="초보자용">
                        <div class="card__header2"
                            style="background-image: url(https://huga.s3.ap-northeast-2.amazonaws.com/plantImages/16558130527851.jpg);">
                        </div>
                        <div class="card__contents">
                            <img src="../html/assets/img/plantMain_icon.svg" alt="식물모아 식물아이콘">
                            <h3>비단 삼나무 (블루버드)</h3>
                        </div>
                    </div>
                    <div class="card" data-category="초보자용">
                        <div class="card__header2"
                            style="background-image: url(https://huga.s3.ap-northeast-2.amazonaws.com/plantImages/16558125454911.jpg);">
                        </div>
                        <div class="card__contents">
                            <img src="../html/assets/img/plantMain_icon.svg" alt="식물모아 식물아이콘">
                            <h3>블루스타 고사리</h3>
                        </div>
                    </div>
                    <div class="card" data-category="초보자용">
                        <div class="card__header2"
                            style="background-image: url(https://huga.s3.ap-northeast-2.amazonaws.com/plantImages/16626281525171.jpg);">
                        </div>
                        <div class="card__contents">
                            <img src="../html/assets/img/plantMain_icon.svg" alt="식물모아 식물아이콘">
                            <h3>보스턴 고사리</h3>
                        </div>
                    </div>
                    <div class="card" data-category="다육/선인장">
                        <div class="card__header2"
                            style="background-image: url(https://huga.s3.ap-northeast-2.amazonaws.com/plantImages/16558116358201.jpg);">
                        </div>
                        <div class="card__contents">
                            <img src="../html/assets/img/plantMain_icon.svg" alt="식물모아 식물아이콘">
                            <h3>미니 알로에</h3>
                        </div>
                    </div>
                    <div class="card" data-category="초보자용">
                        <div class="card__header2"
                            style="background-image: url(https://huga.s3.ap-northeast-2.amazonaws.com/plantImages/16558064533821.jpg);">
                        </div>
                        <div class="card__contents">
                            <img src="../html/assets/img/plantMain_icon.svg" alt="식물모아 식물아이콘">
                            <h3>무늬 아이비</h3>
                        </div>
                    </div>
                </div>

                <!-- <div class="plantmoa__pages">
                    <ul>
                        <li><a href="#">&lt;&lt;</a></li>
                        <li><a href="#">&lt;</a></li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">&gt;</a></li>
                        <li><a href="#">&gt;&gt;</a></li>
                    </ul>
                </div> -->
            </div>
        </section>
        <!-- //plantmoa -->

    </main>
    <!-- //main -->

    <?php include "../include/footer.php" ?>
    <!-- footer -->
    <?php include "../login/login.php" ?>

    <!-- login팝업 -->
    <script src="../assets/js/login.js"></script>

    <script>
    let indicator = document.querySelector('.filter_lists').children;
    let main = document.querySelector('.card__inner').children;

    for (let i = 0; i < indicator.length; i++) {
        indicator[i].onclick = function() {
            for (let x = 0; x < indicator.length; x++) {
                indicator[x].classList.remove('active');
            }
            this.classList.add('active');
            const dispalyItems = this.getAttribute('data-filter');
            for (let z = 0; z < main.length; z++) {
                main[z].style.transform = 'scale(0)';
                setTimeout(() => {
                    main[z].style.display = 'none';
                }, 500);
                if ((main[z].getAttribute('data-category') == dispalyItems) ||
                    dispalyItems == 'all') {
                    main[z].style.transform = 'scale(1)';
                    setTimeout(() => {
                        main[z].style.display = 'block'
                    }, 500);
                }
            }
        }
    }
    </script>
</body>

</html>