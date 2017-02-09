<?php get_header(); ?>
<section class="about_massage" id="s_massage">
	<div class="s_header">
		<h2><?php echo get_cat_name(2) ?></h2>
		<div class="describe">
			<p><?php echo category_description(2) ?></p>
		</div>
	</div>
	<div class="s_content">
		<div class="descr_massage">

			<?php if ( have_posts() ) : query_posts('p=61');
				while (have_posts()) : the_post(); ?>	

					<?php the_post_thumbnail(array(240, 240)); ?>
					<h4><?php the_title(); ?></h4>
					<?php the_content(); ?>

			<? endwhile; endif; wp_reset_query(); ?>

			<div class="massage_profit">

				<?php if ( have_posts() ) : query_posts('p=64');
					while (have_posts()) : the_post(); ?>					
				
					<h2><?php the_title(); ?></h2>
					<?php the_content(); ?>

				<? endwhile; endif; wp_reset_query(); ?>				
			</div>
			<!-- <div class="massage_restrict" id="restrict">
				<h2>Ко мне не стоит записываться на сеанс, если:</h2>
				<ul>
					<li><span>вы сторонник сеансов эротического массажа, и надеетесь, что я из-за вашего эгоцентризма буду сознательно паразитировать на вашем непонимании</span></li>
					<li><span>для вас это слишком дорого – проще жить в иллюзии, что все массажи одинаковы и вообще, лучше «расслабиться» при помощи алкоголя</span></li>
					<li><span>для вас количество превалирует над качеством</span></li>
					<li><span>вы под действием алкоголя, и это даже не моя прихоть, а реальное противопоказание</span></li>
					<li><span>имеются абсолютные противопоказания (болезни крови, кожи, инфекционные заболевания, злокачественные опухоли (до их радикального лечения), венерические заболевания, тромбоз, ВИЧ, заболевания с выраженным изменением психики, серьезные сердечнососудистые патологии, температура - воспалительный процесс до его полного завершения)</span></li>
					<li><span>вы не можете расстаться со своим айфоном больше чем на час, поэтому забота о себе для вас в принципе неактуальна</span></li>
					<li><span>вы слишком ревностно относитесь к тому, что время, на которое вы рассчитывали попасть на сеанс, уже занято</span></li>
				</ul>
			</div> -->
			<div class="massage_effect">
				<?php if ( have_posts() ) : query_posts('p=67');
					while (have_posts()) : the_post(); ?>

						<?php the_post_thumbnail(array(240, 240)); ?>
						<?php the_content(); ?>

				<? endwhile; endif; wp_reset_query(); ?>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-sm-6 animation_2 massage_kind">
					<?php if ( have_posts() ) : query_posts('p=70');
						while (have_posts()) : the_post(); ?>	

							<?php the_post_thumbnail(array(240, 240)); ?>
							<h3><?php the_title(); ?></h3>
							<?php the_content(); ?>

					<? endwhile; endif; wp_reset_query(); ?>					
				</div>
				<div class="col-md-6 col-sm-6 animation_3 massage_kind">
					<?php if ( have_posts() ) : query_posts('p=73');
						while (have_posts()) : the_post(); ?>	

							<?php the_post_thumbnail(array(240, 240)); ?>
							<h3><?php the_title(); ?></h3>
							<?php the_content(); ?>

					<? endwhile; endif; wp_reset_query(); ?>							
				</div>					
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-sm-6 animation_2 massage_char">
					<?php if ( have_posts() ) : query_posts('p=76');
						while (have_posts()) : the_post(); ?>

							<?php the_content(); ?>

					<? endwhile; endif; wp_reset_query(); ?>					
				</div>
				<div class="col-md-6 col-sm-6 animation_3 massage_char">
					<?php if ( have_posts() ) : query_posts('p=78');
						while (have_posts()) : the_post(); ?>

							<?php the_content(); ?>

					<? endwhile; endif; wp_reset_query(); ?>						
				</div>
			</div>
		</div>
		<div class="massage_buttons">
			<a href="#s_price" class="price_button">Стоимость</a>
			<button>Записаться</button>
		</div>			
	</div>
