<!DOCTYPE html>
<html lang="ru">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />

		<!-- Bootstrap CSS -->
		<link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css" rel="stylesheet" />

		<!-- Theme CSS -->
		<link href="<?php echo get_template_directory_uri(); ?>/css/theme.css" rel="stylesheet" />

		<!-- FONT CSS -->
		<link href="<?php echo get_template_directory_uri(); ?>/css/font.css" rel="stylesheet" />

		<link rel="shortcut icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/img/ico/email-ico.svg" />

		<title>Геометрия стен 62 - Ручная и механизированная штукатурка стен</title>
	</head>
	<body>
		<header class="d-block header-top py-0 header-nav-index">
			<nav
				class="header-nav-top navbar navbar-expand-lg navbar-light d-none d-lg-block bg-transparent"
			>
				<div class="container">
					<div class="collapse navbar-collapse">
						<ul class="navbar-nav ms-auto align-items-center">
							<li class="nav-item me-3">
								<div
									class="d-flex align-items-center gap-3 lh-1 nav-link-text location"
								>
									<img src="<?php echo get_template_directory_uri(); ?>/img/ico/location-ico.svg" />
									гор. Москва, ул. Митинская, д. 43
								</div>
							</li>
							<li class="nav-item me-3">
								<div
									class="d-flex align-items-center gap-3 lh-1 nav-link-text time"
								>
									<img src="<?php echo get_template_directory_uri(); ?>/img/ico/clock-ico.svg" />
									Без выходных с 9:00 до 21:00
								</div>
							</li>
							<li class="nav-item me-3">
								<button
									class="nav-link d-flex align-items-center gap-3 lh-1 marker"
									data-bs-toggle="modal"
									data-bs-target="#callbackModal"
								>
									<img src="<?php echo get_template_directory_uri(); ?>/img/ico/callback-ico.svg" />
									Обратный звонок
								</button>
							</li>

							<li class="nav-item me-3">
								<a class="top-menu-tel nav-link marker" href="tel:+79209518178">
									<img src="<?php echo get_template_directory_uri(); ?>/img/ico/telephone-2.svg" />
									8 (920) 951-81-78
								</a>
							</li>

							<li class="nav-item me-3">
								<a class="top-menu-tel nav-link marker" href="tel:+79209542860">
									<img src="<?php echo get_template_directory_uri(); ?>/img/ico/telephone-2.svg" />
									8 (920) 954-28-60
								</a>
							</li>

							<li class="nav-item">
								<a class="nav-link ico-button" href="https://t.me/vasilyevr">
									<img src="<?php echo get_template_directory_uri(); ?>/img/ico/telegram.svg" />
								</a>
							</li>

							<li class="nav-item">
								<a
									class="nav-link ico-button"
									href="whatsapp://send?phone=+79209518178"
								>
									<img src="<?php echo get_template_directory_uri(); ?>/img/ico/whatsapp.svg" />
								</a>
							</li>

							<li class="nav-item">
								<a class="nav-link ico-button" href="https://t.me/vasilyevr">
									<img src="<?php echo get_template_directory_uri(); ?>/img/ico/vider.svg" />
								</a>
							</li>
						</ul>
					</div>
				</div>
			</nav>

			<nav
				class="header-nav-bottom navbar navbar-expand-lg navbar-light py-1 py-lg-0 bg-transparent"
			>
				<div class="container">
					<a class="navbar-brand" href="index.html">
						<img src="<?php echo get_template_directory_uri(); ?>/img/logo-dark.svg" />
					</a>

					<div
						class="d-none d-sm-block d-lg-none flex-column top-menu-tel-wrapper gap-1 my-2"
					>
						<a class="top-menu-tel nav-link" href="tel:84912555505">
							8 (491) 2555-55-05
						</a>
						<a class="top-menu-tel nav-link" href="tel:89521295555">
							8 (952) 129-55-55
						</a>

						<p class="nav-link d-flex align-items-center gap-3 lh-1 mb-0">
							<img src="<?php echo get_template_directory_uri(); ?>/img/ico/clock-ico.svg" />
								Без выходных с 9:00 до 21:00
						</p>
					</div>

					<button
						class="navbar-toggler mx-3 me-0 mx-lg-auto"
						type="button"
						data-bs-toggle="collapse"
						data-bs-target="#mobail-header-collapse"
						aria-controls="mobail-header-collapse"
						aria-expanded="false"
						aria-label="Toggle navigation"
					>
						<span class="navbar-toggler-icon"></span>
					</button>

					<div class="collapse navbar-collapse" id="mobail-header-collapse">
						<ul
							class="navbar-nav align-items-start align-items-lg-center ms-auto mb-2 mb-lg-0"
						>
							<li class="nav-item">
								<a class="nav-link active" href="#carouselMain">Главная</a>
							</li>
							<li class="nav-item d-none d-lg-inline">
								<img class="nav-link" src="<?php echo get_template_directory_uri(); ?>/img/ico/menu-decoration-point.svg" />
							</li>

							<li class="nav-item">
								<a class="nav-link" href="#jobs">Наши работы</a>
							</li>

							<li class="nav-item d-none d-lg-inline">
								<img class="nav-link" src="<?php echo get_template_directory_uri(); ?>/img/ico/menu-decoration-point.svg" />
							</li>

							<li class="nav-item">
								<a class="nav-link" href="#plasters">Виды штукатурки</a>
							</li>

							<li class="nav-item d-none d-lg-inline">
								<img class="nav-link" src="<?php echo get_template_directory_uri(); ?>/img/ico/menu-decoration-point.svg" />
							</li>

							<li class="nav-item">
								<a class="nav-link" href="#price">Стоимость</a>
							</li>

							<li class="nav-item d-none d-lg-inline">
								<img class="nav-link" src="<?php echo get_template_directory_uri(); ?>/img/ico/menu-decoration-point.svg" />
							</li>

							<li class="nav-item">
								<a class="nav-link" href="#contacts">Контакты</a>
							</li>

							<!-- Mobile menu -->

							<li class="nav-item d-lg-none">
								<button
									class="nav-link text-dark"
									data-bs-toggle="modal"
									data-bs-target="#callbackModal"
								>
									Обратный звонок
								</button>
							</li>
							<li class="nav-item d-lg-none text-dark">
								<div class="local-header">
									<img
										src="<?php echo get_template_directory_uri(); ?>/img/ico/location-ico.svg"
										style="width: 10px"
										class="me-1"
									/>
									<span>гор. Москва, ул. Митинская, д. 43</span>
								</div>

								<a class="top-menu-tel nav-link fw-bold" href="tel:84912555505"
									>8 (491) 2555-55-05</a
								>
								<div class="mb-2 d-flex time-header-icon">
									<img
										src="<?php echo get_template_directory_uri(); ?>/img/ico/clock-ico.svg"
										style="width: 10px"
										class="me-1"
									/>
									<div class="time-header">
										<span>Без выходных с 9:00 до 21:00</span>
									</div>
								</div>
							</li>
							<li class="nav-item d-lg-none pb-4">
								<a class="ico-button pe-2" href="whatsapp://send?phone=+79307878068"
									><img src="<?php echo get_template_directory_uri(); ?>/img/ico/whatsapp.svg"
								/></a>
								<a class="ico-button pe-0" href="https://t.me/vasilyevr"
									><img src="<?php echo get_template_directory_uri(); ?>/img/ico/telegram.svg"
								/></a>
							</li>
							<!-- End mobile menu -->
						</ul>
					</div>
				</div>
			</nav>
		</header>

		<header id="sliding-header" class="shadow">
			<!-- Header nav bottom -->
			<nav class="header-nav-bottom navbar navbar-expand-lg navbar-light py-1 py-lg-0">
				<div class="container">
					<a class="navbar-brand" href="index.html">
						<img src="<?php echo get_template_directory_uri(); ?>/img/logo-dark.svg" />
					</a>

					<div class="d-lg-none">
						<div
							class="d-none d-sm-block d-lg-none flex-column top-menu-tel-wrapper gap-1 my-2"
						>
							<a class="top-menu-tel nav-link" href="tel:84912555505">
								8 (491) 2555-55-05
							</a>
							<a class="top-menu-tel nav-link" href="tel:89521295555">
								8 (952) 129-55-55
							</a>

							<p class="nav-link d-flex align-items-center gap-3 lh-1 mb-0">
								<img src="<?php echo get_template_directory_uri(); ?>/img/ico/clock-ico.svg" />
									Без выходных с 9:00 до 21:00
							</p>
						</div>
					</div>

					<button
						class="navbar-toggler mx-3 me-0 mx-lg-auto"
						type="button"
						data-bs-toggle="collapse"
						data-bs-target="#sliding-header-collapse"
						aria-controls="sliding-header-collapse"
						aria-expanded="false"
						aria-label="Toggle navigation"
					>
						<span class="navbar-toggler-icon"></span>
					</button>

					<div class="collapse navbar-collapse" id="sliding-header-collapse">
						<ul
							class="navbar-nav align-items-start align-items-lg-center ms-auto mb-2 mb-lg-0"
						>
							<li class="nav-item">
								<a class="nav-link active" href="#carouselMain">Главная</a>
							</li>
							<li class="nav-item d-none d-lg-inline">
								<img class="nav-link" src="<?php echo get_template_directory_uri(); ?>/img/ico/menu-decoration-point.svg" />
							</li>

							<li class="nav-item">
								<a class="nav-link" href="#jobs">Наши работы</a>
							</li>

							<li class="nav-item d-none d-lg-inline">
								<img class="nav-link" src="<?php echo get_template_directory_uri(); ?>/img/ico/menu-decoration-point.svg" />
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#plasters">Виды штукатурки</a>
							</li>
							<li class="nav-item d-none d-lg-inline">
								<img class="nav-link" src="<?php echo get_template_directory_uri(); ?>/img/ico/menu-decoration-point.svg" />
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#price">Стоимость</a>
							</li>

							<li class="nav-item d-none d-lg-inline">
								<img class="nav-link" src="<?php echo get_template_directory_uri(); ?>/img/ico/menu-decoration-point.svg" />
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#contacts">Контакты</a>
							</li>

							<!-- Mobile menu -->

							<li class="nav-item d-lg-none">
								<button
									class="nav-link text-dark"
									data-bs-toggle="modal"
									data-bs-target="#callbackModal"
								>
									Обратный звонок
								</button>
							</li>
							<li class="nav-item d-lg-none text-dark">
								<div class="local-header">
									<img
										src="<?php echo get_template_directory_uri(); ?>/img/ico/location-ico.svg"
										style="width: 10px"
										class="me-1"
									/>
									<span>гор. Москва, ул. Митинская, д. 43</span>
								</div>

								<a class="top-menu-tel nav-link" href="tel:84912555505"
									>8 (491) 2555-55-05</a
								>
								<div class="mb-2 d-flex time-header-icon">
									<img
										src="<?php echo get_template_directory_uri(); ?>/img/ico/clock-ico.svg"
										style="width: 10px; position: relative; top: 2px"
										class="me-1 mb-2"
									/>
									<div class="time-header">
										<span>Без выходных с 9:00 до 21:00</span>
									</div>
								</div>
							</li>
							<li class="nav-item d-lg-none pb-4">
								<a class="ico-button pe-2" href="whatsapp://send?phone=+79307878068"
									><img src="<?php echo get_template_directory_uri(); ?>/img/ico/whatsapp.svg"
								/></a>
								<a class="ico-button pe-0" href="https://t.me/vasilyevr"
									><img src="<?php echo get_template_directory_uri(); ?>/img/ico/telegram.svg"
								/></a>
							</li>
							<!-- End mobile menu -->
						</ul>
					</div>
				</div>
			</nav>
			<!-- /Header nav bottom -->
		</header>

		<div id="carouselMain">
			<div class="carousel-inner">
				<div class="carousel-background"></div>
				<div class="carousel-content">
					<div class="container">
						<div class="row justify-content-center">
							<div class="col">
								<h1 class="carousel-title">Идеально ровная штукатурка</h1>

								<h2 class="carousel-subtitle">Ручная и механизированная</h2>

								<p class="carousel-text">
									Выполним штукатурные работы на 15% ниже, чем у кого-либо в
									Рязани
								</p>

								<div class="row align-items-center mb-2">
									<div class="col-md-6 col-lg-3 mb-2 mb-md-4">
										<div class="row align-items-center ico-wrapper">
											<div class="col-2 col-lg-3">
												<img
													src="<?php echo get_template_directory_uri(); ?>/img/ico/home-icon-1.svg"
													class="img-fluid home-ico"
												/>
											</div>
											<div class="col-10 col-lg-9">
												<p class="advantage-text text-start mb-0">
													Опыт более 10 лет - работаем с гарантией
													качества
												</p>
											</div>
										</div>
									</div>

									<div class="col-md-6 col-lg-3 mb-2 mb-md-4">
										<div class="row align-items-center ico-wrapper">
											<div class="col-2 col-lg-3">
												<img
													src="<?php echo get_template_directory_uri(); ?>/img/ico/home-icon-2.svg"
													class="img-fluid home-ico"
												/>
											</div>
											<div class="col-10 col-lg-9">
												<p class="advantage-text text-start mb-0">
													Идеально ровные стены - углы 90°, без перепадов
												</p>
											</div>
										</div>
									</div>

									<div class="col-md-6 col-lg-3 mb-2 mb-md-4">
										<div class="row align-items-center ico-wrapper">
											<div class="col-2 col-lg-3">
												<img
													src="<?php echo get_template_directory_uri(); ?>/img/ico/home-icon-3.svg"
													class="img-fluid home-ico"
												/>
											</div>
											<div class="col-10 col-lg-9">
												<p class="advantage-text text-start mb-0">
													Штукатурка по маякам и грунтовке - точная
													геометрия без дефектов
												</p>
											</div>
										</div>
									</div>

									<div class="col-md-6 col-lg-3 mb-2 mb-md-4">
										<div class="row align-items-center ico-wrapper">
											<div class="col-2 col-lg-3">
												<img
													src="<?php echo get_template_directory_uri(); ?>/img/ico/home-icon-4.svg"
													class="img-fluid home-ico"
												/>
											</div>
											<div class="col-10 col-lg-9">
												<p class="advantage-text text-start mb-0">
													Бесплатный замер и консультация - честная цена
													без сюрпризов
												</p>
											</div>
										</div>
									</div>
								</div>

								<button
									type="button"
									class="btn"
									data-bs-toggle="modal"
									data-bs-target="#callbackModal"
								>
									Рассчитать стоимость
								</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<section class="section text-dark section-about section-grid" id="jobs">
			<div class="container">
				<div class="row">
					<div class="section-title text-center">
						<h2>Примеры наших работ</h2>
						<img src="<?php echo get_template_directory_uri(); ?>/img/ico/points.svg" alt="Точки" class="img-fluid" />
					</div>

					<div class="col-12 col-md-6 section-image mb-3">
						<div
							id="carousel-1"
							class="carousel slide"
							data-bs-ride="false"
							data-bs-interval="false"
						>
							<div class="carousel-inner rounded">
								<!-- .shadow -->
								<div class="carousel-item gallery-2691-wrapper active">
									<button
										class="gallery-2691"
										onclick="openGallery('carousel-1')"
									>
										<div
											class="single-product-img approximation img-wrapper position-relative"
										>
											<img
												src="<?php echo get_template_directory_uri(); ?>/img/single-product-img/single-product-img-1.jpg"
												class="d-block w-100"
												loading="lazy"
												alt="Работа 1-1"
											/>
											<div class="overlay">
												<img
													src="<?php echo get_template_directory_uri(); ?>/img/ico/zoom-icon.svg"
													alt="Zoom"
													class="zoom-icon"
												/>
											</div>
										</div>
									</button>
								</div>
								<div class="carousel-item gallery-2691-wrapper">
									<button
										class="gallery-2691"
										onclick="openGallery('carousel-1')"
									>
										<div class="single-product-img approximation">
											<img
												src="<?php echo get_template_directory_uri(); ?>/img/single-product-img/single-product-img-2.jpg"
												class="d-block w-100"
												loading="lazy"
												alt="Работа 1-2"
											/>
											<div class="overlay">
												<img
													src="<?php echo get_template_directory_uri(); ?>/img/ico/zoom-icon.svg"
													alt="Zoom"
													class="zoom-icon"
												/>
											</div>
										</div>
									</button>
								</div>
							</div>
							<button
								class="carousel-control-prev"
								type="button"
								data-bs-target="#carousel-1"
								data-bs-slide="prev"
							>
								<span class="carousel-control-prev-icon" aria-hidden="true"></span>
								<span class="visually-hidden">Previous</span>
							</button>
							<button
								class="carousel-control-next"
								type="button"
								data-bs-target="#carousel-1"
								data-bs-slide="next"
							>
								<span class="carousel-control-next-icon" aria-hidden="true"></span>
								<span class="visually-hidden">Next</span>
							</button>
						</div>
					</div>

					<div class="col-12 col-md-6 section-image mb-3">
						<div
							id="carousel-2"
							class="carousel slide"
							data-bs-ride="false"
							data-bs-interval="false"
						>
							<div class="carousel-inner rounded">
								<!-- .shadow -->
								<div class="carousel-item gallery-2691-wrapper active">
									<button
										class="gallery-2691"
										onclick="openGallery('carousel-2')"
									>
										<div
											class="single-product-img approximation img-wrapper position-relative"
										>
											<img
												src="<?php echo get_template_directory_uri(); ?>/img/single-product-img/single-product-img-2.jpg"
												class="d-block w-100"
												loading="lazy"
												alt="Работа 2-1"
											/>
											<div class="overlay">
												<img
													src="<?php echo get_template_directory_uri(); ?>/img/ico/zoom-icon.svg"
													alt="Zoom"
													class="zoom-icon"
												/>
											</div>
										</div>
									</button>
								</div>
								<div class="carousel-item gallery-2691-wrapper">
									<button
										class="gallery-2691"
										onclick="openGallery('carousel-2')"
									>
										<div class="single-product-img approximation">
											<img
												src="<?php echo get_template_directory_uri(); ?>/img/single-product-img/single-product-img-1.jpg"
												class="d-block w-100"
												loading="lazy"
												alt="Работа 2-2"
											/>
											<div class="overlay">
												<img
													src="<?php echo get_template_directory_uri(); ?>/img/ico/zoom-icon.svg"
													alt="Zoom"
													class="zoom-icon"
												/>
											</div>
										</div>
									</button>
								</div>
							</div>
							<button
								class="carousel-control-prev"
								type="button"
								data-bs-target="#carousel-2"
								data-bs-slide="prev"
							>
								<span class="carousel-control-prev-icon" aria-hidden="true"></span>
								<span class="visually-hidden">Previous</span>
							</button>
							<button
								class="carousel-control-next"
								type="button"
								data-bs-target="#carousel-2"
								data-bs-slide="next"
							>
								<span class="carousel-control-next-icon" aria-hidden="true"></span>
								<span class="visually-hidden">Next</span>
							</button>
						</div>
					</div>

					<div class="col-12 col-md-6 section-image mb-3">
						<div
							id="carousel-3"
							class="carousel slide"
							data-bs-ride="false"
							data-bs-interval="false"
						>
							<div class="carousel-inner rounded">
								<!-- .shadow -->
								<div class="carousel-item gallery-2691-wrapper active">
									<button
										class="gallery-2691"
										onclick="openGallery('carousel-3')"
									>
										<div
											class="single-product-img approximation img-wrapper position-relative"
										>
											<img
												src="<?php echo get_template_directory_uri(); ?>/img/single-product-img/single-product-img-3.jpg"
												class="d-block w-100"
												loading="lazy"
												alt="3"
											/>
											<div class="overlay">
												<img
													src="<?php echo get_template_directory_uri(); ?>/img/ico/zoom-icon.svg"
													alt="Zoom"
													class="zoom-icon"
												/>
											</div>
										</div>
									</button>
								</div>
								<div class="carousel-item gallery-2691-wrapper">
									<button
										class="gallery-2691"
										onclick="openGallery('carousel-3')"
									>
										<div class="single-product-img approximation">
											<img
												src="<?php echo get_template_directory_uri(); ?>/img/single-product-img/single-product-img-2.jpg"
												class="d-block w-100"
												loading="lazy"
												alt="3-1"
											/>
											<div class="overlay">
												<img
													src="<?php echo get_template_directory_uri(); ?>/img/ico/zoom-icon.svg"
													alt="Zoom"
													class="zoom-icon"
												/>
											</div>
										</div>
									</button>
								</div>
							</div>
							<button
								class="carousel-control-prev"
								type="button"
								data-bs-target="#carousel-3"
								data-bs-slide="prev"
							>
								<span class="carousel-control-prev-icon" aria-hidden="true"></span>
								<span class="visually-hidden">Previous</span>
							</button>
							<button
								class="carousel-control-next"
								type="button"
								data-bs-target="#carousel-3"
								data-bs-slide="next"
							>
								<span class="carousel-control-next-icon" aria-hidden="true"></span>
								<span class="visually-hidden">Next</span>
							</button>
						</div>
					</div>

					<div class="col-12 col-md-6 section-image mb-3">
						<div
							id="carousel-4"
							class="carousel slide"
							data-bs-ride="false"
							data-bs-interval="false"
						>
							<div class="carousel-inner rounded">
								<!-- .shadow -->
								<div class="carousel-item gallery-2691-wrapper active">
									<button
										class="gallery-2691"
										onclick="openGallery('carousel-4')"
									>
										<div
											class="single-product-img approximation img-wrapper position-relative"
										>
											<img
												src="<?php echo get_template_directory_uri(); ?>/img/single-product-img/single-product-img-4.jpg"
												class="d-block w-100"
												loading="lazy"
												alt="4-1"
											/>
											<div class="overlay">
												<img
													src="<?php echo get_template_directory_uri(); ?>/img/ico/zoom-icon.svg"
													alt="Zoom"
													class="zoom-icon"
												/>
											</div>
										</div>
									</button>
								</div>
								<div class="carousel-item gallery-2691-wrapper">
									<button
										class="gallery-2691"
										onclick="openGallery('carousel-4')"
									>
										<div class="single-product-img approximation">
											<img
												src="<?php echo get_template_directory_uri(); ?>/img/single-product-img/single-product-img-1.jpg"
												class="d-block w-100"
												loading="lazy"
												alt="4-2"
											/>
											<div class="overlay">
												<img
													src="<?php echo get_template_directory_uri(); ?>/img/ico/zoom-icon.svg"
													alt="Zoom"
													class="zoom-icon"
												/>
											</div>
										</div>
									</button>
								</div>
							</div>
							<button
								class="carousel-control-prev"
								type="button"
								data-bs-target="#carousel-4"
								data-bs-slide="prev"
							>
								<span class="carousel-control-prev-icon" aria-hidden="true"></span>
								<span class="visually-hidden">Previous</span>
							</button>
							<button
								class="carousel-control-next"
								type="button"
								data-bs-target="#carousel-4"
								data-bs-slide="next"
							>
								<span class="carousel-control-next-icon" aria-hidden="true"></span>
								<span class="visually-hidden">Next</span>
							</button>
						</div>
					</div>

					<div class="col-12 col-md-6 section-image mb-3">
						<div
							id="carousel-5"
							class="carousel slide"
							data-bs-ride="false"
							data-bs-interval="false"
						>
							<div class="carousel-inner rounded">
								<!-- .shadow -->
								<div class="carousel-item gallery-2691-wrapper active">
									<button
										class="gallery-2691"
										onclick="openGallery('carousel-5')"
									>
										<div
											class="single-product-img approximation img-wrapper position-relative"
										>
											<img
												src="<?php echo get_template_directory_uri(); ?>/img/single-product-img/single-product-img-5.jpg"
												class="d-block w-100"
												loading="lazy"
												alt="5-1"
											/>
											<div class="overlay">
												<img
													src="<?php echo get_template_directory_uri(); ?>/img/ico/zoom-icon.svg"
													alt="Zoom"
													class="zoom-icon"
												/>
											</div>
										</div>
									</button>
								</div>
								<div class="carousel-item gallery-2691-wrapper">
									<button
										class="gallery-2691"
										onclick="openGallery('carousel-5')"
									>
										<div class="single-product-img approximation">
											<img
												src="<?php echo get_template_directory_uri(); ?>/img/single-product-img/single-product-img-2.jpg"
												class="d-block w-100"
												loading="lazy"
												alt="5-2"
											/>
											<div class="overlay">
												<img
													src="<?php echo get_template_directory_uri(); ?>/img/ico/zoom-icon.svg"
													alt="Zoom"
													class="zoom-icon"
												/>
											</div>
										</div>
									</button>
								</div>
							</div>
							<button
								class="carousel-control-prev"
								type="button"
								data-bs-target="#carousel-5"
								data-bs-slide="prev"
							>
								<span class="carousel-control-prev-icon" aria-hidden="true"></span>
								<span class="visually-hidden">Previous</span>
							</button>
							<button
								class="carousel-control-next"
								type="button"
								data-bs-target="#carousel-5"
								data-bs-slide="next"
							>
								<span class="carousel-control-next-icon" aria-hidden="true"></span>
								<span class="visually-hidden">Next</span>
							</button>
						</div>
					</div>

					<div class="col-12 col-md-6 section-image mb-3">
						<div
							id="carousel-6"
							class="carousel slide"
							data-bs-ride="false"
							data-bs-interval="false"
						>
							<div class="carousel-inner rounded">
								<!-- .shadow -->
								<div class="carousel-item gallery-2691-wrapper active">
									<button
										class="gallery-2691"
										onclick="openGallery('carousel-6')"
									>
										<div
											class="single-product-img approximation img-wrapper position-relative"
										>
											<img
												src="<?php echo get_template_directory_uri(); ?>/img/single-product-img/single-product-img-6.jpg"
												class="d-block w-100"
												loading="lazy"
												alt="6-1"
											/>
											<div class="overlay">
												<img
													src="<?php echo get_template_directory_uri(); ?>/img/ico/zoom-icon.svg"
													alt="Zoom"
													class="zoom-icon"
												/>
											</div>
										</div>
									</button>
								</div>
								<div class="carousel-item gallery-2691-wrapper">
									<button
										class="gallery-2691"
										onclick="openGallery('carousel-6')"
									>
										<div class="single-product-img approximation">
											<img
												src="<?php echo get_template_directory_uri(); ?>/img/single-product-img/single-product-img-1.jpg"
												class="d-block w-100"
												loading="lazy"
												alt="6-1"
											/>
											<div class="overlay">
												<img
													src="<?php echo get_template_directory_uri(); ?>/img/ico/zoom-icon.svg"
													alt="Zoom"
													class="zoom-icon"
												/>
											</div>
										</div>
									</button>
								</div>
							</div>
							<button
								class="carousel-control-prev"
								type="button"
								data-bs-target="#carousel-6"
								data-bs-slide="prev"
							>
								<span class="carousel-control-prev-icon" aria-hidden="true"></span>
								<span class="visually-hidden">Previous</span>
							</button>
							<button
								class="carousel-control-next"
								type="button"
								data-bs-target="#carousel-6"
								data-bs-slide="next"
							>
								<span class="carousel-control-next-icon" aria-hidden="true"></span>
								<span class="visually-hidden">Next</span>
							</button>
						</div>
					</div>

					<div class="text-center mt-5">
						<button type="button" class="btn">Показать еще</button>
					</div>
				</div>
			</div>
		</section>

		<!-- Рассчитаем точную стоимость штукатурки -->
		<section class="section section-half price-section bg-grey">
			<div class="d-flex flex-wrap half-bg">
				<!-- Левая часть с картинкой (скрывается на мобилках) -->
				<div class="right-part left-part d-none d-md-block">
					<img
						src="<?php echo get_template_directory_uri(); ?>/img/order-left-gradient-section-bg.jpg"
						alt="Изображение"
						class="img-cover"
					/>
				</div>
				<!-- Правая часть с фоном -->
				<div class="left-part flex-grow-1"></div>
			</div>

			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-6"></div>
					<div class="col-md-6">
						<h2 class="mb-3">Рассчитаем точную стоимость штукатурки</h2>

						<p class="order-description mb-3">
							Для расчета оставьте заявку на сайте или напишите нам в мессенджер. Это
							бесплатно и не к чему Вас не обязывает.
						</p>

						<img src="<?php echo get_template_directory_uri(); ?>/img/ico/points.svg" alt="Точки" class="img-fluid img-points" />

						<br />

						<button
							type="button"
							class="btn"
							data-bs-toggle="modal"
							data-bs-target="#callbackModal"
						>
							Оставить заявку
						</button>

						<div class="row justify-content-md-end">
							<div class="col">
								<ul class="nav gap-3">
									<li class="nav-item">
										<a
											class="nav-link ico-button"
											href="https://t.me/+79209518178"
										>
											<img src="<?php echo get_template_directory_uri(); ?>/img/ico/telegram.svg" />
										</a>
									</li>

									<li class="nav-item">
										<a
											class="nav-link ico-button"
											href="https://wa.me/79209518178?web=1&amp;app_absent=1"
										>
											<img src="<?php echo get_template_directory_uri(); ?>/img/ico/whatsapp.svg" />
										</a>
									</li>

									<li class="nav-item">
										<a
											class="nav-link ico-button"
											href="https://t.me/+79209518178"
										>
											<img src="<?php echo get_template_directory_uri(); ?>/img/ico/vider.svg" />
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- Механизированная или ручная штукатурка -->
		<section class="section section-plaster" id="plasters">
			<div class="container">
				<div class="row">
					<div class="section-title text-center">
						<h2>Механизированная или ручная штукатурка</h2>
						<p class="lh-1">Что выбрать?</p>
						<img src="<?php echo get_template_directory_uri(); ?>/img/ico/points.svg" alt="Точки" class="img-fluid" />
					</div>

					<div class="col-lg-6 mb-4">
						<div class="row">
							<div class="col-3 col-md-2">
								<img src="<?php echo get_template_directory_uri(); ?>/img/ico/production-ico.svg" class="img-fluid" />
							</div>
							<div class="col-9 col-md-10">
								<h3 class="advantage-title text-start">
									Преимущества механизированной штукатурки
								</h3>
								<ul>
									<li>В 3 раза быстрее, чем ручной метод.</li>

									<li>
										Экономнее на 30-40% за счет снижения затрат на материалы и
										работу.
									</li>

									<li>Минимальный риск трещен и отслоений.</li>

									<li>Высокоточное выравнивание по маякам.</li>
								</ul>
							</div>
						</div>
					</div>

					<div class="col-lg-6 mb-4">
						<div class="row">
							<div class="col-3 col-md-2">
								<img src="<?php echo get_template_directory_uri(); ?>/img/ico/worker.svg" class="img-fluid" />
							</div>
							<div class="col-9 col-md-10">
								<h3 class="advantage-title text-start">
									Преимущества ручной штукатурки
								</h3>
								<ul>
									<li>
										Оптимальна для небольших помещений и сложных поверхностей.
									</li>
									<li>
										Подходит для откосов, дверных проемов, труднодоступных мест.
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- Что входит в услугу -->
		<section class="section section-what-service bg-grey">
			<div class="container">
				<div class="row">
					<div class="section-title text-center">
						<h2>Что входит в услугу</h2>
						<img src="<?php echo get_template_directory_uri(); ?>/img/ico/points.svg" alt="Точки" class="img-fluid" />
					</div>

					<div class="col-md-6 col-lg-4 mb-3 mb-md-4 pb-0 pb-md-3">
						<div class="row align-items-center what-service-text">
							<div class="col-3 col-md-2 p-0">
								<img src="<?php echo get_template_directory_uri(); ?>/img/ico/1.svg" class="img-fluid" />
							</div>
							<div class="col-9 col-md-10">
								<p class="advantage-text text-start">
									Защитные пленки - окна, двери, кабели остаются чистыми.
								</p>
							</div>
						</div>
					</div>

					<div class="col-md-6 col-lg-4 mb-3 mb-md-4 pb-0 pb-md-3">
						<div class="row align-items-center what-service-text">
							<div class="col-3 col-md-2 p-0">
								<img src="<?php echo get_template_directory_uri(); ?>/img/ico/2.svg" class="img-fluid" />
							</div>
							<div class="col-9 col-md-10">
								<p class="advantage-text text-start">
									Доставка, разгрузка и подъем материалов.
								</p>
							</div>
						</div>
					</div>

					<div class="col-md-6 col-lg-4 mb-3 mb-md-4 pb-0 pb-md-3">
						<div class="row align-items-center what-service-text">
							<div class="col-3 col-md-2 p-0">
								<img src="<?php echo get_template_directory_uri(); ?>/img/ico/3.svg" class="img-fluid" />
							</div>
							<div class="col-9 col-md-10">
								<p class="advantage-text text-start">
									Подготовка поверхности - грунтовка, бетонконтакт, установка
									маяков.
								</p>
							</div>
						</div>
					</div>

					<div class="col-md-6 col-lg-4 mb-3 mb-md-4 pb-0 pb-md-3">
						<div class="row align-items-center what-service-text">
							<div class="col-3 col-md-2 p-0">
								<img src="<?php echo get_template_directory_uri(); ?>/img/ico/4.svg" class="img-fluid" />
							</div>
							<div class="col-9 col-md-10">
								<p class="advantage-text text-start">
									Штукатурка стен - ровная геометрия, точная толщина слоя.
								</p>
							</div>
						</div>
					</div>

					<div class="col-md-6 col-lg-4 mb-3 mb-md-4 pb-0 pb-md-3">
						<div class="row align-items-center what-service-text">
							<div class="col-3 col-md-2 p-0">
								<img src="<?php echo get_template_directory_uri(); ?>/img/ico/5.svg" class="img-fluid" />
							</div>
							<div class="col-9 col-md-10">
								<p class="advantage-text text-start">
									Глянцевание - гладкая поверхность, без изъянов.
								</p>
							</div>
						</div>
					</div>

					<div class="col-md-6 col-lg-4 mb-3 mb-md-4 pb-0 pb-md-3">
						<div class="row align-items-center what-service-text">
							<div class="col-3 col-md-2 p-0">
								<img src="<?php echo get_template_directory_uri(); ?>/img/ico/6.svg" class="img-fluid" />
							</div>
							<div class="col-9 col-md-10">
								<p class="advantage-text text-start">
									Удаление маяков - без пустот и необходимости повторного ремонта.
								</p>
							</div>
						</div>
					</div>

					<div class="col-md-6 col-lg-4 mb-3 mb-md-4 pb-0 pb-md-3">
						<div class="row align-items-center what-service-text">
							<div class="col-3 col-md-2 p-0">
								<img src="<?php echo get_template_directory_uri(); ?>/img/ico/7.svg" class="img-fluid" />
							</div>
							<div class="col-9 col-md-10">
								<p class="advantage-text text-start">Вынос строительного мусора.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- Стоимость штукатурки стен -->
		<section class="section section-plastering-walls" id="price">
			<div class="container">
				<div class="row">
					<div class="section-title text-center">
						<h2>Стоимость штукатурки стен</h2>
						<img src="<?php echo get_template_directory_uri(); ?>/img/ico/points.svg" alt="Точки" class="img-fluid" />
					</div>

					<div class="col-md-6 col-lg-3 mb-4">
						<div class="d-flex flex-column h-100">
							<h3 class="advantage-text text-start">
								Простая штукатурка стен (гипсовая/цементная)
							</h3>

							<p class="advantage-text text-start mt-auto">
								<strong>от ₽ 300 кв.м</strong>
							</p>
							<button
								type="button"
								class="btn"
								data-bs-toggle="modal"
								data-bs-target="#callbackModal"
							>
								Рассчитать точную стоимость
							</button>
						</div>
					</div>

					<div class="col-md-6 col-lg-3 mb-4">
						<div class="d-flex flex-column h-100">
							<h3 class="advantage-text text-start">
								Улучшенная штукатурка стен (с глянцеванием)
							</h3>

							<p class="advantage-text text-start mt-auto">
								<strong>от ₽ 400 кв.м</strong>
							</p>
							<button
								type="button"
								class="btn"
								data-bs-toggle="modal"
								data-bs-target="#callbackModal"
							>
								Рассчитать точную стоимость
							</button>
						</div>
					</div>

					<div class="col-md-6 col-lg-3 mb-4">
						<div class="d-flex flex-column h-100">
							<h3 class="advantage-text text-start">
								Высококачественная штукатурка стен (идеально гладка)
							</h3>

							<p class="advantage-text text-start mt-auto">
								<strong>от ₽ 500 кв.м</strong>
							</p>
							<button
								type="button"
								class="btn"
								data-bs-toggle="modal"
								data-bs-target="#callbackModal"
							>
								Рассчитать точную стоимость
							</button>
						</div>
					</div>

					<div class="col-md-6 col-lg-3 mb-4">
						<div class="d-flex flex-column h-100">
							<h3 class="advantage-text text-start">
								Механизированная штукатурка стен гипсовой и цементной смесью
							</h3>

							<p class="advantage-text text-start mt-auto">
								<strong>от ₽ 400 кв.м</strong>
							</p>
							<button
								type="button"
								class="btn"
								data-bs-toggle="modal"
								data-bs-target="#callbackModal"
							>
								Рассчитать точную стоимость
							</button>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- Стоимость дополнительных услуг -->
		<section class="section section-additional-services bg-grey" >
			<div class="container">
				<div class="row">
					<div class="section-title text-center">
						<h2>Стоимость дополнительных услуг</h2>
						<img src="<?php echo get_template_directory_uri(); ?>/img/ico/points.svg" alt="Точки" class="img-fluid" />
					</div>

					<div class="col">
						<div class="price-item">
							<span class="price-name">Штукатурка откосов</span>
							<span class="price-value price-text">от 550 руб/п.м</span>
						</div>
						<div class="price-item">
							<span class="price-name">Выравнивание углов под 90°</span>
							<span class="price-value price-text">от 1 000 угол</span>
						</div>
						<div class="price-item">
							<span class="price-name">Шпаклевание стен вручную</span>
							<span class="price-value price-text">от 350 руб/кв.м</span>
						</div>
						<div class="price-item">
							<span class="price-name"
								>Адгезия (улучшение сцепления с поверхностью)</span
							>
							<span class="price-value price-text">от 350 руб/кв.м</span>
						</div>
						<div class="price-item">
							<span class="price-name"
								>Закупка и доставка высококачественного материала</span
							>
							<span class="price-value price-text">от 450 руб/кв.м</span>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- Нашли кто делает дешевле чем мы? -->
		<section class="section section-half section-who-makes">
			<div class="d-flex flex-wrap half-bg">
				<!-- Левая часть с фоном -->
				<div class="left-part flex-grow-1"></div>

				<!-- Правая часть с картинкой (скрывается на мобилках) -->
				<div class="right-part d-none d-md-block">
					<img
						src="<?php echo get_template_directory_uri(); ?>/img/order-left-gradient-section-bg-two.jpg"
						alt="Изображение"
						class="img-cover"
					/>
				</div>
			</div>

			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-6 text-md-end">
						<h2 class="mb-3">Нашли кто делает дешевле чем мы?</h2>

						<p class="order-description mb-3">
							Оставьте заявку, укажите ссылку на стоимость, если все подтвердится, мы
							сделаем Вам предложение еще выгоднее!
						</p>

						<img src="<?php echo get_template_directory_uri(); ?>/img/ico/points.svg" alt="Точки" class="img-fluid img-points" />

						<br />

						<button
							type="button"
							class="btn"
							data-bs-toggle="modal"
							data-bs-target="#callbackModal"
						>
							Получить скидку
						</button>

						<div class="row justify-content-md-end">
							<div class="col">
								<ul class="nav justify-content-md-end gap-3">
									<li class="nav-item">
										<a
											class="nav-link ico-button"
											href="https://t.me/+79209518178"
										>
											<img src="<?php echo get_template_directory_uri(); ?>/img/ico/telegram.svg" />
										</a>
									</li>

									<li class="nav-item">
										<a
											class="nav-link ico-button"
											href="https://wa.me/79209518178?web=1&amp;app_absent=1"
										>
											<img src="<?php echo get_template_directory_uri(); ?>/img/ico/whatsapp.svg" />
										</a>
									</li>

									<li class="nav-item">
										<a
											class="nav-link ico-button"
											href="https://t.me/+79209518178"
										>
											<img src="<?php echo get_template_directory_uri(); ?>/img/ico/vider.svg" />
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>

					<div class="col-md-6"></div>
				</div>
			</div>
		</section>

		<!-- О нас -->
		<section class="section section-about bg-grey">
			<div class="container">
				<div class="row justify-content-center">
					<div class="section-title text-center">
						<h2>О нас</h2>
						<img src="<?php echo get_template_directory_uri(); ?>/img/ico/points.svg" alt="Точки" class="img-fluid" />
					</div>

					<div class="col-12 col-md-6 mb-4 mb-md-0 section-image">
						<div
							id="carousel-2691"
							class="carousel slide"
							data-bs-ride="false"
							data-bs-interval="false"
						>
							<div class="carousel-inner rounded">
								<!-- .shadow -->
								<div class="carousel-item gallery-2691-wrapper active">
									<button
										class="gallery-2691"
										onclick="openGallery('carousel-2691')"
									>
										<div
											class="single-product-img approximation img-wrapper position-relative"
										>
											<img
												src="<?php echo get_template_directory_uri(); ?>/img/about.jpg"
												class="d-block w-100"
												loading="lazy"
												alt="О нашей компании"
											/>
											<div class="overlay">
												<img
													src="<?php echo get_template_directory_uri(); ?>/img/ico/zoom-icon.svg"
													alt="Zoom"
													class="zoom-icon"
												/>
											</div>
										</div>
									</button>
								</div>
								<div class="carousel-item gallery-2691-wrapper">
									<button
										class="gallery-2691"
										onclick="openGallery('carousel-2691')"
									>
										<div class="single-product-img approximation">
											<img
												src="<?php echo get_template_directory_uri(); ?>/img/single-product-<?php echo get_template_directory_uri(); ?>/img/single-product-img-1.jpg"
												class="d-block w-100"
												loading="lazy"
												alt="Наша команда"
											/>
											<div class="overlay">
												<img
													src="<?php echo get_template_directory_uri(); ?>/img/ico/zoom-icon.svg"
													alt="Zoom"
													class="zoom-icon"
												/>
											</div>
										</div>
									</button>
								</div>
							</div>
							<button
								class="carousel-control-prev"
								type="button"
								data-bs-target="#carousel-2691"
								data-bs-slide="prev"
							>
								<span class="carousel-control-prev-icon" aria-hidden="true"></span>
								<span class="visually-hidden">Previous</span>
							</button>
							<button
								class="carousel-control-next"
								type="button"
								data-bs-target="#carousel-2691"
								data-bs-slide="next"
							>
								<span class="carousel-control-next-icon" aria-hidden="true"></span>
								<span class="visually-hidden">Next</span>
							</button>
						</div>
					</div>

					<!-- Пустая колонка -->
					<div class="d-none d-xl-block col-xl-1"></div>

					<div class="col-12 col-md-5 text-dark">
						<p>
							Наша компания уже свыше десяти лет выполняет штукатурные и другие
							строительные и отделочные работы. В максимально короткие сроки и с
							требуемым уровнем качества, мы сделаем штукатурку стен в квартире,
							офисе, коттедже «под ключ». Наша работа нацелена на достижения самого
							лучшего результата. Для нашей команды не проблема подготовить стены для
							дальнейшей отделки. Высокий уровень мастерства — это именно то, что
							позволяет нам добиваться самого лучшего результата на объектах любой
							сложности. Весь наш профессионализм мы вкладываем в работу для Вас.
						</p>
					</div>
				</div>
			</div>
		</section>

		<!-- Наши преимущества -->
		<section class="section section-advantage">
			<div class="container">
				<div class="row">
					<div class="section-title text-center">
						<h2>Наши преимущества</h2>
						<img src="<?php echo get_template_directory_uri(); ?>/img/ico/points.svg" alt="Точки" class="img-fluid" />
					</div>

					<div class="col-lg-6 mb-4">
						<div class="row">
							<div class="col-3 col-md-2">
								<img src="<?php echo get_template_directory_uri(); ?>/img/ico/checkbox.svg" class="img-fluid" />
							</div>
							<div class="col-9 col-md-10 align-content-center">
								<h3 class="advantage-title text-start">Глянцевание</h3>
								<p class="advantage-text text-start">
									Гладкая поверхность, готовая под финишную отделку.
								</p>
							</div>
						</div>
					</div>
					<div class="col-lg-6 mb-4">
						<div class="row">
							<div class="col-3 col-md-2">
								<img src="<?php echo get_template_directory_uri(); ?>/img/ico/checkbox.svg" class="img-fluid" />
							</div>
							<div class="col-9 col-md-10 align-content-center">
								<h3 class="advantage-title text-start">Качественные материалы</h3>
								<p class="advantage-text text-start">
									Закупаем материалы у проверенных поставщиков.
								</p>
							</div>
						</div>
					</div>
					<div class="col-lg-6 mb-4">
						<div class="row">
							<div class="col-3 col-md-2">
								<img src="<?php echo get_template_directory_uri(); ?>/img/ico/checkbox.svg" class="img-fluid" />
							</div>
							<div class="col-9 col-md-10 align-content-center">
								<h3 class="advantage-title text-start">Чистота на объекте</h3>
								<p class="advantage-text text-start">
									Защищаем поверхность, убираем мусор.
								</p>
							</div>
						</div>
					</div>
					<div class="col-lg-6 mb-4">
						<div class="row">
							<div class="col-3 col-md-2">
								<img src="<?php echo get_template_directory_uri(); ?>/img/ico/checkbox.svg" class="img-fluid" />
							</div>
							<div class="col-9 col-md-10 align-content-center">
								<h3 class="advantage-title text-start">
									Бесплатный замер и консультация
								</h3>
								<p class="advantage-text text-start">
									Честная цена, «без сюрпризов».
								</p>
							</div>
						</div>
					</div>

					<div class="col-lg-6 mb-4">
						<div class="row">
							<div class="col-3 col-md-2">
								<img src="<?php echo get_template_directory_uri(); ?>/img/ico/checkbox.svg" class="img-fluid" />
							</div>
							<div class="col-9 col-md-10 align-content-center">
								<h3 class="advantage-title text-start">Опыт работы более 10 лет</h3>
								<p class="advantage-text text-start">
									Всегда работаем с гарантией качества.
								</p>
							</div>
						</div>
					</div>

					<div class="col-lg-6 mb-4">
						<div class="row">
							<div class="col-3 col-md-2">
								<img src="<?php echo get_template_directory_uri(); ?>/img/ico/checkbox.svg" class="img-fluid" />
							</div>
							<div class="col-9 col-md-10 align-content-center">
								<h3 class="advantage-title text-start">
									Материалы по себестоимости
								</h3>
								<p class="advantage-text text-start">
									До 30% дешевле чем у других.
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- Как заказать -->
		<section class="section section-how bg-grey">
			<div class="container">
				<div class="row">
					<div class="section-title text-center">
						<h3>Как заказать</h3>
						<img
							src="<?php echo get_template_directory_uri(); ?>/img/ico/points.svg"
							alt="Описание изображения"
							class="img-fluid"
						/>
					</div>

					<div class="row justify-content-around">
						<div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
							<div class="row align-items-center">
								<div class="col-4 text-center">
									<img src="<?php echo get_template_directory_uri(); ?>/img/ico/1_black.svg" class="img-fluid" />
								</div>
								<div class="col-4">
									<img src="<?php echo get_template_directory_uri(); ?>/img/ico/how-order-1.svg" class="img-fluid" />
								</div>
							</div>
							<div class="row pt-3">
								<div class="col text-start">
									<h3>Производим точный расчет</h3>
									<p class="mb-0">
										Оставьте заявку на сайте или напишите нам в мессенджер и мы
										сделаем точный расчет стомости работ.
									</p>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
							<div class="row align-items-center">
								<div class="col-4 text-center">
									<img src="<?php echo get_template_directory_uri(); ?>/img/ico/2_black.svg" class="img-fluid" />
								</div>
								<div class="col-4 text-start">
									<img src="<?php echo get_template_directory_uri(); ?>/img/ico/how-order-2.svg" class="img-fluid" />
								</div>
							</div>
							<div class="row pt-3">
								<div class="col text-start">
									<h3>Подготавливаем помещение</h3>
									<p class="mb-0">
										Выносим неныжные вещи, укрываем жругие ценные предметы.
									</p>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
							<div class="row align-items-center">
								<div class="col-4 text-center">
									<img src="<?php echo get_template_directory_uri(); ?>/img/ico/3_black.svg" class="img-fluid" />
								</div>
								<div class="col-4">
									<img src="<?php echo get_template_directory_uri(); ?>/img/ico/how-order-3.svg" class="img-fluid" />
								</div>
							</div>
							<div class="row pt-3">
								<div class="col text-start">
									<h3>Выполняем штукатурку</h3>
									<p class="mb-0">Выполняем работы согласно договоренности.</p>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-lg-3 mb-0">
							<div class="row align-items-center">
								<div class="col-4 text-center">
									<img src="<?php echo get_template_directory_uri(); ?>/img/ico/4_black.svg" class="img-fluid" />
								</div>
								<div class="col-4">
									<img src="<?php echo get_template_directory_uri(); ?>/img/ico/how-order-4.svg" class="img-fluid" />
								</div>
							</div>
							<div class="row pt-3">
								<div class="col text-start">
									<h3>Убираем мусор</h3>
									<p class="mb-0">
										Убираем мусор оставленный после проведенных работ.
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- Требования к помещению -->
		<section class="section section-room-requirements">
			<div class="container">
				<div class="row justify-content-lg-center">
					<div class="section-title text-center">
						<h2>Требования к помещению</h2>
						<img src="<?php echo get_template_directory_uri(); ?>/img/ico/points.svg" alt="Точки" class="img-fluid" />
					</div>

					<div class="col-md-6 col-lg-4 mb-4">
						<div class="row">
							<div class="col-3">
								<img src="<?php echo get_template_directory_uri(); ?>/img/ico/advantage-1.svg" class="img-fluid" />
							</div>
							<div class="col-9 align-content-center">
								<h3 class="advantage-title text-start">Вода</h3>
								<p class="advantage-text text-start">
									Наличие источника воды: центральное водоснабжение или
									специальная емкость под воду объемом 1 куб.м
								</p>
							</div>
						</div>
					</div>

					<div class="col-md-6 col-lg-4 mb-4">
						<div class="row">
							<div class="col-3">
								<img src="<?php echo get_template_directory_uri(); ?>/img/ico/advantage-2.svg" class="img-fluid" />
							</div>
							<div class="col-9 align-content-center">
								<h3 class="advantage-title text-start">Электричество</h3>
								<p class="advantage-text text-start">
									Наличие действующих точек подключения электричества 220В или
									380В. Помещение должно быть освещено, провода заизолированы
								</p>
							</div>
						</div>
					</div>

					<div class="col-md-6 col-lg-4 mb-4">
						<div class="row">
							<div class="col-3">
								<img src="<?php echo get_template_directory_uri(); ?>/img/ico/advantage-3.svg" class="img-fluid" />
							</div>
							<div class="col-9 align-content-center">
								<h3 class="advantage-title text-start">Температура</h3>
								<p class="advantage-text text-start">
									Температура в помещении не ниже +10° С, установлены окна (закрыт
									контур)
								</p>
							</div>
						</div>
					</div>

					<div class="col-md-6 col-lg-4 mb-4">
						<div class="row">
							<div class="col-3">
								<img src="<?php echo get_template_directory_uri(); ?>/img/ico/advantage-4.svg" class="img-fluid" />
							</div>
							<div class="col-9 align-content-center">
								<h3 class="advantage-title text-start">Канализация</h3>
								<p class="advantage-text text-start">Установлен унитаз</p>
							</div>
						</div>
					</div>

					<div class="col-md-6 col-lg-4 mb-4">
						<div class="row">
							<div class="col-3">
								<img src="<?php echo get_template_directory_uri(); ?>/img/ico/advantage-5.svg" class="img-fluid" />
							</div>
							<div class="col-9 align-content-center">
								<h3 class="advantage-title text-start">Охрана объекта</h3>
								<p class="advantage-text text-start">
									Для сохранности оборудования должна быть установлена
									металлическая дверь, либо предусмотрено помещение для хранения
									оборудования и инструмента
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- Частые вопросы -->
		<section class="section section-faq bg-grey">
			<div class="container">
				<div class="section-title text-center">
					<h2>Частые вопросы</h2>
					<img src="<?php echo get_template_directory_uri(); ?>/img/ico/points.svg" alt="Точки" class="img-fluid" />
				</div>

				<div class="col-lg-10 text-center mx-auto">
					<div class="accordion text-start" id="accordionExample">
						<div class="accordion-item mb-3">
							<h3 class="accordion-header" id="heading-1">
								<button
									class="accordion-button collapsed"
									type="button"
									data-bs-toggle="collapse"
									data-bs-target="#collapse-1"
									aria-expanded="false"
									aria-controls="collapse-1"
								>
									Частый вопрос
								</button>
							</h3>
							<div
								id="collapse-1"
								class="accordion-collapse collapse"
								aria-labelledby="heading-1"
								data-bs-parent="#accordionExample"
							>
								<div class="accordion-body">
									<p class="mb-0">
										Lorem ipsum dolor sit amet consectetur adipisicing elit.
										Porro, dolore?
									</p>
								</div>
							</div>
						</div>

						<div class="accordion-item mb-3">
							<h3 class="accordion-header" id="heading-2">
								<button
									class="accordion-button"
									type="button"
									data-bs-toggle="collapse"
									data-bs-target="#collapse-2"
									aria-expanded="true"
									aria-controls="collapse-2"
								>
									Частый вопрос
								</button>
							</h3>
							<div
								id="collapse-2"
								class="accordion-collapse collapse show"
								aria-labelledby="heading-2"
								data-bs-parent="#accordionExample"
							>
								<div class="accordion-body">
									<p class="mb-0">
										Изготовление вывески: 5 - 10 рабочих дней. На другие изделия
										распространяется этот же срок. Но если возникает
										необходимость в более коротком сроке, то можем сделать
										вывеску и в укороченный период.
									</p>
								</div>
							</div>
						</div>

						<div class="accordion-item mb-3">
							<h3 class="accordion-header" id="heading-3">
								<button
									class="accordion-button collapsed"
									type="button"
									data-bs-toggle="collapse"
									data-bs-target="#collapse-3"
									aria-expanded="false"
									aria-controls="collapse-3"
								>
									Частый вопрос
								</button>
							</h3>
							<div
								id="collapse-3"
								class="accordion-collapse collapse"
								aria-labelledby="heading-3"
								data-bs-parent="#accordionExample"
							>
								<div class="accordion-body">
									<p class="mb-0">
										Lorem ipsum dolor sit amet, consectetur adipisicing elit.
										Quidem nisi sint, corrupti magnam ab est impedit officia cum
										iure quod.
									</p>
								</div>
							</div>
						</div>

						<div class="accordion-item mb-3">
							<h3 class="accordion-header" id="heading-4">
								<button
									class="accordion-button collapsed"
									type="button"
									data-bs-toggle="collapse"
									data-bs-target="#collapse-4"
									aria-expanded="false"
									aria-controls="collapse-4"
								>
									Частый вопрос
								</button>
							</h3>
							<div
								id="collapse-4"
								class="accordion-collapse collapse"
								aria-labelledby="heading-4"
								data-bs-parent="#accordionExample"
							>
								<div class="accordion-body">
									<p class="mb-0">
										Ответ на частый вопрос. Ответ на частый вопрос. Ответ на
										частый вопрос. Ответ на частый вопрос. Ответ на частый
										вопрос. Ответ на частый вопрос. Ответ на частый вопрос.
										Ответ на частый вопрос. Ответ на частый вопрос. Ответ на
										частый вопрос. Ответ на частый вопрос. Ответ на частый
										вопрос.
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- Остались вопросы? -->
		<section class="section section-half section-faq" id="contacts">
			<div class="d-flex flex-wrap half-bg">
				<!-- Левая часть с картинкой (скрывается на мобилках) -->
				<div class="right-part left-part d-none d-md-block">
					<img
						src="<?php echo get_template_directory_uri(); ?>/img/order-left-gradient-section-bg-free.jpg"
						alt="Изображение"
						class="img-cover"
					/>
				</div>
				<!-- Правая часть с фоном -->
				<div class="left-part flex-grow-1"></div>
			</div>

			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-6"></div>
					<div class="col-md-6">
						<h2 class="mb-3">Остались вопросы?</h2>

						<p class="order-description mb-3">
							Оставьте заявку на сайте или напишите нам в мессенджер. Мы с Вами
							свяжемся в течение 15 минут и все подробно расскажем. Это бесплатно и не
							к чему Вас не обязывает.
						</p>

						<img src="<?php echo get_template_directory_uri(); ?>/img/ico/points.svg" alt="Точки" class="img-fluid img-points" />

						<br />

						<button
							type="button"
							class="btn"
							data-bs-toggle="modal"
							data-bs-target="#callbackModal"
						>
							Оставить заявку
						</button>

						<div class="row justify-content-md-end">
							<div class="col">
								<ul class="nav gap-3">
									<li class="nav-item">
										<a
											class="nav-link ico-button"
											href="https://t.me/+79209518178"
										>
											<img src="<?php echo get_template_directory_uri(); ?>/img/ico/telegram.svg" />
										</a>
									</li>

									<li class="nav-item">
										<a
											class="nav-link ico-button"
											href="https://wa.me/79209518178?web=1&amp;app_absent=1"
										>
											<img src="<?php echo get_template_directory_uri(); ?>/img/ico/whatsapp.svg" />
										</a>
									</li>

									<li class="nav-item">
										<a
											class="nav-link ico-button"
											href="https://t.me/+79209518178"
										>
											<img src="<?php echo get_template_directory_uri(); ?>/img/ico/vider.svg" />
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- CONTACTS SECTION 4 -->
		<section class="footer bg-dark">
			<!-- Desktop version -->
			<div class="container py-5 d-none d-xl-block">
				<div class="row align-items-center">
					<div class="col-xl-2">
						<a href="#">
							<img id="navbar-brand-img" src="<?php echo get_template_directory_uri(); ?>/img/logo-light.svg" class="img-fluid" />
						</a>
					</div>
					<div class="col-xl-8">
						<div class="navbar-collapse">
							<ul
								class="navbar-nav ms-auto mb-3 mb-lg-0 d-flex flex-row justify-content-center align-items-center"
							>
								<li class="nav-item">
									<a class="nav-link active" href="#carouselMain">Главная</a>
								</li>

								<li class="nav-item d-none d-lg-inline">
									<img class="nav-link" src="<?php echo get_template_directory_uri(); ?>/img/ico/menu-decoration-point.svg" />
								</li>

								<li class="nav-item">
									<a class="nav-link" href="#jobs">Наши работы</a>
								</li>

								<li class="nav-item d-none d-lg-inline">
									<img class="nav-link" src="<?php echo get_template_directory_uri(); ?>/img/ico/menu-decoration-point.svg" />
								</li>

								<li class="nav-item">
									<a class="nav-link" href="#plasters">Виды штукатурки</a>
								</li>

								<li class="nav-item d-none d-lg-inline">
									<img class="nav-link" src="<?php echo get_template_directory_uri(); ?>/img/ico/menu-decoration-point.svg" />
								</li>

								<li class="nav-item">
									<a class="nav-link" href="#price">Стоимость</a>
								</li>

								<li class="nav-item d-none d-lg-inline">
									<img class="nav-link" src="<?php echo get_template_directory_uri(); ?>/img/ico/menu-decoration-point.svg" />
								</li>

								<li class="nav-item">
									<a class="nav-link" href="#contacts">Контакты</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-xl-2 text-end">
						<a href="tel:+79209518178" class="top-menu-tel nav-link">
							8&nbsp;<span>(920)</span>&nbsp;951-81-78
						</a>
					</div>
				</div>

				<div class="row">
					<div class="col py-4 d-flex justify-content-center align-items-center">
						<ul class="nav footer-nav align-items-center">
							<li class="nav-item me-3">
								<div
									class="d-flex align-items-center gap-3 lh-1 nav-link-text maps"
								>
									<img src="<?php echo get_template_directory_uri(); ?>/img/ico/location-ico.svg" />
									гор. Москва, ул. Митинская, д. 43
								</div>
							</li>
							<li class="nav-item me-3">
								<div
									class="d-flex align-items-center gap-3 lh-1 nav-link-text time"
								>
									<img src="<?php echo get_template_directory_uri(); ?>/img/ico/clock-ico.svg" />
									Без выходных с 9:00 до 21:00
								</div>
							</li>

							<li class="nav-item me-3">
								<a
									class="nav-link d-flex align-items-center gap-3 lh-1"
									href="mailto:v-liga62@mail.ru"
								>
									<img src="<?php echo get_template_directory_uri(); ?>/img/ico/email-ico.svg" />
									v-liga62@mail.ru
								</a>
							</li>

							<li class="nav-item me-3">
								<button
									class="nav-link d-flex align-items-center gap-3 lh-1"
									data-bs-toggle="modal"
									data-bs-target="#callbackModal"
								>
									<img src="<?php echo get_template_directory_uri(); ?>/img/ico/callback-ico.svg" />
									<span>Обратный звонок</span>
								</button>
							</li>

							<li class="nav-item me-3">
								<a
									class="nav-link d-flex align-items-center gap-3 lh-1 tel"
									href="tel:+79209542860"
								>
									<img src="<?php echo get_template_directory_uri(); ?>/img/ico/telephone-2.svg" />
									8 (920) 954-28-60
								</a>
							</li>
						</ul>
					</div>
				</div>

				<div class="row justify-content-center footer-icon">
					<div class="col">
						<ul class="nav justify-content-center">
							<li class="nav-item">
								<a class="nav-link ico-button px-2" href="">
									<img src="<?php echo get_template_directory_uri(); ?>/img/ico/whatsapp.svg" />
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link ico-button px-2" href="">
									<img src="<?php echo get_template_directory_uri(); ?>/img/ico/telegram.svg" />
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link ico-button px-2" href="">
									<img src="<?php echo get_template_directory_uri(); ?>/img/ico/instagram.svg" />
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<!-- /Desktop version -->

			<!-- Mobile version -->
			<div class="container d-xl-none">
				<div class="row">
					<div class="col py-5">
						<a href="#">
							<img id="navbar-brand-img" src="<?php echo get_template_directory_uri(); ?>/img/logo-light.svg" class="img-fluid" />
						</a>
						<ul class="ps-0 pt-5 pt-md-3 pb-2 navbar-nav">
							<div class="ps-0 pb-2">
								<img src="<?php echo get_template_directory_uri(); ?>/img/ico/location-ico.svg" class="me-2" />
								<span>гор. Москва, ул. Митинская, д. 43</span>
							</div>

							<div class="ps-0 py-2">
								<img src="<?php echo get_template_directory_uri(); ?>/img/ico/clock-ico.svg" class="me-2" />
								<span>Без выходных с 9:00 до 21:00</span>
							</div>

							<li class="nav-item">
								<a
									href="mailto:v-liga62@mail.ru"
									class="nav-link ps-0 py-2 footer-mail"
								>
									<img src="<?php echo get_template_directory_uri(); ?>/img/ico/email-ico.svg" class="me-2" />
									v-liga62@mail.ru
								</a>
							</li>
							<li class="nav-item">
								<button
									class="nav-link ps-0 pt-2"
									data-bs-toggle="modal"
									data-bs-target="#callbackModal"
								>
									<img src="<?php echo get_template_directory_uri(); ?>/img/ico/callback-ico.svg" class="me-2" />
									Обратный звонок
								</button>
							</li>
						</ul>
						<a href="tel:+79209518178" class="top-menu-tel nav-link active">
							8 (920) 951-81-78
						</a>
						<ul class="nav pt-4 pb-3">
							<li class="nav-item">
								<a class="nav-link ico-button px-2" href="">
									<img src="<?php echo get_template_directory_uri(); ?>/img/ico/whatsapp.svg" />
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link ico-button px-2" href="">
									<img src="<?php echo get_template_directory_uri(); ?>/img/ico/telegram.svg" />
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link ico-button px-2" href="">
									<img src="<?php echo get_template_directory_uri(); ?>/img/ico/instagram.svg" />
								</a>
							</li>
						</ul>
						<div class="row footer-menu">
							<div class="col-6">
								<ul class="nav flex-column">
									<li class="nav-item">
										<a class="nav-link ps-0 active" href="#carouselMain"
											>Главная</a
										>
									</li>

									<li class="nav-item">
										<a class="nav-link ps-0 active" href="#jobs"
											>Наши работы</a
										>
									</li>

									<li class="nav-item">
										<a class="nav-link ps-0 active" href="#plasters"
											>Виды штукатурки</a
										>
									</li>
								</ul>
							</div>
							<div class="col-6">
								<ul class="nav flex-column">
									<li class="nav-item">
										<a class="nav-link ps-0" href="#price">Стоимость</a>
									</li>

									<li class="nav-item">
										<a class="nav-link ps-0" href="#contacts"
											>Контакты</a
										>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>

			<hr />

			<!-- Footer -->
			<footer>
				<div class="container">
					<div class="row">
						<div class="col text-start text-md-center">
							<div id="im-in-footer">
								Создание, продвижение и поддержка:
								<a
									href="https://site100.ru/"
									class="text-light text-decoration-underline"
									>site100.ru</a
								>
							</div>
						</div>
					</div>
				</div>
			</footer>
		</section>

		<!-- Callback Modal -->
		<div
			class="modal fade"
			id="callbackModal"
			tabindex="-1"
			aria-labelledby="callbackModalLabel"
			aria-hidden="true"
		>
			<div class="modal-dialog modal-dialog-centered">
				<form method="post" action="mails/callback-mail.php" class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="callbackModalLabel">Обратный звонок</h5>
						<button
							type="button"
							class="btn-close"
							data-bs-dismiss="modal"
							aria-label="Close"
						></button>
					</div>
					<div class="modal-body">
						<div class="row">
							<div class="col">
								<p class="mb-3">
									<small
										>Мы свяжемся с Вами в ближайшее время и ответим на все
										вопросы! Для звонка введите Ваше имя и телефон.</small
									>
								</p>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6 mb-3 mb-md-0">
								<input
									type="text"
									name="name"
									class="form-control"
									placeholder="Ваше имя"
								/>
							</div>
							<div class="col-md-6">
								<input
									type="text"
									name="tel"
									class="form-control telMask"
									placeholder="Ваш телефон*"
								/>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="submit" class="btn btn-lg btn-corporate-color-1 mx-auto">
							Перезвонить
						</button>
					</div>
				</form>
			</div>
		</div>
		<!-- /Callback Modal -->

		<!-- Модальное окно галереи -->
		<div
			id="galleryModal"
			class="modal-gallery"
			style="
				display: none;
				position: fixed;
				top: 0;
				left: 0;
				width: 100%;
				height: 100%;
				z-index: 9999;
			"
		>
			<div
				id="modalCarousel"
				class="carousel slide h-100"
				data-bs-ride="false"
				data-bs-interval="false"
			>
				<div class="carousel-inner h-100" id="modalCarouselInner">
					<!-- Слайды будут добавлены динамически -->
				</div>

				<div class="carousel-indicators" id="modalCarouselIndicators">
					<!-- Индикаторы будут добавлены динамически -->
				</div>

				<button
					class="carousel-control-prev"
					type="button"
					data-bs-target="#modalCarousel"
					data-bs-slide="prev"
				>
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Previous</span>
				</button>
				<button
					class="carousel-control-next"
					type="button"
					data-bs-target="#modalCarousel"
					data-bs-slide="next"
				>
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Next</span>
				</button>
			</div>

			<!-- Кнопка закрытия -->
			<button
				type="button"
				onclick="closeGallery()"
				class="btn-close btn-close-white"
				style="position: fixed; top: 25px; right: 25px; z-index: 10000"
				aria-label="Close"
			></button>
		</div>

		<script>
			let modalCarousel = null;

			function openGallery(carouselId) {
				// Получаем карусель по ID
				const carousel = document.getElementById(carouselId);
				if (!carousel) return;

				// Собираем только основные изображения (исключаем иконки zoom)
				const images = [];
				const carouselItems = carousel.querySelectorAll('.carousel-item');

				carouselItems.forEach((item, index) => {
					// Ищем основное изображение в каждом слайде (не zoom иконку)
					const mainImg = item.querySelector('img:not(.zoom-icon)');
					if (
						mainImg &&
						mainImg.src &&
						!mainImg.src.includes('zoom') &&
						!mainImg.classList.contains('zoom-icon')
					) {
						images.push({
							src: mainImg.src,
							alt: mainImg.alt || `Изображение ${index + 1}`,
						});
					}
				});

				// Определяем текущий активный слайд
				const activeItem = carousel.querySelector('.carousel-item.active');
				const allItems = carousel.querySelectorAll('.carousel-item');
				let currentIndex = 0;

				for (let i = 0; i < allItems.length; i++) {
					if (allItems[i] === activeItem) {
						currentIndex = i;
						break;
					}
				}

				// Открываем модальное окно с этими изображениями
				showModalGallery(images, currentIndex);
			}

			function showModalGallery(images, startIndex = 0) {
				if (images.length === 0) return;

				const modal = document.getElementById('galleryModal');
				const carouselInner = document.getElementById('modalCarouselInner');
				const indicators = document.getElementById('modalCarouselIndicators');

				// Очищаем предыдущий контент
				carouselInner.innerHTML = '';
				indicators.innerHTML = '';

				// Создаем слайды
				images.forEach((image, index) => {
					const slide = document.createElement('div');
					slide.className = `carousel-item h-100 ${index === startIndex ? 'active' : ''}`;
					slide.innerHTML = `
						<div class="row align-items-center h-100">
							<div class="col text-center">
								<img
									src="${image.src}"
									class="img-fluid"
									loading="lazy"
									style="max-width: 90vw; max-height: 80vh; object-fit: contain;"
									alt="${image.alt}"
								/>
								<p style="color: #c8c8c8; margin-top: 1rem;">${image.alt}</p>
							</div>
						</div>
					`;
					carouselInner.appendChild(slide);

					// Создаем индикатор только если изображений больше одного
					if (images.length > 1) {
						const indicator = document.createElement('button');
						indicator.type = 'button';
						indicator.setAttribute('data-bs-target', '#modalCarousel');
						indicator.setAttribute('data-bs-slide-to', index);
						indicator.setAttribute('aria-label', `Slide ${index + 1}`);
						if (index === startIndex) {
							indicator.className = 'active';
							indicator.setAttribute('aria-current', 'true');
						}
						indicators.appendChild(indicator);
					}
				});

				// Скрываем элементы навигации если только одно изображение
				const prevButton = modal.querySelector('.carousel-control-prev');
				const nextButton = modal.querySelector('.carousel-control-next');

				if (images.length <= 1) {
					indicators.style.display = 'none';
					prevButton.style.display = 'none';
					nextButton.style.display = 'none';
				} else {
					indicators.style.display = '';
					prevButton.style.display = '';
					nextButton.style.display = '';
				}

				// Показываем модальное окно
				modal.style.display = 'block';
				document.body.style.overflow = 'hidden';

				// Уничтожаем предыдущий экземпляр карусели
				if (modalCarousel) {
					modalCarousel.dispose();
					modalCarousel = null;
				}

				// Небольшая задержка для корректной инициализации
				setTimeout(() => {
					// Инициализируем Bootstrap carousel
					modalCarousel = new bootstrap.Carousel(
						document.getElementById('modalCarousel'),
						{
							ride: false,
							interval: false,
							wrap: true,
						},
					);

					// Переходим к нужному слайду
					if (startIndex > 0) {
						modalCarousel.to(startIndex);
					}
				}, 100);
			}

			function closeGallery() {
				const modal = document.getElementById('galleryModal');
				modal.style.display = 'none';
				document.body.style.overflow = '';

				if (modalCarousel) {
					modalCarousel.dispose();
					modalCarousel = null;
				}
			}

			// Закрытие по клику на фон
			document.getElementById('galleryModal').addEventListener('click', function (e) {
				if (e.target === this) {
					closeGallery();
				}
			});

			// Закрытие по Escape
			document.addEventListener('keydown', function (e) {
				if (e.key === 'Escape') {
					closeGallery();
				}
			});
		</script>

		<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.bundle.min.js"></script>

		<!-- jQuery -->
		<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.5.1.min.js"></script>

		<!-- Menu -->
		<script src="<?php echo get_template_directory_uri(); ?>/js/menu-scroll.js"></script>

		<script src="<?php echo get_template_directory_uri(); ?>/js/inputmask.min.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/js/telMask.js"></script>
	</body>
</html>
