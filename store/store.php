<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>스토어</title>

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
        <section id="storeSlider" class="storeSlider__wrap">
            <h2 class="blind">새로운 스토어 업데이트</h2>
            <div class="storeSlider__inner">
                <div class="storeSlider">
                    <div class="storeSlider__img">
                        <figure class="slider">
                            <img src="../html/assets/img/store_slider01.jpg" alt="" />
                        </figure>
                        <figure class="slider">
                            <img src="../html/assets/img/store_slider02.jpg" alt="" />
                        </figure>
                        <figure class="slider">
                            <img src="../html/assets/img/store_slider03.jpg" alt="" />
                        </figure>
                    </div>
                    <div class="desc container">
                        <h3>
                            화분부터 데코용품까지<br />
                            만나보세요
                        </h3>
                        <p>인테리어의 취향에 맞게 꾸며 보세요</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- //storeSlider -->

        <section id="storeCard" class="storeCard__wrap container">
            <h2 class="blind">스토어</h2>

            <div class="storeCard__cate">
                <ul>
                    <li><a class="active" href="store.php">스토어 메인</a></li>
                    <li><a href="storePlantView.php">호밍 식물</a></li>
                    <li><a href="storeSupplies.php">원예 용품</a></li>
                </ul>
            </div>
            <div class="store__tit">
                <h3 class="tit">새로 맞이 하는 반려 식물</h3>
                <a href="storePlantView.php">모두 보기 > </a>
            </div>
            <div class="storeCard__inner">
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
            <div class="store__tit">
                <h3>식집사의 필수 아이템</h3>
                <a href="storeSupplies.php">모두 보기 > </a>
            </div>
            <div class="storeCard__inner">
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
        </section>
        <!-- //storeCard -->
    </main>
    <!-- main -->

    <?php include "../include/footer.php" ?>
    <!-- footer -->

    <script>
    const storeSliderInner = document.querySelector(".storeSlider__inner");
    const storeSlider = document.querySelector(".storeSlider");
    const storeSliderImg = document.querySelector(".storeSlider__img");
    const slider = document.querySelectorAll(".slider");

    let currentIndex = 0,
        sliderLength = slider.length,
        sliderWidth = storeSlider.offsetWidth,
        sliderFirst = storeSliderImg.firstElementChild.cloneNode(true);
    storeSliderImg.appendChild(sliderFirst);

    function sliderEffect() {
        currentIndex++;
        storeSliderImg.style.transition = "all 0.6s";
        storeSliderImg.style.transform =
            "translateX(-" + sliderWidth * currentIndex + "px)";

        if (currentIndex == sliderLength) {
            setTimeout(() => {
                storeSliderImg.style.transition = "0s";
                storeSliderImg.style.transform = "translateX(0px)";
            }, 700);

            currentIndex = 0;
        }
    }
    setInterval(sliderEffect, 2000);
    </script>
</body>

</html>