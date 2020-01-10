<?php /*
Template Name: Услуги
Template Post Type: post, page, product
*/ ?>
<?php get_template_part('template-parts/head') ?>
<?php get_template_part('template-parts/header') ?>
<section class="services" id="services">
		<div class="container">
			<div class="services-wrap">
				<div class="row align-items-end justify-content-between">
					<!------- SECTION-HEAD ------->
					<div class="col-lg-7">
						<div class="head">
							<p class="head__less">
								Наши
							</p>
							<h2 class="head__big">
								Услуги
							</h2>
							<p class="head__subtitle">
								Вы хотите реализовать свои бизнес идеи? Начало вашего нового бизнеса требует прочной юридической основы, и мы поможем вам на каждом этапе
							</p>
						</div>
					</div>
					<!------- SECTION-HEAD-END ------->
					<div class="col-xl-5">
						<div class="tabs-wrap">
							<ul class="tabs d-flex">
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
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="business-wrap">
				<div class="row">
					<div class="col-md-6 col-xl-4">
						<div class="business">
							<h4 class="business__title">
								Корпоративная практика, M&A
							</h4>
							<p class="business__text">
								Услуги в области корпоративного управления, рынков капитала, M&A
							</p>
							<span class="bisiness__price">
								$350
							</span>
							<a href="#" class="bisiness__link btn">
								Подробнее
							</a>
							<img src="<?php bloginfo('template_directory')?>/img/business1.png" alt="Изображение" class="business__img">
						</div>
					</div>
					<div class="col-md-6 col-xl-4">
						<div class="business">
							<h4 class="business__title">
								Интеллектуальная собственность
							</h4>
							<p class="business__text">
								Весь спектр услуг в сфере интеллектуальной собственности
							</p>
							<span class="bisiness__price">
								$390
							</span>
							<div class="business__button">
								<a href="#" class="bisiness__link btn">
									Подробнее
								</a>
								<img src="<?php bloginfo('template_directory')?>/img/business2.png" alt="Изображение" class="business__img">
							</div>
						</div>
					</div>
					<div class="col-md-6 col-xl-4">
						<div class="business">
							<h4 class="business__title">
								Интернет-бизнес и цифровая экономика
							</h4>
							<p class="business__text">
								Весь спектр юридических услуг по сопровождению интернет – проектов
							</p>
							<span class="bisiness__price">
								$480
							</span>
							<div class="business__button">
								<a href="#" class="bisiness__link btn">
									Подробнее
								</a>
								<img src="<?php bloginfo('template_directory')?>/img/business3.png" alt="Изображение" class="business__img">
							</div>
						</div>
					</div>
					<div class="col-md-6 col-xl-4">
						<div class="business">
							<h4 class="business__title">
								Информационные технологии / ТМТ
							</h4>
							<p class="business__text">
								Комплексная юридическая поддержка бизнеса в сфере связи, медиа, рекламы
							</p>
							<span class="bisiness__price">
								$525
							</span>
							<div class="business__button">
								<a href="#" class="bisiness__link btn">
									Подробнее
								</a>
								<img src="<?php bloginfo('template_directory')?>/img/business4.png" alt="Изображение" class="business__img">
							</div>
						</div>
					</div>
					<div class="col-md-6 col-xl-4">
						<div class="business">
							<h4 class="business__title">
								Government <br> Relations
							</h4>
							<p class="business__text">
								Решение вопросов, связанных с регулированием бизнеса
							</p>
							<span class="bisiness__price bisiness__price_fifth">
								$345
							</span>
							<div class="business__button">
								<a href="#" class="bisiness__link btn">
									Подробнее
								</a>
								<img src="<?php bloginfo('template_directory')?>/img/business5.png" alt="Изображение" class="business__img">
							</div>
						</div>
					</div>
					<div class="col-md-6 col-xl-4">
						<div class="business">
							<h4 class="business__title">
								Коммерческая практика
							</h4>
							<p class="business__text">
								Услуги по комплексному юридическому сопровождению бизнеса
							</p>
							<span class="bisiness__price">
								$410
							</span>
							<div class="business__button">
								<a href="#" class="bisiness__link btn">
									Подробнее
								</a>
								<img src="<?php bloginfo('template_directory')?>/img/business6.png" alt="Изображение" class="business__img">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
<?php get_template_part('template-parts/footer') ?>

