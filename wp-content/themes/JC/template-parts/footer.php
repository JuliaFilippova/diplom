<?php wp_footer() ?>
<!------- FOOTER ------->
	<footer class="footer" id="footer">
		<div class="footer-bg">
			<div class="container">
				<div class="row">
					<div class="col-lg-3">
						<div class="network">
							<a href="/" class="network__logo logo d-flex">
								<img class="logo" src="<?php bloginfo('template_directory')?>/img/logo-footer.svg" alt="#">
							</a>
							<ul class="network__social d-flex justify-content-between">
								<li class="network__item">
									<a href="#" class="network__link" target="_blank">
										<i class="fab fa-facebook-f icons"></i>
									</a>
								</li>
								<li class="network__item">
									<a href="#" class="network__link" target="_blank">
										<i class="fab fa-facebook-messenger icons"></i>
									</a>
								</li>
								<li class="network__item">
									<a href="#" class="network__link" target="_blank">
										<i class="fab fa-instagram icons"></i>
									</a>
								</li>
								<li class="network__item">
									<a href="#" class="network__link" target="_blank">
										<i class="fab fa-youtube icons"></i>
									</a>
								</li>
							</ul>
							<p class="network__created">
								Разработано специально для коучинга WAYUP
							</p>
						</div>
					</div>
					<div class="col-auto col-sm-3 col-md-3 col-lg-2">
						<nav class="footer-nav">
							<h5 class="footer-title">
								Меню
							</h5>
							<nav>
								<?php wp_nav_menu( array(
									'theme_location'  => '',
									'menu'            => 'footer-menu',
									'container'       => false,
									'container_class' => '',
									'container_id'    => '',
									'menu_class'      => 'footer-menu',
									'menu_id'         => '',
									'echo'            => true,
									'fallback_cb'     => 'wp_page_menu',
									'before'          => '',
									'after'           => '',
									'link_before'     => '',
									'link_after'      => '',
									'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s<ul>',
									'depth'           => 0,
									'walker'		  => '',
								) ); ?>
							</nav>
						</nav>
					</div>
					<div class="col-auto col-md-5 col-lg-3">
						<div class="contacts-box">
							<h5 class="footer-title">
								Контакты
							</h5>
							<ul class="contacts">
								<li class="contacts__item">
									<a href="contacts.html" class="contacts__link" target="_blank">
										<i class="icon-location icons"></i>
									</a>
									<a href="contacts.html" class="contacts__text" target="_blank">
										г. Москва, ул. Бутырская, 62 Z-Plaza, 5-й этаж
									</a>
								</li>
								<li class="contacts__item d-flex">
									<a href="#" class="contacts__link">
										<i class="icon-tel icons"></i>
									</a>
									<p class="contacts__text">
										<a href="tel:+74955771811" class="contacts__tel">
										+ 7 (495) 577-18-11
										</a>
										<a href="tel:+74955672815" class="contacts__tel">
											+ 7 (495) 567-28-15
										</a>
									</p>
								</li>
								<li class="contacts__item">
									<a href="mailto:JClegal@gmail.com" class="contacts__link" target="_blank">
										<i class="icon-mail-1 icons"></i>
									</a>
									<p class="contacts__text">
										<a href="mailto:JClegal@gmail.com" target="_blank">
											JClegal@gmail.com
										</a>
									</p>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-lg-4">
						<form action="success.php" class="form" id="formMessage">
							<h5 class="footer-title">
								Подписаться на рассылку новостей
							</h5>
							<?php echo do_shortcode('[contact-form-7 id="82" title="email-form"]'); ?>
							
							<!-- <input type="email" name="email" placeholder="Ваш email" required>
							<a href="" class="form__btn btn btnEmail" data-submit>
								Подписаться
							</a> -->
						</form>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12">
						<div class="copy">
							<p class="network__created_bottom">
								Разработано специально для коучинга WAYUP
							</p>
							<div class="border-bottom"></div>
							<p class="footer-copy text-center">
								© 2007-2020 Все права защищены
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!------- FOOTER END ------->
	<!------- FIXED PHONE ------->
	<a href="tel:+74955672815" class="fixed-phone">
		<i class="icon-tel icon-phone fixed-phone__icon"></i>
	</a>
	<div id="toTop"><p>↑</p></div>

	<!------- FIXED PHONE END ------->
	<!------- REQUEST MODAL WINDOW ------->
	<!-- Индикация процесса отправки формы -->
	<div id="loader">
		<img src="<?php bloginfo('template_directory')?>/img/ripple.svg">
	</div>
	<!-- Сообщение "спасибо" после отправки формы -->
	<div id="overlay">
		<div id="thx">
			Спасибо! Мы обязательно вам перезвоним
		</div>
   	</div>
   	<!-- Сообщение "спасибо" после отправки формы email -->
	<div id="overlayMessage">
		<div id="thx">
			Поздравляем! Вы подписанны
		</div>
   	</div>
   	<!-- заказать звонок -->
	<div class="d-none">
	    <div class="box-modal" id="exampleModal">
	        <div class="popup-form" id="popup-form">
				<span class="btnClose box-modal_close arcticmodal-close"> X </span>
				<h3 class="popup__title">
					Отправьте заявку
				</h3>
				<p class="popup__text">
					И наши специалисты свяжутся с вами ближайшее время <br> для оказания профессиональной помощи!
				</p>
				<div class="popup__form">
					<?php echo do_shortcode('[contact-form-7 id="76" title="Контактная форма 1"]'); ?>
					<!-- <div class="form-input">
						<label class="lab" for="text1">Имя</label>
						<input class="input" type="text" name="name" required>
					</div>
					<div class="form-input">
						<label class="lab" for="tel1">Телефон</label>
						<input class="input" type="tel" name="tel" required>
					</div>
					<button class="popup__btn btn" type="submit" data-submit>
						Отправить
					</button> -->
				</div>
			</div>
	    </div>
	</div>
	<!------- REQUEST MODAL WINDOW-END ------->
	<div id="modal"></div> <!--- фон для модальных окон--->
	<!------- MENU MODAL WINDOW ------->
	<div class="menu-modal" id="menu-modal">
		<a href="#" class="menu-modal__logo logo d-flex">
			<img class="logo" src="<?php bloginfo('template_directory')?>/img/logo-header.svg" alt="#">
			<span id="menuClouse" class="btnClose"> X </span>
		</a>
		<nav class="hamburger-menu">
			<?php wp_nav_menu( array(
				'theme_location'  => '',
				'menu'            => 'hamburger',
				'container'       => false,
				'container_class' => '',
				'container_id'    => '',
				'menu_class'      => 'menu-list',
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
			) ); 
			?>
			<!-- <ul class="menu-list">
				<li class="menu-list__item">
					<a href="index.html" class="menu-list__link">
						Главная
					</a>
				</li>
				<li class="menu-list__item">
					<a href="about.html" class="menu-list__link">
						О компании
					</a>
				</li>
				<li class="menu-list__item">
					<a href="services.html" class="menu-list__link">
						Услуги
					</a>
				</li>
				<li class="menu-list__item">
					<a href="contacts.html" class="menu-list__link">
						Контакты
					</a>
				</li>
				<li class="menu-list__item">
					<a href="reviews.html" class="menu-list__link">
						Отзывы
					</a>
				</li>
			</ul> -->
		</nav>
		<div class="menu-modal__phone phone d-flex">
			<a href="#" class="phone__icon phone-popup">
				<i class="icon-tel icon-phone"></i>
			</a>
			<div class="phone__block">
				<a href="#" class="phone__item phone-popup">
					Заказать звонок
				</a>
				<a href="tel:+74955672815" class="phone__item">
					+ 7 (495) 567-28-15
				</a>
			</div>
		</div>
	</div>
	<!------- MENU MODAL WINDOW-END ------->
	<!-- JQuery -->
	<script src="<?php bloginfo('template_directory')?>/js/jquery-3.4.1.min.js"></script>
	<!-- Bootstrap -->
	<script src="<?php bloginfo('template_directory')?>/js/bootstrap.min.js"></script>
	<!-- Parallax -->
	<script src="<?php bloginfo('template_directory')?>/js/parallax.js"></script>
	<!--  Slider Swiper-->
	<script src="<?php bloginfo('template_directory')?>/js/swiper.min.js"></script>
	<!-- plugin arcticModal -->
	<script src="<?php bloginfo('template_directory')?>/js/jquery.arcticmodal-0.3.min.js"></script>
	<!-- Validate Form  -->
	<script type="text/javascript" src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.14.0/jquery.validate.js"></script>
	<!-- JS -->
	<script src="<?php bloginfo('template_directory')?>/js/main.js"></script>
</body>
</html>
