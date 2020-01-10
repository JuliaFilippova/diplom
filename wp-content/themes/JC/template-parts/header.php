<body>
	<header class="header" id="header">
		<div class="navigation">
			<div class="container">
				<div class="row">
					<!------- LOGO ------->
					<div class="col-auto col-xl-3">
						<a href="index.html" class="logo d-flex">
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
							) ); 
							?>
						</nav>
					</div>
					<!------- MENU-LIST-END ------->
					<!------- PHONE ------->
					<div class="d-none d-sm-block col-auto ml-auto col-xl-3">
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
		<!------- PANEL ------->
		<div class="panel">
			<div class="container">
				<div class="menu-panel">
					<h1 class="menu-panel__title">
						<?php the_title() ?>
					</h1>
					<?php if ( function_exists( 'dimox_breadcrumbs' ) ) dimox_breadcrumbs(); ?>
				</div>
			</div>
		</div>
	</header>
		<!------- PANEL END ------->