<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Массаж всего тела</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/leave.png" type="image/x-icon">	
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/libs/bootstrap/bootstrap-grid.min.css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/libs/font-awesome/css/font-awesome.min.css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/libs/linea/styles.css" />
	<link href="<?php echo get_template_directory_uri(); ?>/libs/formstyler/jquery.formstyler.css" rel="stylesheet" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/libs/magnific-popup/magnific-popup.css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/libs/animate/animate.min.css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/fonts.css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/skins/<?php
	$options = get_option('sample_theme_options');
	echo $options['selectinput']; ?>.css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/media.css" />
	<link href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans|Oswald|PT+Sans|Roboto|Ubuntu" rel="stylesheet"> 
	<script src="<?php echo get_template_directory_uri(); ?>/libs/jquery/jquery-2.1.3.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/libs/formstyler/jquery.formstyler.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/libs/waypoints/waypoints.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/libs/parallax/parallax.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/libs/scroll2id/PageScroll2id.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/libs/mixitup/mixitup.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/libs/animate/animate-css.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/libs/jcarousel/jcarousel.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jcarousel-basic.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/libs/magnific-popup/jquery.magnific-popup.min.js"></script>		
	<script src="<?php echo get_template_directory_uri(); ?>/libs/jqBootstrapValidation/jqBootstrapValidation.js"></script>
	<script src="https://vk.com/js/api/openapi.js?136" type="text/javascript"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/common.js"></script>

	<?php wp_head(); ?>

</head>
<body>

	<div class="loader">
		<div class="loader_inner"></div>
	</div>

	<header id="header" class="header header_bg" data-parallax="scroll" data-image-src="<?php echo get_template_directory_uri(); ?>/img/bg.jpg" data-z-index="1" data-position="top center">
		<div class="logo_menu">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="logo_container">
							<?php dynamic_sidebar('logo'); ?>
						</div>						
						<nav class="header_menu">
							<ul>
								<li><a href="#header">Наверх</a></li>				
								<li><a href="#s_massage">О массаже</a></li>
								<li><a href="#s_feedback">Отзывы</a></li>
								<li><a href="#s_gallery">Галерея</a></li>
								<li><a href="#s_myself">Обо мне</a></li>			
								<li><a href="#s_price">Стоимость</a></li>
								<li><a href="#s_articles">Статьи</a></li>			
								<li><a href="#s_contacts">Контакты</a></li>
							</ul>
						</nav>						
						<button class="toggle_mnu">
							<span class="sandwich">
								<span class="sw-topper"></span>
								<span class="sw-bottom"></span>
								<span class="sw-footer"></span>
							</span>
						</button>
						<nav class="top_mnu">
							<ul>
								<li><a href="#header">Наверх</a></li>
								<li><a href="#s_massage">О массаже</a></li>
								<li><a href="#s_feedback">Отзывы</a></li>
								<li><a href="#s_gallery">Галерея</a></li>
								<li><a href="#s_myself">Обо мне</a></li>	
								<li><a href="#s_price">Стоимость</a></li>
								<li><a href="#s_articles">Статьи</a></li>			
								<li><a href="#s_contacts">Контакты</a></li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</div>
		<div class="title_wrapper">
			<div class="title_descr">
				<div class="title_centered">
					<div class="title_text">
						<h1><?php echo get_bloginfo('name'); ?></h1>
						<p><?php echo get_bloginfo('description'); ?></p>
						<div class="header_buttons">
							<button class="subscribe">Записаться на сеанс</button>
							<div class="form_enroll mfp-hide" id="enroll_popup">
								<form action="http://formspree.io/pantha_n@mail.ru" class="main_form" novalidate target="_blank" method="POST">
									<label class="form_item">
										<span class="color_element">*</span>Как Вас зовут:
										<input type="text" name="name" placeholder="Ваше имя" data-validation-required-message="Вы не ввели имя" required />
										<span class="help-block text-danger"></span>			
									</label>
									<label class="form_item">
										Ваш E-mail:
										<input type="email" name="email" placeholder="Ваш E-mail"/>				
									</label>
									<label class="form_item">
										<span class="color_element">*</span>Номер телефона:
										<input type="tel" name="tel" placeholder="Номер телефона" data-validation-required-message="Вы не ввели номер телефона" required />
										<span class="help-block text-danger"></span>				
									</label>
									<label class="form_item">
										Выберите вид массажа:
										<p>
											<select name="mas_kind">
											<option value="Классический массаж всего тела">Классический массаж всего тела</option>
											<option value="Традиционный тайский массаж">Традиционный тайский массаж</option>
											</select>
										</p>
									</label>
									<label class="form_item">
										Выберите продолжительность сеанса:
										<p>
											<select name="mas_time">
											<option value="1,5 часа">1,5 часа</option>
											<option value="2 часа">2 часа</option>
											<option value="2,5 часа">2,5 часа</option>
											<option value="3 часа">3 часа</option>
											</select>
										</p>
									</label>
									<label class="form_item">
										Выберите место:
										<p>
											<select name="mas_place">
											<option value="Cтудия А">Cтудия А</option>
											<option value="Студия Б">Студия Б</option>
											<option value="Студия В">Студия В</option>
											</select>
										</p>
									</label>
									<label class="form_item">
										Комментарий:
										<textarea name="message" placeholder="Ваше сообщение"></textarea>				
									</label>
									<p><span class="color_element">*</span> - поля, обязательные для заполнения</p>
									<button class="feedback_send">Отправить</button>
								</form>
							</div>
							<!-- <button class="details">Подробнее</button> -->
						</div>						
					</div>					
					<a href="#s_massage" class="arrow_scroll">
						<p class="details">Узнать больше</p>
							<figure>
								<img src="<?php echo get_template_directory_uri(); ?>/img/arrow.svg" alt="#">
							</figure>						
					</a>
				</div>
			</div>
		</div>
	</header>