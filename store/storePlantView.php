<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>식물 스토어</title>

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
        <section id="storeCard" class="storeCard__wrap container">
            <h2 class="blind">스토어</h2>

            <div class="storeCard__cate">
                <ul>
                    <li><a href="store.php">스토어 메인</a></li>
                    <li><a class="active" href="storePlantView.php">호밍 식물</a></li>
                    <li><a href="storeSupplies.php">원예 용품</a></li>
                </ul>
            </div>
            <h3 class="storeView_tit">전체 식물 8</h3>
            <div class="storecardView__inner">
                <div class="storeCard__top">
                    <div class="store__card">
                        <a href="https://smartstore.naver.com/kokodama/products/5716242704">
                            <figure>
                                <img src="../html/assets/img/store_card_img01.jpeg" alt="식물 이미지" />
                            </figure>
                            <h3>아비스 고사리식물</h3>
                            <div class="price">6,000</div>
                            <div class="sale">3,000</div>
                        </a>
                    </div>
                    <div class="store__card">
                        <a href="https://smartstore.naver.com/kokodama/products/6444204839">
                            <figure>
                                <img src="../html/assets/img/store_card_img02.jpeg" alt="식물 이미지" />
                            </figure>
                            <h3>칼라데아 트리칼라</h3>
                            <div class="price">25,000</div>
                            <div class="sale">8,000</div>
                        </a>
                    </div>
                    <div class="store__card">
                        <a href="https://smartstore.naver.com/kokodama/products/6752611349">
                            <figure>
                                <img src="../html/assets/img/store_card_img03.jpeg" alt="식물 이미지" />
                            </figure>
                            <h3>코브라 아비스</h3>
                            <div class="price">30,000</div>
                            <div class="sale">7,000</div>
                        </a>
                    </div>
                    <div class="store__card">
                        <a href="https://smartstore.naver.com/kokodama/products/6973543699">
                            <figure>
                                <img src="../html/assets/img/store_card_img04.jpeg" alt="식물 이미지" />
                            </figure>
                            <h3>칼라데아 퓨전화이트</h3>
                            <div class="price">20,000</div>
                            <div class="sale">12,800</div>
                        </a>
                    </div>
                </div>
                <div class="storeCard__bom">
                    <div class="store__card">
                        <a href="https://smartstore.naver.com/kokodama/products/6888167731">
                            <figure>
                                <img src="../html/assets/img/store_card_img05.jpeg" alt="식물 이미지" />
                            </figure>
                            <h3>알로카시아 프라이덱</h3>
                            <div class="price">40,000</div>
                            <div class="sale">7,000</div>
                        </a>
                    </div>
                    <div class="store__card">
                        <a href="https://smartstore.naver.com/kokodama/products/5785104199">
                            <figure>
                                <img src="../html/assets/img/store_card_img06.jpeg" alt="식물 이미지" />
                            </figure>
                            <h3>은엽 자엽아카시아</h3>
                            <div class="price">12,000</div>
                            <div class="sale">7,000</div>
                        </a>
                    </div>
                    <div class="store__card">
                        <a href="https://smartstore.naver.com/kokodama/products/5720615612">
                            <figure>
                                <img src="../html/assets/img/store_card_img07.jpeg" alt="식물 이미지" />
                            </figure>
                            <h3>난타나 란타나</h3>
                            <div class="price">32,000</div>
                            <div class="sale">5,000</div>
                        </a>
                    </div>
                    <div class="store__card">
                        <a href="https://smartstore.naver.com/kokodama/products/7003307558">
                            <figure>
                                <img src="../html/assets/img/store_card_img08.jpeg" alt="식물 이미지" />
                            </figure>
                            <h3>클레로덴드론 덴드롱</h3>
                            <div class="price">32,000</div>
                            <div class="sale">4,900</div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="storeView__pages">
                <ul>
                    <li><a href="#">&lt;&lt;</a></li>
                    <li><a href="#">&lt;</a></li>
                    <li><a class="active" href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#">&gt;</a></li>
                    <li><a href="#">&gt;&gt;</a></li>
                </ul>
            </div>
        </section>
        <!-- //storeCard -->

        <section id="storeBanner" class="storebanner__wrap">
            <div class="storebanner__inner container">
                <div class="storebanner__left">
                    <div class="storeBanner">
                        <h3>엄선된 스토어 만을 선발</h3>
                        <p>
                            안전배송과 믿을수 있는 스토어만을 보여 주는 호밍입니다. 편리
                            하고, 보다 쉽게 식물을 구매하세요!
                        </p>
                    </div>
                    <div class="storeBanner">
                        <h3>원예용품이 처음이 당신을 위해</h3>
                        <p>
                            많은 사람들이 이용하는 원예용품을 모아 호밍이 보여줍니다! 편하게
                            선택하세요.
                        </p>
                    </div>
                    <div class="storeBanner">
                        <h3>이제는 간편하게 구입하세요</h3>
                        <p>
                            식물의 정보를 보고, 바로 구입까지! 호밍에서 한번에 해결하고
                            초보식집사 탈출!
                        </p>
                    </div>
                </div>
                <div class="storebanner__right">
                    <figure>
                        <img src="../html/assets/img/store_banner.png" alt="" />
                    </figure>
                </div>
            </div>
        </section>
        <!-- //banner -->
    </main>
    <!-- main -->

    <?php include "../include/footer.php" ?>
    <!-- footer -->
</body>

</html>