</section>	
<section class="gallery" id="s_gallery">
	<div class="s_header">
		<h2><?php echo get_cat_name(4) ?></h2>
		<div class="describe">
			<p><?php echo category_description(4) ?></p>
		</div>
	</div>
	<div class="s_content">
		<div class="container">
			<div class="row">
				<div class="filter_div controls">
					<ul>
						<li class="filter active" data-filter="all">Все фото</li>
						<li class="filter" data-filter=".thai">Тайский массаж</li>
						<li class="filter" data-filter=".classic">Классический массаж</li>
						<li class="filter" data-filter=".other">Другое</li>
					</ul>
				</div>
				<div id="portfolio_grid">

					<?php if ( have_posts() ) : query_posts('cat=4');
						while (have_posts()) : the_post(); ?>
											
							<div class="mix col-md-3 col-sm-6 col-xs-6 portfolio_item <?php
							$tags = wp_get_post_tags($post->ID);
							if ($tags) {
								foreach($tags as $tag) {
									echo ' ' .$tag->name;
								}
							}
							?> ">
								<?php the_post_thumbnail(array (300, 400)); ?>
								<div class="item_container">
									<h3><?php the_title(); ?></h3>							
									<a href="#" class="popup_content">Посмотреть</a>
								</div>
								<div class="hidden">
									<div class="port_descr">
										<h3><?php the_title(); ?></h3>
										<?php the_content(); ?>
										<img src="<?php
										$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large');
										echo $large_image_url[0];
										?>" title="<?php the_title_attribute(); ?>" alt="<?php the_title(); ?>">
									</div>
								</div>
							</div>
					<?php endwhile; endif; wp_reset_query(); ?>					
				</div>
			</div>
		</div>
	</div>
</section>
<section class="about_myself bg_light" id="s_myself">
	<div class="s_header">
		<h2><?php echo get_cat_name(3) ?></h2>
		<div class="describe">
			<p><?php echo category_description(3) ?></p>
		</div>
	</div>
	<div class="s_content">
		<div class="container">
			<div class="row">
				<?php if ( have_posts() ) : query_posts('p=6');
					while (have_posts()) : the_post(); ?>

						<?php the_title(); ?>						
										
				<div class="col-md-4 col-md-push-4 animation_1">
					<div class="myself_icon"><i class="icon-basic-photo"></i></div>
					<div class="photo">
						<?php if ( has_post_thumbnail() ) : ?>
							<a class="popup" href="<?php
							$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large');
							echo $large_image_url[0];
							?>" title="<?php the_title_attribute(); ?>">
								<?php the_post_thumbnail(array(400, 400)); ?>
							</a>
						<?php endif; ?>						
					</div>
				</div>
				<div class="col-md-4 col-md-pull-4 animation_2">
					<div class="myself_icon"><i class="icon-basic-message-txt"></i></div>
					<?php the_content(); ?>
				</div>
					<?php endwhile; endif; wp_reset_query(); ?>				
				<div class="col-md-4 animation_3">
					<div class="myself_icon"><i class="icon-basic-notebook-pen"></i></div>
					<h4>Коржов Иван</h4>
					<?php if ( have_posts() ) : query_posts('p=9');
						while (have_posts()) : the_post(); ?>						
						<?php the_content(); ?>						

						<?php endwhile; endif; wp_reset_query(); ?>
					
					<div class="social">
						<ul>
							<li><a href="#" target="blank"><i class="fa fa-twitter"></i></a></li>
							<li><a href="https://vk.com/massagevsegotela" target="blank"><i class="fa fa-vk"></i></a></li>
							<li><a href="https://www.facebook.com/MassageVsegoTela/?fref=nf&pnref=story" target="blank"><i class="fa fa-facebook"></i></a></li>
							<li><a href="https://plus.google.com/106550984501081542019" target="blank"><i class="fa fa-google-plus-square "></i></a></li>	
						</ul>
					</div>
				</div>
			</div>
		</div>	
		<div class="documents">
			<div class="container">
				<div class="row">			
					<div class="col-md-4 col-sm-4">						
						<img src="<?php echo get_template_directory_uri(); ?>/img/doc_1.png" alt="#">
					</div>
					<div class="col-md-4 col-sm-4">
						<img src="<?php echo get_template_directory_uri(); ?>/img/doc_3.png" alt="#">
					</div>
					<div class="col-md-4 col-sm-4">
						<img src="<?php echo get_template_directory_uri(); ?>/img/doc_2.png" alt="#">
					</div>
				</div>
			</div>
		</div>
	</div>	
