<?php  /*
Template Name: Контакты
Template Post Type: post, page, product
*/?>
<?php get_template_part('template-parts/head') ?>
<?php get_template_part('template-parts/header') ?>
<section class="contact" id="contact">
		<div class="container">
			<div class="address-position">
				<div class="address">
					<h4 class="address__title">
						Как нас найти
					</h4>
					<ul class="address__data">
						<li class="address__item">
							<a href="#" class="address__link">
								<i class="icon-location icons"></i>
							</a>
							<a href="#" class="address__text">
								г. Москва, ул. Бутырская, 62 Z-Plaza, 5-й этаж
							</a>
						</li>
						<li class="address__item">
							<a href="#" class="address__link">
								<i class="icon-tel icons"></i>
							</a>
							<p class="address__text">
								<a href="tel:+74955771811" class="address__tel">
									+ 7 (495) 577-18-11
								</a>
								<a href="tel:+74955672815" class="address__tel">
									+ 7 (495) 567-28-15
								</a>
							</p>
						</li>
						<li class="address__item">
							<a href="mailto:JClegal@gmail.com" class="address__link" target="_blank">
								<i class="icon-mail-1 icons"></i>
							</a>
							<a href="mailto:JClegal@gmail.com" class="address__text" target="_blank">
								JClegal@gmail.com
							</a>
						</li>
					</ul>
					<p class="address__clock">
						Мы работаем с 9:00 до 22:00 <br> в рабочие дни
					</p>
				</div>
			</div>
		</div>
		<div class="container-fluid">
			<div class="map" id="map"></div>
		</div>
	</section>
<?php get_template_part('template-parts/footer') ?>
