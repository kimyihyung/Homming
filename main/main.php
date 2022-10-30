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
    <title>Homming 사이트 만들기</title>

    <?php include "../include/link.php" ?>
    <!-- <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"
    /> -->

</head>

<body>

    <?php include "../include/header.php" ?>
    <!-- header -->

    <main id="main">
    <section
				id="sliderType"
				class="slider__wrap"
			>
				<h2 class="blind">새로운 칼럼 업데이트</h2>
				<div class="swiper mySwiper slider">
					<div class="swiper-wrapper">
						<div class="swiper-slide">
							<div class="desc">
								<h3>
									NEW COLUMN<br />
									UPDATE
								</h3>
								<p>
									선인장을 키우고 싶은 <br />
									당신을 위한 정보!
								</p>
								<div class="btn">
									<a href="../column/column07.php">자세히 보기</a>
								</div>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="desc">
								<h3>스토어 런칭</h3>
								<p>
									새롭게 단장된 식물 스토어와 <br />
									용품을 만나보세요!
								</p>
								<div class="btn">
									<a href="../store/sotre.php">자세히 보기</a>
								</div>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="desc2">
								<h3>
									Hot<br />
									Story
								</h3>
								<p>스토리의 가장 핫 한 글!</p>
								<div class="btn">
									<a href="http://homming.dothome.co.kr/story/storyView.php?storyID=15">자세히 보기</a>
								</div>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="desc3">
								<h3>꽃을 사랑하는 당신을 위한 소식</h3>
								<p>벛꽃에 관한 새로운 칼럼을 만나 보세요!</p>
								<div class="btn">
									<a href="../column/column08.php">자세히 보기</a>
								</div>
							</div>
						</div>
					</div>
					<div class="swiper-pagination"></div>
				</div>
				<div class="swiper-button-prev"><span class="ir">이전이미지</span></div>
				<div class="swiper-button-next"><span class="ir">다음이미지</span></div>
			</section>
			<!-- //slider -->

        <section id="mainColumn" class="mainColumn__wrap container">
            <div class="mainColumn__inner">
                <div class="column_left">
                    <h3 class="col_tit">물 주기, <br>
                        내가 잘못하는 이유가
                        무엇일까?</h3>
                    <p class="col_sub">우리 집 식물의 옳바른 물주기</p>
                    <div class="col_desc">처음에 식물을 키울때 가장 난감한 것은 식물의 물을
                        주는 주기였다. 한번은 물을 너무 많이 주어서 식물이
                        죽은경우가 있었고, 또 어떤 경우는 너무 물을 주지
                        않아서 식물이 죽었었다.
                        처음 식물을 기르는 사람들에게 가장 어려운 식물의
                        물주기....</div>
                    <p class="col_name"><em>copy.</em> 김눈누 | <em>date.</em> 2022.10.07</p>
                </div>
                <div class="column_right">
                    <figure>
                        <img src="../assets/img/mainColumn_bg.jpg" alt="물주기 일러스트 이미지">
                        <a href="../column/column01.php"><img src="../assets/img/mainColumn_btn.svg" alt="물주기, 내가 잘못하는 이유가 무엇일까? 바로가기 버튼"></a>
                    </figure>
                </div>
            </div>
        </section>
        <!-- //mainColumn -->

        <section
				id="cardColumn"
				class="cardColumn__wrap container"
			>
				<div class="cardColumn__inner">
					<div class="card_tit">
						<h3>매주 업데이트되는 칼럼을 만나보세요!</h3>
						<a href="../column/columnMain.php"
							><img
								src="../html/assets/img/card_arrow.svg"
								alt="칼럼 전체보기"
						/></a>
					</div>
					<div class="card__sub">
						<div class="swiper mySwiper card">
							<div class="swiper-wrapper">
								<div class="swiper-slide">
									<div class="card">
										<figure class="card_img">
											<img
												src="../html/assets/img/cardColumn01.jpg"
												alt="실내에서 멋지게 식물을 키우는 법"
											/>
										</figure>
										<div class="card_desc">
											<h3><a href="../cloumn/column04.php">실내에서 멋지게 식물을 키우는 법</a></h3>
											<p>집을 멋지게 꾸미자!</p>
											<p class="card_name"><em>copy.</em> 김눈누</p>
										</div>
									</div>
								</div>
								<div class="swiper-slide">
									<div class="card">
										<figure class="card_img">
											<img
												src="../html/assets/img/cardColumn02.jpg"
												alt="식물키우기 고수, 식물킬러를 만나다"
											/>
										</figure>
										<div class="card_desc">
											<h3>
												<a href="../column/column02.php">식물키우기 고수, 식물킬러를 만나다</a>
											</h3>
											<p>가장떠오르는 식물계의 인플루언서 ‘식물킬러’</p>
											<p class="card_name"><em>copy.</em> 김눈누</p>
										</div>
									</div>
								</div>
								<div class="swiper-slide">
									<div class="card">
										<figure class="card_img">
											<img
												src="../html/assets/img/cardColumn03.jpg"
												alt="따뜻한 겨울, 목화의 이야기"
											/>
										</figure>
										<div class="card_desc">
											<h3><a href="../cloumn/column03.php">실내 식물들을 위한 응급처치법</a></h3>
											<p>차가운 물, 찬 공기, 그늘을 피해 주세요!</p>
											<p class="card_name"><em>copy.</em> 김눈누</p>
										</div>
									</div>
								</div>
								<div class="swiper-slide">
									<div class="card">
										<figure class="card_img">
											<img
												src="../html/assets/img/cardColumn04.jpg"
												alt="식물이 좋아하는 물 주기 방법"
											/>
										</figure>
										<div class="card_desc">
											<h3><a href="../column/column05.php">식물이 좋아하는 물 주기 방법</a></h3>
											<p>
											어떻게 물을 줘야 제대로 주는 걸까
											</p>
											<p class="card_name"><em>copy.</em> 김눈누</p>
										</div>
									</div>
								</div>
								<div class="swiper-slide card">
									<div class="card">
										<figure class="card_img">
											<img
												src="../html/assets/img/cardColumn05.jpg"
												alt="식물이 스트레스 받는 이유"
											/>
										</figure>
										<div class="card_desc">
											<h3><a href="../column/column06.php">식물이 스트레스 받는 이유</a></h3>
											<p>식물킬러를 위한 아주 쉬운 식물책</p>
											<p class="card_name"><em>copy.</em> 김눈누</p>
										</div>
									</div>
								</div>
								<div class="swiper-slide">
									<div class="card">
										<a
											class="last__btn"
											href="../column/columnMain.php"
										>
											<figure class="card_img">
												<img
													class="plus__img"
													src="../html/assets/img/plus_btn.svg"
													alt="칼럼 전체보기"
												/>
											</figure>
											<div class="card_desc2">
												<p class="plus__btn">더 많은 칼럼을 만나 보세요!</p>
											</div>
										</a>
									</div>
								</div>
							</div>
							<div class="swiper-pagination"></div>
						</div>
					</div>
				</div>
			</section>
			<!-- //cardColumn -->

        <section id="banner" class="banner__wrap">
            <h2 class="blind">배너</h2>
            <div class="banner__inner">
                <h3 class="title">화분부터<br>
                    데코용품까지</h3>
                <a href="../store/store.php" title="페이지 이동" class="banner_btn">다양한 용품 보러가기</a>
            </div>
        </section>
        <!-- //banner -->

    </main>
    <!-- main -->

    <?php include "../include/footer.php" ?>
    <!-- footer -->

    <?php include "../login/login.php" ?>
    <!-- login -->
    
    <script src="../assets/js/login.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script>
			var swiper = new Swiper(".slider", {
				navigation: {
					nextEl: ".swiper-button-next",
					prevEl: ".swiper-button-prev",
				},
				autoplay: {
					delay: 4000,
					disableOnInteraction: false, //슬라이드 버튼을 눌러도 슬라이드가 이후에 계속 움직임
				},
				pagination: {
					el: ".swiper-pagination",
					type: "bullets",
					clickable: true,
				},
			});
		</script>
		<script>
			var swiper = new Swiper(".card", {
				slidesPerView: 3,
				spaceBetween: 30,
				freeMode: true,
				loop: false,
				pagination: {
					el: ".swiper-pagination",
					clickable: true,
				},
			});
		</script>
</body>

</html>