</section>

<section class="feedback bg_light" id="s_feedback">
	<div class="s_header">
		<h2><?php echo get_cat_name(5) ?></h2>
		<div class="describe">
			<p><?php echo category_description(5) ?></p>
		</div>
	</div>
	<div class="s_content">
		<div class="wrapper">
			<div class="jcarousel-wrapper">
				<div class="jcarousel">
					<ul>
						<?php if ( have_posts() ) : query_posts('cat=5');
							while (have_posts()) : the_post(); ?>

		            		<li>							
				            	<div class="feedback_cont">			
									<?php the_post_thumbnail(array(220, 220)); ?>
									<h4><?php the_title(); ?></h4>
									<?php the_content(); ?>
								</div>						
			            	</li>

			            <? endwhile; endif; wp_reset_query(); ?>			            
					</ul>
				</div>
				<a href="#" class="jcarousel-control-prev">&lsaquo;</a>
		        <a href="#" class="jcarousel-control-next">&rsaquo;</a>
		    </div>
		</div>
		<button>Оставить отзыв</button>
		<div class="form_enroll mfp-hide" id="feedback_popup">
				<form action="http://formspree.io/pantha_n@mail.ru" class="main_form" novalidate target="_blank" method="POST">
					<label class="form_item">
						Как Вас зовут:
						<input type="text" name="name" placeholder="Ваше имя" />			
					</label>
					<label class="form_item">
						Ваш E-mail:
						<input type="email" name="email" placeholder="Ваш E-mail"/>			
					</label>			
					<label class="form_item">
						Ваш отзыв:
						<textarea name="message" placeholder="Ваше сообщение"></textarea>	
					</label>			
					<button class="feedback_send">Отправить</button>
				</form>
			</div>
		<div  class="massage_details">
			<p><a href="#">>>Узнать еще больше<<</a></p>
		</div>		
	</div>		
</section>

<section class="price" id="s_price">
	<div class="s_header">
		<h2><?php echo get_cat_name(6) ?></h2>
		<div class="describe">
			<p><?php echo category_description(6) ?></p>
		</div>
	</div>
	<div class="s_content">
		<div class="table_price animation_2">
			<div class="table_desktop">
				<?php if ( have_posts() ) : query_posts('p=98');

					while (have_posts()) : the_post(); ?>			            			  
						<h3><?php the_title(); ?></h3>
						<?php the_content(); ?>

				<? endwhile; endif; wp_reset_query(); ?>	
			</div>
			<div class="table_mobile">
				<?php if ( have_posts() ) : query_posts('p=100');

					while (have_posts()) : the_post(); ?>			            			  
						<h3><?php the_title(); ?></h3>
						<?php the_content(); ?>

				<? endwhile; endif; wp_reset_query(); ?>				
			</div>	
		</div>
		<div class="price_buttons">
			<button>Записаться</button>
		</div>
	</div>
</section>	

