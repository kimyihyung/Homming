<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>식물 검색</title>

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
    <!-- header -->

    <main id="main">
        <div class="search__page container" id="search__page">
            <section class="search_title_section">
                <h1 class="search_title">검색을 통해</h1>
                <h1 class="search_title">식물을 찾아보세요</h1>
            </section>
            <section class="search_filter_section">
                <!-- <div class="first_filter_section" id="first_filter">
                    <ul class="filter_lists">
                        <button class="filter_btn" type="button" firstfilter="" data="">잎을 감상하는</button>
                        <button class="filter_btn" type="button" firstfilter="" data="">꽃을 감상하는</button>
                        <button class="filter_btn" type="button" firstfilter="" data="">열매를 감상하는</button>
                        <button class="filter_btn" type="button" firstfilter="" data="">다육/선인장</button>
                    </ul>
                </div> -->
                <div class="first_filter_section" id="first_filter">
                    <ul class="filter_lists">
                        <button class="filter_btn active" type="button" data-filter="all">all</button>
                        <button class="filter_btn" type="button" data-filter="초보자용">초보자용</button>
                        <button class="filter_btn" type="button" data-filter="다육/선인장">다육/선인장</button>
                        <button class="filter_btn" type="button" data-filter="반려동물 안전한">반려동물 안전한</button>
                    </ul>
                </div>
            </section>
            <section class="search_search_section" id="passFilter">
                <div class="search__search-form">
                    <div class="search__form-flex"><img class="search__ico" src="../html/assets/img/search.png">
                        <form id="search__form" onkeydown="return captureReturnKey(event)">
                            <input class="search__input" id="search__input" type="text" onkeyup="filter()"
                                placeholder="식물 이름을 검색해 주세요." name="term">
                        </form>
                    </div>
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
                        <a href="../plantMoa/plantmoaView27.php">
                            <div class="card__header2"
                                style="background-image: url(https://huga.s3.ap-northeast-2.amazonaws.com/plantImages/16625523760131.jpg);">
                            </div>
                            <div class="card__contents">
                                <img src="../html/assets/img/plantMain_icon.svg" alt="식물모아 식물아이콘">
                                <h3>라피도포라 디컬시바</h3>
                            </div>
                        </a>
                    </div>
                    <div class="card" data-category="초보자용">
                        <a href="../plantMoa/plantmoaView28.php">
                            <div class="card__header2"
                                style="background-image: url(https://huga.s3.ap-northeast-2.amazonaws.com/plantImages/16625491132521.jpg);">
                            </div>
                            <div class="card__contents">
                                <img src="../html/assets/img/plantMain_icon.svg" alt="식물모아 식물아이콘">
                                <h3>필로덴드론 버럴 막스</h3>
                            </div>
                        </a>
                    </div>
                    <div class="card" data-category="초보자용">
                        <a href="../plantMoa/plantmoaView29.php">
                            <div class="card__header2"
                                style="background-image: url(https://huga.s3.ap-northeast-2.amazonaws.com/plantImages/16625473636791.jpg);">
                            </div>
                            <div class="card__contents">
                                <img src="../html/assets/img/plantMain_icon.svg" alt="식물모아 식물아이콘">
                                <h3>쉬베리아나 고무나무</h3>
                            </div>
                        </a>
                    </div>
                    <div class="card" data-category="반려동물 안전한">
                        <a href="../plantMoa/plantmoaView43.php">
                            <div class="card__header2"
                                style="background-image: url(https://huga.s3.ap-northeast-2.amazonaws.com/plantImages/16625356046481.jpg);">
                            </div>
                            <div class="card__contents">
                                <img src="../html/assets/img/plantMain_icon.svg" alt="식물모아 식물아이콘">
                                <h3>싱고니움 실버 드워프</h3>
                            </div>
                        </a>
                    </div>
                    <div class="card" data-category="반려동물 안전한">
                        <a href="../plantMoa/plantmoaView44.php">
                            <div class="card__header2"
                                style="background-image: url(https://huga.s3.ap-northeast-2.amazonaws.com/plantImages/16624708504524.jpg);">
                            </div>
                            <div class="card__contents">
                                <img src="../html/assets/img/plantMain_icon.svg" alt="식물모아 식물아이콘">
                                <h3>꽃 베고니아</h3>
                            </div>
                        </a>
                    </div>
                    <div class="card" data-category="초보자용">
                        <a href="../plantMoa/plantmoaView30.php">
                            <div class="card__header2"
                                style="background-image: url(https://huga.s3.ap-northeast-2.amazonaws.com/plantImages/16624647206471.jpg);">
                            </div>
                            <div class="card__contents">
                                <img src="../html/assets/img/plantMain_icon.svg" alt="식물모아 식물아이콘">
                                <h3>목성 베고니아</h3>
                            </div>
                        </a>
                    </div>
                    <div class="card" data-category="초보자용">
                        <a href="../plantMoa/plantmoaView31.php">
                            <div class="card__header2"
                                style="background-image: url(https://huga.s3.ap-northeast-2.amazonaws.com/plantImages/16624575870041.jpg);">
                            </div>
                            <div class="card__contents">
                                <img src="../html/assets/img/plantMain_icon.svg" alt="식물모아 식물아이콘">
                                <h3>필로덴드론 콩고</h3>
                            </div>
                        </a>
                    </div>
                    <div class="card" data-category="초보자용">
                        <a href="../plantMoa/plantmoaView32.php">
                            <div class="card__header2"
                                style="background-image: url(https://huga.s3.ap-northeast-2.amazonaws.com/plantImages/16623816022761.jpg);">
                            </div>
                            <div class="card__contents">
                                <img src="../html/assets/img/plantMain_icon.svg" alt="식물모아 식물아이콘">
                                <h3>필로덴드론 파스타짜넘</h3>
                            </div>
                        </a>
                    </div>
                    <div class="card" data-category="초보자용">
                        <a href="../plantMoa/plantmoaView33.php">
                            <div class="card__header2"
                                style="background-image: url(https://huga.s3.ap-northeast-2.amazonaws.com/plantImages/16623789637091.jpg);">
                            </div>
                            <div class="card__contents">
                                <img src="../html/assets/img/plantMain_icon.svg" alt="식물모아 식물아이콘">
                                <h3>필로덴드론 낭가리텐스</h3>
                            </div>
                        </a>
                    </div>
                    <div class="card" data-category="초보자용">
                        <a href="../plantMoa/plantmoaView34.php">
                            <div class="card__header2"
                                style="background-image: url(https://huga.s3.ap-northeast-2.amazonaws.com/plantImages/16623767922831.jpg);">
                            </div>
                            <div class="card__contents">
                                <img src="../html/assets/img/plantMain_icon.svg" alt="식물모아 식물아이콘">
                                <h3>피어리스 (시기지움)</h3>
                            </div>
                        </a>
                    </div>
                    <div class="card" data-category="반려동물 안전한">
                        <a href="../plantMoa/plantmoaView45.php">
                            <div class="card__header2"
                                style="background-image: url(https://huga.s3.ap-northeast-2.amazonaws.com/plantImages/1662029401806146364315_413805276357646_843839882721336741_n.webp);">
                            </div>
                            <div class="card__contents">
                                <img src="../html/assets/img/plantMain_icon.svg" alt="식물모아 식물아이콘">
                                <h3>싱고니움 그린 스플래쉬</h3>
                            </div>
                        </a>
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
                    <div class="card" data-category="반려동물 안전한">
                        <a href="../plantMoa/plantmoaView46.php">
                            <div class="card__header2"
                                style="background-image: url(https://huga.s3.ap-northeast-2.amazonaws.com/plantImages/16613392739811.jpg);">
                            </div>
                            <div class="card__contents">
                                <img src="../html/assets/img/plantMain_icon.svg" alt="식물모아 식물아이콘">
                                <h3>스위트 바질</h3>
                            </div>
                        </a>
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
                        <a href="../plantMoa/plantmoaView47.php">
                            <div class="card__header2"
                                style="background-image: url(https://huga.s3.ap-northeast-2.amazonaws.com/plantImages/1660910768960248566454_1120365818768589_3917802631000907011_n.webp);">
                            </div>
                            <div class="card__contents">
                                <img src="../html/assets/img/plantMain_icon.svg" alt="식물모아 식물아이콘">
                                <h3>싱고니움 매직 마블</h3>
                            </div>
                        </a>
                    </div>
                    <div class="card" data-category="반려동물 안전한">
                        <a href="../plantMoa/plantmoaView48.php">
                            <div class="card__header2"
                                style="background-image: url(https://huga.s3.ap-northeast-2.amazonaws.com/plantImages/16626287285771.jpg);">
                            </div>
                            <div class="card__contents">
                                <img src="../html/assets/img/plantMain_icon.svg" alt="식물모아 식물아이콘">
                                <h3>무늬 싱고니움 (싱고니움 알보 바리에가타)</h3>
                            </div>
                        </a>
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
                   
                    <div class="card" data-category="다육/선인장">
                        <a href="../plantMoa/plantmoaView36.php">
                            <div class="card__header2"
                                style="background-image: url(https://huga.s3.ap-northeast-2.amazonaws.com/plantImages/16589155784795.jpg);">
                            </div>
                            <div class="card__contents">
                                <img src="../html/assets/img/plantMain_icon.svg" alt="식물모아 식물아이콘">
                                <h3>괴마옥 (파인애플 선인장)</h3>
                            </div>
                        </a>
                    </div>
                    <div class="card" data-category="다육/선인장">
                        <a href="../plantMoa/plantmoaView37.php">
                            <div class="card__header2"
                                style="background-image: url(https://huga.s3.ap-northeast-2.amazonaws.com/plantImages/16584011927651.jpg);">
                            </div>
                            <div class="card__contents">
                                <img src="../html/assets/img/plantMain_icon.svg" alt="식물모아 식물아이콘">
                                <h3>파키포디움 호롬벤세</h3>
                            </div>
                        </a>
                    </div>
                    <div class="card" data-category="다육/선인장">
                        <a href="../plantMoa/plantmoaView38.php">
                            <div class="card__header2"
                                style="background-image: url(https://huga.s3.ap-northeast-2.amazonaws.com/plantImages/16583842859321.jpg);">
                            </div>
                            <div class="card__contents">
                                <img src="../html/assets/img/plantMain_icon.svg" alt="식물모아 식물아이콘">
                                <h3>화이트 고스트</h3>
                            </div>
                        </a>
                    </div>
                    
                    <div class="card" data-category="다육/선인장">
                        <a href="../plantMoa/plantmoaView39.php">
                            <div class="card__header2"
                                style="background-image: url(https://huga.s3.ap-northeast-2.amazonaws.com/plantImages/16576830538731.jpg);">
                            </div>
                            <div class="card__contents">
                                <img src="../html/assets/img/plantMain_icon.svg" alt="식물모아 식물아이콘">
                                <h3>장미허브</h3>
                            </div>
                        </a>
                    </div>
                    <div class="card" data-category="다육/선인장">
                        <a href="../plantMoa/plantmoaView40.php">
                            <div class="card__header2"
                                style="background-image: url(https://huga.s3.ap-northeast-2.amazonaws.com/plantImages/16576214006871.jpg);">
                            </div>
                            <div class="card__contents">
                                <img src="../html/assets/img/plantMain_icon.svg" alt="식물모아 식물아이콘">
                                <h3>산세베리아</h3>
                            </div>
                        </a>
                    </div>
                    <div class="card" data-category="다육/선인장">
                        <a href="../plantMoa/plantmoaView41.php">
                            <div class="card__header2"
                                style="background-image: url(https://huga.s3.ap-northeast-2.amazonaws.com/plantImages/16558794016261.jpg);">
                            </div>
                            <div class="card__contents">
                                <img src="../html/assets/img/plantMain_icon.svg" alt="식물모아 식물아이콘">
                                <h3>아데니움 (석화)</h3>
                            </div>
                        </a>
                    </div>
                    <div class="card" data-category="다육/선인장">
                        <a href="../plantMoa/plantmoaView42.php">
                            <div class="card__header2"
                                style="background-image: url(https://huga.s3.ap-northeast-2.amazonaws.com/plantImages/16558734435411.jpg);">
                            </div>
                            <div class="card__contents">
                                <img src="../html/assets/img/plantMain_icon.svg" alt="식물모아 식물아이콘">
                                <h3>청산호 (연필 선인장)</h3>
                            </div>
                        </a>
                    </div>
                    <div class="card" data-category="다육/선인장">
                        <a href="../plantMoa/plantmoaView35.php">
                            <div class="card__header2"
                                style="background-image: url(https://huga.s3.ap-northeast-2.amazonaws.com/plantImages/1662619339309275685073_451859856695918_7461780793129810940_n.jpg);">
                            </div>
                            <div class="card__contents">
                                <img src="../html/assets/img/plantMain_icon.svg" alt="식물모아 식물아이콘">
                                <h3>스투키</h3>
                            </div>
                        </a>
                    </div>
                </div>

            </section>
        </div>
    </main>

    <?php include "../include/footer.php" ?>
    <!-- footer -->

    <script>
    function captureReturnKey(e) {
        if (e.keyCode == 13 && e.srcElement.type != "textarea")
            return false;
    }
    function filter() {
        let searchInput = document.getElementById("search__input").value.toLowerCase();
        let card = document.getElementsByClassName("card");

        for (let i = 0; i < card.length; i++) {
            plant = card[i].getElementsByClassName("card__contents");
            if (plant[0].innerHTML.toLowerCase().indexOf(searchInput) != -1) {
                card[i].style.display = "block";
            } else {
                card[i].style.display = "none";
            }
        }
    }
    </script>
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
                main[z].style.display = 'none';
                setTimeout(() => {
                    main[z].style.display = 'none';
                }, 500);
                if ((main[z].getAttribute('data-category') == dispalyItems) ||
                    dispalyItems == 'all') {
                    main[z].style.display = 'block';
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