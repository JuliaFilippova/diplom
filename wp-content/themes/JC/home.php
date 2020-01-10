<?php /*
Template Name: Главная
Template Post Type: post, page, product
*/ ?>
<?php get_template_part('template-parts/head') ?>
<body>
	<header class="header" id="header">
		<div class="header-bg">
			<div class="navigation">
				<div class="container">
					<div class="row">
						<!------- LOGO ------->
						<div class="col-auto col-xl-3">
							<a href="/" class="logo d-flex">
								<img class="logo" src="<?php bloginfo('template_directory')?>/img/logo-header.svg" alt="#">
							</a>
						</div>
						<!------- LOGO-END ------->
						<!------- MENU-LIST ------->
						<div class="d-none d-lg-block col-lg-6 ml-xl-auto">
							<nav class="header-menu">
								<?php wp_nav_menu( array(
									'theme_location'  => '',
									'menu'            => 'Основное',
									'container'       => false,
									'container_class' => '',
									'container_id'    => '',
									'menu_class'      => 'menu d-flex',
									'menu_id'         => '',
									'echo'            => true,
									'fallback_cb'     => 'wp_page_menu',
									'before'          => '',
									'after'           => '',
									'link_before'     => '',
									'link_after'      => '',
									'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
									'depth'           => 0,
									'walker'		  => '',
								) ); ?>
							</nav>
						</div>
						<!------- MENU-LIST-END ------->
						<!------- PHONE ------->
						<div class="d-none d-sm-block ml-auto col-auto col-xl-3">
							<div class="phone d-flex">
								<a href="#exampleModal" class="phone__icon phone-popup">
									<i class="icon-tel icon-phone"></i>
								</a>
								<div class="phone__block">
									<a href="#exampleModal" class="phone__item phone-popup">
										Заказать звонок
									</a>
									<a href="tel:+74955672815" class="phone__item">
										+ 7 (495) 567-28-15
									</a>
								</div>
							</div>
						</div>
						<!------- PHONE-END ------->
						<!------- HAMBURGER ------->
						<div class="d-lg-none col-auto ml-auto ml-sm-0">
							<div class="hamburger">
								<div id="menuToggle">
									<span></span>
								    <span></span>
								    <span></span>
								</div>
							</div>
						</div>
						<!------- HAMBURGER-END ------->
					</div>
				</div>
			</div>
			<!------- OFFER ------->
			<div class="offer">
				<div class="container">
					<p class="offer__on-title">
						Вы хотите изменить мир.
					</p>
					<h1 class="offer__title">
						Мы хотим вам помочь.
					</h1>
					<p class="offer__subtitle">
						Мы современная Юридическая фирма, помогающая перспективным стартапам, фрилансерам и малому бизнесу.
					</p>
					<a href="#exampleModal" class="offer__btn btn popupForm">
						Бесплатная консультация
					</a>
				</div>
			</div>
			<!------- OFFER-END ------->
		</div>
	</header>
	<section class="help" id="help">
		<div class="container">
			<div class="row pos-rel">
				<!------- SECTION-HEAD ------->
				<div class="col-xl-4 pos-static">
					<div class="head head_help">
						<span class="head__less">
							Кому мы
						</span>
						<h2 class="head__big">
							Помогаем
						</h2>
						<p class="head__subtitle">
							Мы фокусируемся на юридических вопросах, актуальных для успешного современного бизнеса
						</p>
						<a href="#exampleModal" class="head__btn btn popupForm">
							Получить консультацию
						</a>
					</div>
				</div>
				<!------- SECTION-HEAD ------->
				<!------- CARDS------->
				<div class="col-md-12 col-lg-10 col-xl-8 m-lg-auto ml-auto">
					<div class="cards">
						<div class="row">
							<div class="col-sm-6 col-lg-4">
								<div class="cards__item cards__item_first">
									<img src="<?php bloginfo('template_directory')?>/img/card1.png" alt="Изображение карточки" class="cards__img">
									<h5 class="cards__title">
										Стартапам
									</h5>
									<p class="cards__text cards__text_br">
										Когда вы будете готовы вывести свой стартап на новый уровень, мы можем оказать вам юридические услуги, чтобы <br> помочь вам расти
									</p>
								</div>
							</div>
							<div class="col-sm-6 col-lg-4">
								<div class="cards__item cards__item_second">
									<img src="<?php bloginfo('template_directory')?>/img/card2.png" alt="Изображение карточки" class="cards__img cards__img_free">
									<h5 class="cards__title">
										Фрилансеру
									</h5>
									<p class="cards__text">
										Начать бизнес проще, чем когда-либо. Неважно подрабатываете вы или работаете самостоятельно, мы можем помочь вам сделать все правильно
									</p>
								</div>
							</div>
							<div class="col-sm-6 m-sm-auto col-lg-4">
								<div class="cards__item cards__item_third">
									<img src="<?php bloginfo('template_directory')?>/img/card3.png" alt="Изображение карточки" class="cards__img cards__img_idea">
									<h5 class="cards__title">
										Малому бизнесу
									</h5>
									<p class="cards__text">
										Мы поможем направить ваш бизнес в правильном направлении. Окажем услуги в области договорного, трудового права и многое другое
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!------- CARDS-END------->
			</div>
		</div>
	</section>
	<section class="case" id="case">
		<div class="container">
			<div class="case-wrap">
				<div class="row align-items-end justify-content-between">
					<!------- SECTION-HEAD ------->
					<div class="col-md-12 col-lg-11 col-xl-7">
						<div class="head">
							<span class="head__less">
								Наши
							</span>
							<h2 class="head__big">
								Кейсы
							</h2>
							<p class="head__subtitle">
								Кейсы – это описание конкретной ситуации или случая в определённой сфере юридической практики. Вы можете ознакомиться с конкретными ситуациями, с которыми сталкивались юристы компании JC
							</p>
						</div>
					</div>
					<!------- SECTION-HEAD-END ------->
					<div class="col-xl-5">
						<div class="tabs-wrap">
							<!-- <ul class="tabs d-flex">
								<?php wp_list_pages(array (
						            'child_of' => get_the_ID(),
						            'title_li' => 0
						        )); ?>
							</ul> -->
							<!-- <ul class="tabs d-flex">
								<li class="tabs__item">
									<a href="#" class="tabs__link tabs__link_radius-left tabs-active">
										Стартапы
									</a>
								</li>
								<li class="tabs__item tabs__item_line">
									<a href="#" class="tabs__link">
										Фриланс
									</a>
								</li>
								<li class="tabs__item">
									<a href="#" class="tabs__link tabs__link_radius-right">
										Малый бизнес
									</a>
								</li>
							</ul> -->

							<!-- Nav tabs -->
							<ul class="tabs d-flex">
								<li class="tabs__item active">
									<a href="#startups" class="tabs__link tabs__link_radius-left" data-toggle="tab">
										Стартапы
									</a>
								</li>
								<li class="tabs__item tabs__item_line">
									<a href="#freelance" class="tabs__link" data-toggle="tab">
										Фриланс
									</a>
								</li>
								<li class="tabs__item">
									<a href="#small" class="tabs__link tabs__link_radius-right" data-toggle="tab">
										Малый бизнес
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<!-- Tab panes -->
			<div class="tab-content">
				<div class="tab-pane active" id="startups">
					<div class="row">
						<div class="col-xl-6 col-lg-6">
							<div class="situation d-flex justify-content-between">
								<div class="situation__head">
									<h4 class="situation__title">
										Взыскание задолженности с дебитора
									</h4>
								</div>
								<div class="situation-photo">
									<img src="<?php bloginfo('template_directory')?>/img/case1.jpg" alt="Изображение карточки" class="situation-photo__img">
									<div class="situation-photo__overlay"></div>
									<a href="#" class="situation-photo__link link-details">
										Читать больше
									</a>
								</div>
							</div>
						</div>
						<div class="col-xl-6 col-lg-6">
							<div class="situation d-flex justify-content-between">
								<div class="situation__head">
									<h4 class="situation__title">
										Урегулирование налогового спора
									</h4>
								</div>
								<div class="situation-photo">
									<img src="<?php bloginfo('template_directory')?>/img/case2.jpg" alt="Изображение карточки" class="situation-photo__img">
									<div class="situation-photo__overlay"></div>
									<a href="#" class="situation-photo__link link-details">
										Читать больше
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-xl-6 col-lg-6">
							<div class="situation d-flex justify-content-between">
								<div class="situation__head">
									<h4 class="situation__title">
										Представление интересов компании PPD
									</h4>
								</div>
								<div class="situation-photo">
									<img src="<?php bloginfo('template_directory')?>/img/case3.jpg" alt="Изображение карточки" class="situation-photo__img">
									<div class="situation-photo__overlay"></div>
									<a href="#" class="situation-photo__link link-details">
										Читать больше
									</a>
								</div>
							</div>
						</div>
						<div class="col-xl-6 col-lg-6">
							<div class="situation d-flex justify-content-between">
								<div class="situation__head">
									<h4 class="situation__title">
										Вывод денег через текущие платежи
									</h4>
								</div>
								<div class="situation-photo">
									<img src="<?php bloginfo('template_directory')?>/img/case4.jpg" alt="Изображение карточки" class="situation-photo__img">
									<div class="situation-photo__overlay"></div>
									<a href="#" class="situation-photo__link link-details">
										Читать больше
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="tab-pane" id="freelance">
					<div class="row">
						<div class="col-xl-6 col-lg-6">
							<div class="situation d-flex justify-content-between">
								<div class="situation__head">
									<h4 class="situation__title">
										Решения на фриланс бирже
									</h4>
								</div>
								<div class="situation-photo">
									<img src="<?php bloginfo('template_directory')?>/img/case5.jpg" alt="Изображение карточки" class="situation-photo__img">
									<div class="situation-photo__overlay"></div>
									<a href="#" class="situation-photo__link link-details">
										Читать больше
									</a>
								</div>
							</div>
						</div>
						<div class="col-xl-6 col-lg-6">
							<div class="situation d-flex justify-content-between">
								<div class="situation__head">
									<h4 class="situation__title">
										Обязательные налоги на фриланс бирже
									</h4>
								</div>
								<div class="situation-photo">
									<img src="<?php bloginfo('template_directory')?>/img/case6.jpg" alt="Изображение карточки" class="situation-photo__img">
									<div class="situation-photo__overlay"></div>
									<a href="#" class="situation-photo__link link-details">
										Читать больше
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-xl-6 col-lg-6">
							<div class="situation d-flex justify-content-between">
								<div class="situation__head">
									<h4 class="situation__title">
										Представление интересов FL
									</h4>
								</div>
								<div class="situation-photo">
									<img src="<?php bloginfo('template_directory')?>/img/case7.jpg" alt="Изображение карточки" class="situation-photo__img">
									<div class="situation-photo__overlay"></div>
									<a href="#" class="situation-photo__link link-details">
										Читать больше
									</a>
								</div>
							</div>
						</div>
						<div class="col-xl-6 col-lg-6">
							<div class="situation d-flex justify-content-between">
								<div class="situation__head">
									<h4 class="situation__title">
										Открытие ИП на фринас бирже
									</h4>
								</div>
								<div class="situation-photo">
									<img src="<?php bloginfo('template_directory')?>/img/case8.jpg" alt="Изображение карточки" class="situation-photo__img">
									<div class="situation-photo__overlay"></div>
									<a href="#" class="situation-photo__link link-details">
										Читать больше
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="tab-pane" id="small">
					<div class="row">
						<div class="col-xl-6 col-lg-6">
							<div class="situation d-flex justify-content-between">
								<div class="situation__head">
									<h4 class="situation__title">
										Составление малого бизнеса
									</h4>
								</div>
								<div class="situation-photo">
									<img src="<?php bloginfo('template_directory')?>/img/case9.jpg" alt="Изображение карточки" class="situation-photo__img">
									<div class="situation-photo__overlay"></div>
									<a href="#" class="situation-photo__link link-details">
										Читать больше
									</a>
								</div>
							</div>
						</div>
						<div class="col-xl-6 col-lg-6">
							<div class="situation d-flex justify-content-between">
								<div class="situation__head">
									<h4 class="situation__title">
										Открытие ИП малого бизнеса
									</h4>
								</div>
								<div class="situation-photo">
									<img src="<?php bloginfo('template_directory')?>/img/case10.jpg" alt="Изображение карточки" class="situation-photo__img">
									<div class="situation-photo__overlay"></div>
									<a href="#" class="situation-photo__link link-details">
										Читать больше
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-xl-6 col-lg-6">
							<div class="situation d-flex justify-content-between">
								<div class="situation__head">
									<h4 class="situation__title">
										Открытие счета для малого бизнеса
									</h4>
								</div>
								<div class="situation-photo">
									<img src="<?php bloginfo('template_directory')?>/img/case11.jpg" alt="Изображение карточки" class="situation-photo__img">
									<div class="situation-photo__overlay"></div>
									<a href="#" class="situation-photo__link link-details">
										Читать больше
									</a>
								</div>
							</div>
						</div>
						<div class="col-xl-6 col-lg-6">
							<div class="situation d-flex justify-content-between">
								<div class="situation__head">
									<h4 class="situation__title">
										Урегулирование юридических вопросов
									</h4>
								</div>
								<div class="situation-photo">
									<img src="<?php bloginfo('template_directory')?>/img/case12.jpg" alt="Изображение карточки" class="situation-photo__img">
									<div class="situation-photo__overlay"></div>
									<a href="#" class="situation-photo__link link-details">
										Читать больше
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="connection" id="connection">
		<div class="connect-bg">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-lg-7">
						<div class="connect">
							<div id="scene" class="layer">
								<img data-depth='1' src="<?php bloginfo('template_directory')?>/img/decor.png" alt="Изображение">
							</div>
							<div class="connect__item">
								<h3 class="connect__title">
									Свяжитесь с нами, чтобы узнать, <br> как мы можем помочь вашему бизнесу
								</h3>
								<a href="#exampleModal" class="connect__btn btn popupForm">
									Связаться с нами
								</a>
							</div>
						</div>
					</div>
					<div class=" d-none d-lg-block col-lg-5">
						<div class="connect__decor"></div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="news" id="news">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-md-8 col-lg-9 order-md-first order-last">
					<div class="icon">
						<a href="#" class="icon__arrow swiper-button swiper-button-prev"></a>
						<a href="#" class="icon__arrow swiper-button swiper-button-next"></a>
					</div>
				</div>
				<div class="col-md-4 col-lg-3 order-md-last order-first">
					<div class="head text-right">
						<span class="head__less">
							Актуальные
						</span>
						<h2 class="head__big">
							Новости
						</h2>
					</div>
				</div>
			</div>
			<div id="slide-article" class="swiper-container">
				<div class="swiper-wrapper ">
					<div class="swiper-slide">
						<div class="article">
							<div class="article__position">
								<div class="article__photo">
									<img src="<?php bloginfo('template_directory')?>/img/startups1.jpg" alt="Изображение карточки" class="article__img">
									<div class="article__overlay"></div>
								</div>
							</div>
							<div class="article__block">
								<span class="article__date date">
									13.07.20
								</span>
								<h6 class="article__title">
									Лучшие юридические компании Москвы
								</h6>
								<p class="article__text">
									Лучшие юридические компании Москвы зарабатывают свою репутацию годами. Многие из них существуют более 20 лет, а это серьёзный срок для любой организации.
								</p>
								<a href="#readModal" class="article__link link-details">
									Читать больше
								</a>
							</div>
						</div>
						<div class="d-none">
							<div class="box-modal" id="readModal">
								<div class="read-more" id="read-more">
									<p class="read-more__text">
										<span class="read-more__title"> Удобство </span>
										Нашим клиентам не надо тратить своё время на суды. Всю работу мы выполняем под ключ.
									</p>
									<p class="read-more__text">
										<span class="read-more__title"> Профессионализм </span>
										В своей работе мы всегда используем материалы сложившейся судебной практики конкретного региона страны, что несомненно является основанием для исключительно положительного разрешения любой поставленной задачи.
									</p>
									<p class="read-more__text">
										<span class="read-more__title"> Бизнес встречи с партнерами </span>
										Является основанием для исключительно положительного разрешения любой поставленной задачи.
									</p>
								</div>
							</div>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="article">
							<div class="article__position">
								<div class="article__photo">
									<img class="article__img" src="<?php bloginfo('template_directory')?>/img/startups2.jpg" alt="Изображение карточки">
									<div class="article__overlay"></div>
								</div>
							</div>
							<div class="article__block">
								<span class="article__date date">
									20.10.20
								</span>
								<h6 class="article__title">
									Что разрешено коллекторам по закону?
								</h6>
								<p class="article__text">
									1 января этого года вступил в силу новый Федеральный закон №230-ФЗ защищающий права физических лиц при возврате задолженности, которая просрочена...
								</p>
								<a href="#read-more" class="article__link link-details">
									Читать больше
								</a>
							</div>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="article">
							<div class="article__position">
								<div class="article__photo">
									<img class="article__img" src="<?php bloginfo('template_directory')?>/img/startups3.jpg" alt="Изображение карточки">
									<div class="article__overlay"></div>
								</div>
							</div>
							<div class="article__block">
								<span class="article__date date">
									05.12.20
								</span>
								<h6 class="article__title">
									Как выбрать юридическую фирму
								</h6>
								<p class="article__text">
									Как выбрать юридическую компанию, которая решит ваши проблемы профессиональным методами, а не добавит новых? – вопрос очень популярный в нашей стране...
								</p>
								<a href="#read-more" class="article__link link-details">
									Читать больше
								</a>
							</div>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="article">
							<div class="article__position">
								<div class="article__photo">
									<img src="<?php bloginfo('template_directory')?>/img/startups4.jpg" alt="Изображение карточки" class="article__img">
									<div class="article__overlay"></div>
								</div>
							</div>
							<div class="article__block">
								<span class="article__date date">
									19.07.19
								</span>
								<h6 class="article__title">
									Как найти профессионального юриста?
								</h6>
								<p class="article__text">
									Лучшие юридические компании Москвы зарабатывают свою репутацию годами. Многие из них существуют более 20 лет, а это серьёзный срок для любой организации.
								</p>
								<a href="#read-more" class="article__link link-details">
									Читать больше
								</a>
							</div>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="article">
							<div class="article__position">
								<div class="article__photo">
									<img src="<?php bloginfo('template_directory')?>/img/startups5.jpg" alt="Изображение карточки" class="article__img">
									<div class="article__overlay"></div>
								</div>
							</div>
							<div class="article__block">
								<span class="article__date date">
									10.07.18
								</span>
								<h6 class="article__title">
									Составление договора с малым бизнесом
								</h6>
								<p class="article__text">
									Лучшие юридические компании Москвы зарабатывают свою репутацию годами. Многие из них существуют более 20 лет, а это серьёзный срок для любой организации.
								</p>
								<a href="#read-more" class="article__link link-details">
									Читать больше
								</a>
							</div>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="article">
							<div class="article__position">
								<div class="article__photo">
									<img src="<?php bloginfo('template_directory')?>/img/startups6.jpg" alt="Изображение карточки" class="article__img">
									<div class="article__overlay"></div>
								</div>
							</div>
							<div class="article__block">
								<span class="article__date date">
									15.07.21
								</span>
								<h6 class="article__title">
									Решение юридических вопросов
								</h6>
								<p class="article__text">
									Лучшие юридические компании Москвы зарабатывают свою репутацию годами. Многие из них существуют более 20 лет, а это серьёзный срок для любой организации.
								</p>
								<a href="#read-more" class="article__link link-details">
									Читать больше
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
<?php get_template_part('template-parts/footer') ?>