<section class="articles" id="s_articles">
	<div class="s_header">
		<h2><?php echo get_cat_name(8) ?></h2>
		<div class="describe">
			<p><?php echo category_description(8) ?></p>
		</div>
	</div>
	<div class="s_content">
		<div class="container">
			<div class="row">
				<?php if ( have_posts() ) : query_posts('cat=8');
					while (have_posts()) : the_post(); ?>
											
						<div class="col-md-4 col-sm-4">							
							<div class="article">
								<a href="#" class="art_picture"><?php the_post_thumbnail(array (400, 300)); ?></a>
								<a href="#"><h4><?php the_title(); ?></h4></a>					
								<?php the_content(); ?>
							</div>								
						</div>
						
				<?php endwhile; endif; wp_reset_query(); ?>				
			</div>				
		</div>
		<button>Смотреть все статьи</button>
	</div>
</section>

<section class="contacts bg_light" id="s_contacts">
	<div class="s_header">
		<h2><?php echo get_cat_name(7) ?></h2>
		<div class="describe">
			<p><?php echo category_description(7) ?></p>
		</div>
	</div>
	<div class="s_content">	
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-sm-6">
					<div id="vk_groups"></div>
					<div class="fb_groups"><iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FMassageVsegoTela%2F&tabs=timeline&width=300px&height=230px&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="300px" height="230px" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
					</div>					
				</div>
				<div class="col-md-6 col-sm-6">
					<form action="http://formspree.io/pantha_n@mail.ru" class="main_form"  novalidate target="_blank" method="POST">
						<label class="form-group">
							<span class="color_element">*</span>Ваше имя:
							<input type="text" name="name" placeholder="Ваше имя" data-validation-required-message="Вы не ввели имя" required />
							<span class="help-block text-danger"></span>
						</label>
						<label class="form-group">
							<span class="color_element">*</span>Ваш E-mail:
							<input type="email" name="email" placeholder="Ваш E-mail" data-validation-required-message="Вы не ввели e-mail" required />
							<span class="help-block text-danger"></span>
						</label>
						<label class="form-group">
							<span class="color_element">*</span>Ваше сообщение:
							<textarea name="message" placeholder="Ваше сообщение" data-validation-required-message="Вы не ввели сообщение" required></textarea>
							<span class="help-block text-danger"></span>
						</label>
						<p><span class="color_element">*</span> - поля, обязательные для заполнения</p>
						<button>Отправить</button>
					</form>						
				</div>
			</div>
		</div>
		<div  class="container adress">
			<div class="row">
				<div class="col-md-6 col-sm-6">
					<div class="contact_box">
						<div class="contact_icon icon-basic-geolocalize-01"></div>
						<h3>Адрес</h3>
						<p><?php
							$options = get_option('sample_theme_options');
							echo $options['adress_text']; ?></p>
					</div>
					<div class="contact_box">
						<div class="contact_icon icon-basic-smartphone"></div>
						<h3>Телефон</h3>
						<p><?php
							$options = get_option('sample_theme_options');
							echo $options['phone_text']; ?></p>
					</div>
					<div class="contact_box">
						<div class="contact_icon icon-basic-mail-multiple"></div>
						<h3>E-mail</h3>
						<a href="mailto: pantha_n@mail.ru"><?php
							$options = get_option('sample_theme_options');
							echo $options['email_text']; ?></a></li>
					</div>
					<!-- <div class="social">
						<ul>
							<li><a href="#" target="blank"><i class="fa fa-twitter"></i></a></li>
							<li><a href="https://vk.com/massagevsegotela" target="blank"><i class="fa fa-vk"></i></a></li>
							<li><a href="https://www.facebook.com/MassageVsegoTela/?fref=nf&pnref=story" target="blank"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#" target="blank"><i class="fa fa-google-plus-square "></i></a></li>							
						</ul>
					</div> -->
				</div>
				<div class="col-md-6 col-sm-6">
					<div class="map">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1270.8351868467041!2d30.603155658260942!3d50.42861280354091!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNTDCsDI1JzQzLjAiTiAzMMKwMzYnMTUuMyJF!5e0!3m2!1sru!2sua!4v1481484412520" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>
				</div>
			</div>
		</div>			
	</div>
</section>
<?php get_footer(); ?>