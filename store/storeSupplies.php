<?php
    include "../connect/session.php";
	include "../connect/connect.php";
?>
<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>원예용품 스토어</title>

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
                    <li><a href="storePlantView.php">호밍 식물</a></li>
                    <li><a class="active" href="storeSupplies.php">원예 용품</a></li>
                </ul>
            </div>
            <h3 class="storeView_tit">전체 식물 12</h3>
            <div class="storecardView__inner">
                <div class="storeCard__top">
                    <div class="store__card">
                        <a
                            href="https://smartstore.naver.com/daily_leisure/products/6950548011?NaPm=ct%3Dl9rxqlgw%7Cci%3D8155b6f99e424a4616485c36eec13490dcf252b4%7Ctr%3Dslct%7Csn%3D2361190%7Chk%3D85dfce29480c5d98c634b68c92a2bcb2d6a5b3b3">
                            <figure>
                                <img src="../html/assets/img/store_card02.jpg" alt="식물 이미지" />
                            </figure>
                            <h3>브라운 굽 원형 토분</h3>
                            <div class="price">12,380</div>
                            <div class="sale">11,760</div>
                        </a>
                    </div>
                    <div class="store__card">
                        <a
                            href="https://smartstore.naver.com/eogksxhrl/products/3305893266?NaPm=ct%3Dl9rxsz48%7Cci%3Deb1388a4d46d8b61ab53b36e747808f78e311ef4%7Ctr%3Dslsbrc%7Csn%3D416606%7Chk%3D74f2b839023f4fbded204f422de6202d11cde824">
                            <figure>
                                <img src="../html/assets/img/store_card03.jpg" alt="식물 이미지" />
                            </figure>
                            <h3>마사토 세트</h3>
                            <div class="price">13,000</div>
                            <div class="sale">8,900</div>
                        </a>
                    </div>
                    <div class="store__card">
                        <a
                            href="https://smartstore.naver.com/woodyhome/products/4910918769?NaPm=ct%3Dl9rxua6o%7Cci%3D355d399a2c649a4d658a216a703f5ae9ab52c731%7Ctr%3Dslsbrc%7Csn%3D1205106%7Chk%3D873a9a22c56b913eff3ca00b28017ff89d8dd444">
                            <figure>
                                <img src="../html/assets/img/store_card04.jpg" alt="식물 이미지" />
                            </figure>
                            <h3>원목 진열대 받침대</h3>
                            <div class="price">40,000</div>
                            <div class="sale">25,900</div>
                        </a>
                    </div>
                    <div class="store__card">
                        <a
                            href="https://smartstore.naver.com/wobble_/products/7456149493?NaPm=ct%3Dl9rxvixs%7Cci%3D1b6714eeb651d4ec383d97c01322f23015919a03%7Ctr%3Dslsc%7Csn%3D6993064%7Chk%3D6a0830bde5f040d0c9d8efe5b3e86e9fead0e379">
                            <figure>
                                <img src="../html/assets/img/store_card05.jpg" alt="식물 이미지" />
                            </figure>
                            <h3>화분 원목 진열대</h3>
                            <div class="price">31,690</div>
                            <div class="sale">31,370</div>
                        </a>
                    </div>
                </div>
                <div class="storeCard__cen">
                    <div class="store__card">
                        <a
                            href="https://search.shopping.naver.com/catalog/24073572949?query=%EC%9B%90%EC%98%88%EC%9A%A9%ED%92%88&NaPm=ct%3Dl9s97yn4%7Cci%3Dae4a181d41940376dfe277341fd420dc327ef14c%7Ctr%3Dslsl%7Csn%3D95694%7Chk%3Dd36056fbd702d2ea0a736df709e66e047381c37d">
                            <figure>
                                <img src="../html/assets/img/store_card06.jpg" alt="식물 이미지" />
                            </figure>
                            <h3>이태리토분 바소 팔라디오 알토</h3>
                            <div class="price">3,520</div>
                            <div class="sale">3,520</div>
                        </a>
                    </div>
                    <div class="store__card">
                        <a
                            href="https://smartstore.naver.com/dfs2019/products/6202770728?n_media=11068&n_query=%EC%9B%90%EC%98%88%EC%9A%A9%ED%92%88&n_rank=7&n_ad_group=grp-a001-02-000000029254487&n_ad=nad-a001-02-000000202292022&n_campaign_type=2&n_mall_id=ncp_1nunei_01&n_mall_pid=6202770728&n_ad_group_type=2&NaPm=ct%3Dl9s9cw40%7Cci%3D0Am0002UA5HxaeLrRf3h%7Ctr%3Dpla%7Chk%3D0ee572c8aeeeb601f118a65933ad21152af2a9bf">
                            <figure>
                                <img src="../html/assets/img/store_card07.jpg" alt="식물 이미지" />
                            </figure>
                            <h3>수경재배기</h3>
                            <div class="price">99,000</div>
                            <div class="sale">59,900</div>
                        </a>
                    </div>
                    <div class="store__card">
                        <a
                            href="https://smartstore.naver.com/freemade/products/5721098368?NaPm=ct%3Dl9s9ive0%7Cci%3Df6c59d4d2a5127c2b669ffda6c486f6b799a1c03%7Ctr%3Dslsl%7Csn%3D160957%7Chk%3D071a817a3429d364a4e9b9ce4dc5d96e0d672550">
                            <figure>
                                <img src="../html/assets/img/store_card08.jpg" alt="식물 이미지" />
                            </figure>
                            <h3>틈새 수납 선반</h3>
                            <div class="price">50,000</div>
                            <div class="sale">22,900</div>
                        </a>
                    </div>
                    <div class="store__card">
                        <a
                            href="https://smartstore.naver.com/eogksxhrl/products/2868758087?n_media=11068&n_query=%ED%99%94%EB%B6%84%EB%8F%8C&n_rank=2&n_ad_group=grp-a001-02-000000014074993&n_ad=nad-a001-02-000000160840765&n_campaign_type=2&n_mall_id=eogksxhrl&n_mall_pid=2868758087&n_ad_group_type=2&NaPm=ct%3Dl9s9n12w%7Cci%3D0zm0002hAzHxg%5FbDHKXd%7Ctr%3Dpla%7Chk%3D065298c3162632f74200ee502c543e387f6dff9c">
                            <figure>
                                <img src="../html/assets/img/store_card09.jpg" alt="식물 이미지" />
                            </figure>
                            <h3>흑자갈 15Kg 대포장</h3>
                            <div class="price">15,600</div>
                            <div class="sale">9,900</div>
                        </a>
                    </div>
                </div>
                <div class="storeCard__bom">
                    <div class="store__card">
                        <a
                            href="https://smartstore.naver.com/mr_oh/products/5696924543?NaPm=ct%3Dl9wk4ozk%7Cci%3D47497cfe42652c1431fe29c3c557f61c1d2a199e%7Ctr%3Dslsl%7Csn%3D1083054%7Chk%3D0596b1aedcf36fbe6a5fceba3ca9c88eb6a9aeea">
                            <figure>
                                <img src="../html/assets/img/store_card10.jpg" alt="식물 이미지" />
                            </figure>
                            <h3>바텡크라세 화분 물뿌리개 물조리개</h3>
                            <div class="price">35,000</div>
                            <div class="sale">11,200</div>
                        </a>
                    </div>
                    <div class="store__card">
                        <a
                            href="https://smartstore.naver.com/potvillage/products/4862799903?NaPm=ct%3Dl9wk857s%7Cci%3De09667412a3ed023c3b5ffcd24657c066d7fac8d%7Ctr%3Dslsl%7Csn%3D897665%7Chk%3D1f004a97587e9dc9953dd1e5dda3ef6547323284">
                            <figure>
                                <img src="../html/assets/img/store_card11.jpg" alt="식물 이미지" />
                            </figure>
                            <h3>테라코타 이태리 대형 토분</h3>
                            <div class="price">125,000</div>
                            <div class="sale">25,000</div>
                        </a>
                    </div>
                    <div class="store__card">
                        <a
                            href="https://smartstore.naver.com/bonfirm/products/7337591766?n_media=11068&n_query=%EB%B2%A0%EB%9E%80%EB%8B%A4%EB%B9%84%EB%8B%90%ED%95%98%EC%9A%B0%EC%8A%A4&n_rank=2&n_ad_group=grp-a001-02-000000029602068&n_ad=nad-a001-02-000000205653233&n_campaign_type=2&n_mall_id=ncp_1o02w4_01&n_mall_pid=7337591766&n_ad_group_type=2&NaPm=ct%3Dl9wkbt5s%7Cci%3D0AC0001WyjXxLqqf3LkK%7Ctr%3Dpla%7Chk%3D31e8bdd87ea667af4ccc5e4178a5cb8530b4976e">
                            <figure>
                                <img src="../html/assets/img/store_card12.jpg" alt="식물 이미지" />
                            </figure>
                            <h3>가정용 미니온실</h3>
                            <div class="price">39,900</div>
                            <div class="sale">35,770</div>
                        </a>
                    </div>
                    <div class="store__card">
                        <a
                            href="https://smartstore.naver.com/aflowergardening/products/4774947329?NaPm=ct%3Dl9wkfuzs%7Cci%3D8ec1278222722ba68acbaebcdbb4c9a1712e84c2%7Ctr%3Dslsl%7Csn%3D1039232%7Chk%3Dd9a498515440ed0988553bcdaed70c38e66c0b2b">
                            <figure>
                                <img src="../html/assets/img/store_card13.jpg" alt="식물 이미지" />
                            </figure>
                            <h3>소나무 나무껍질 분갈이흙</h3>
                            <div class="price">44,000</div>
                            <div class="sale">4,400</div>
                        </a>
                    </div>
                </div>
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