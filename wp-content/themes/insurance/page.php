<?php
/* Template name: main */

get_header(); ?>

<?php //echo do_shortcode("[gs_logo]"); ?>
<?php // echo do_shortcode("[wowslider id="1"]"); ?>
<?php// wp_get_archives('type=postbypost'); ?>

<?php if(have_posts()): while(have_posts()):the_post();?>
	<?php the_content(); ?>


	<!--content -->

	<section id="main-content">
		<div class="container">
			<div id="buttons-m-c" style="padding: 30px;" class="row">
				<div  class="col-lg-3 t-elign-c">
					<img id="b-f-b" src="<?php bloginfo("template_directory");?>/image/b_people.png">
				</div>
				<div class="col-lg-3 t-elign-c">
					<button id="b-money" style="border: none;background-color: inherit"><p style="text-align: right;font-family: 'Century Gothic';font-weight: 600;font-size: 12px;margin-right: 25px;margin-bottom: 0px">ВОПРОС<br>СПЕЦИАЛИСТУ</p></button>
				</div>
				<div class="col-lg-3 t-elign-c">
					<button id="b-tool" style="border: none;background-color: inherit"><p style="text-align: right;font-family: 'Century Gothic';font-weight: 600;font-size: 12px;margin-right: 25px;margin-bottom: 0px">СТРАХОВОЙ<br>СЛУЧАЙ</p></button>
				</div>
				<div class="col-lg-3 t-elign-c">
					<button id="b-agent" style="border: none;background-color: inherit"><p style="text-align: right;font-family: 'Century Gothic';font-weight: 600;font-size: 12px;margin-right: 25px;margin-bottom: 0px">СВЯЗАТЬСЯ С<br>АГЕНТОМ</p></button>
				</div>
			</div>
			<div id="c-services" style="padding: 30px;" class="row">
				<div class="col-xs-4">
					<div  class="col-lg-12 c-s-b-transport">
						<button id="s-s-detail-t"><p>УЗНАТЬ ПОДРОБНОСТИ >>></p></button>
					</div>
				</div>
				<div class="col-xs-4">
					<div class="col-lg-12 c-s-b-medical">
						<button id="s-s-detail"><p>УЗНАТЬ ПОДРОБНОСТИ >>></p></button>
					</div>
				</div>
				<div class="col-xs-4">
					<div class="col-lg-12 c-s-b-insurance">
						<button id="s-s-detail-i"><p>УЗНАТЬ ПОДРОБНОСТИ >>></p></button>
					</div>
				</div>
			</div>
			<div class="row">
				<div id="cont-line" class="col-xs-11">

				</div>
			</div>
			<div class="row">
				<div  class="col-xs-11 center">
					<div class="col-lg-8">
						<table class="table-full">
							<tr>
								<td colspan="2">
									<p class="c-about-comp">ЭГИДА - современная страховая компания, которая применяет в своей работе новейшие технологии<br>
										и лучшие международные пратики в сфере управления процессами. Компания входит в глобальную страховую
										группу Liberty Mutual, которая успешно работает на страховом рынке с 1912 года и являеться одной из крупнейших в мире.
									</p>
								</td>
							</tr>
							<tr>
								<td colspan="2">
									<p class="c-about-comp">
										В своей работе на российском рынке мы следуем стандартам и принципам работы Liberty Mutual, главной из которых -
										правильное и ответственное отношение к клиентам, деловым партнерам, сотрудникам и делу, которым мы занимаемся.
									</p>
								</td>
							</tr>
							<tr>
								<td style="width: 21px;vertical-align: top">
									<span class="dot"></span>
								</td>
								<td>
									<p class="c-about-comp">
										Мы сотрудничаем с ведущими страховыми компаниями и банками России
									</p>
								</td>
							</tr>
							<tr>
								<td style="width: 21px;vertical-align: top">
									<span class="dot"></span>
								</td>
								<td>
									<p class="c-about-comp">
										Мы непредвзято относимся к страховщикам и банкам объективно показываем<br>
										вам как преимущества, так и недостатки того или иного продукта в разных компаниях
									</p>
								</td>
							</tr>
							<tr>
								<td style="width: 21px;vertical-align: top">
									<span class="dot"></span>
								</td>
								<td>
									<p class="c-about-comp">
										Мы - это опытная команда страховых, финансовых специалистов и юристов, которая
										обеспечивает поддержку на всех этапах заказа или просчета услуги
									</p>
								</td>
							</tr>
							<tr>
								<td colspan="2">
									<p class="c-about-comp">
										Мы стремимся быть лучшими страховыми партнерами для наших клиентов: предлагать лучьшие продукты, лучшие цены и, конечно,
										лучший уровень обслуживания. Судя по оценкам, которые мы получаем от наших клиентов, у нас это получается.
										Мы будем рады,если и вы оцените нашу работу: вы можете позвонить в Центр контроля качества, отправить информацию через сайт или обратиться
										в любой из наших офисов. Мы работаем для вас и отвечаем для вас и отвечаем зв результат. И мы будем рады разделить наши успехи и
										достижения вместе с вами.
									</p>
								</td>
							</tr>
						</table>
					</div>
					<div id="mult-bg" class="col-lg-4">

					</div>
				</div>
			</div>
		</div>
		<div id="call-b-bg" class="col-xs-12">
			<div style="padding: 30px;text-align: center" class="col-lg-8 center">
				<p style="font-size: 30px;color: white">
					Один номер для любого вопроса <b>+7(473) 239 31 07</b>
				</p>
				<div class="row">
					<div class="col-xs-6">
						<a id="a-tech" href="#"><span id="technologi"></span>Обратный звонок</a>
					</div>
					<div class="col-xs-6">
						<a id="a-map" href="#"><span id="map_b"></span>Обратный звонок</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--News Section -->
	<section>



		<div  style=""  class="col-lg-5 col-lg-offset-1">
			<div style="display: flex; align-items: baseline;" class="col-xs-12">
				<div class="col-lg-6">
					<p style="font-size: 30px">Новости</p>
				</div>
				<div style="text-align: right" class="col-lg-6">
					<a href="<?php echo get_site_url(); ?>/news_post">Все новости</a>
				</div>
			</div>
			<?php

			$argss = array('category_name' => 'news', 'posts_per_page' => 2, 'order'=> 'ASC', 'orderby' => 'title' );
			$postslists = get_posts( $argss);
			foreach ( $postslists as $post ) :
				setup_postdata( $post ); ?>
				<div style="padding: 10px;" class="col-xs-6">
					<div class="col-lg-12">
						<?php the_date(); ?>
						<br/>
						<?php the_title(); ?>
						<?php the_content(); ?>
					</div>
					<a href="<?php the_permalink(); ?>"><button class="news-button">ПОДРОБНЕЕ >></button></a>
				</div>
				<?php
			endforeach;
			wp_reset_postdata();
			?>
			<!--
			<div class="col-xs-6">
			-->



			<!--</div>
			<div class="col-xs-6">
				<button class="news-button">ПОДРОБНЕЕ >></button>
			</div>
			-->
		</div>
		<div style="background: rgb(235,234,230);" class="col-lg-6">
			<div class="col-lg-11">
				<!--
				<div class="col-xs-12">
					<p style="font-size: 30px">Полезная информация</p>
				</div>
				-->
				<div style="display: flex; align-items: baseline;" class="col-xs-12">
					<div class="col-lg-6">
						<p style="font-size: 30px">Полезная информация</p>
					</div>
					<div style="text-align: right" class="col-lg-6">
						<a href="<?php echo get_site_url(); ?>/help_info_post">Все статьи</a>
					</div>
				</div>
				<div class="col-xs-12 no-padding">
						<?php
						$args = array('category_name' => 'help_info', 'posts_per_page' => 2, 'order'=> 'ASC', 'orderby' => 'title' );
						$postslist = get_posts( $args);
						foreach ( $postslist as $post ) :
							setup_postdata( $post ); ?>
							<div style="padding: 10px;" class="col-xs-6">
								<div class="col-lg-12">
									<?php the_date(); ?>
									<br/>
									<?php the_title(); ?>
									<?php the_content(); ?>
								</div>
								<a href="<?php the_permalink(); ?>"><button class="news-button">ПОДРОБНЕЕ >></button></a>
							</div>
							<?php
						endforeach;
						wp_reset_postdata();
						?>

					<!--
					<div class="col-xs-6">
						<button class="news-button">ПОДРОБНЕЕ >></button>
					</div>
					-->
				</div>
			</div>
		</div>




	</section>
	<section>
		<div class="container">
			<div style="display: flex;align-items: center;padding: 10px" class="col-xs-12">
				<!--
				<img id="ou-clients" src="<?php bloginfo("template_directory");?>/image/clients.png" alt="alt">
				-->
				<div class="col-lg-2">
					<span style="font-family: 'Century Gothic';font-weight: 600;font-size: 20px">Наши клиенты</span>
				</div>
				<div class="col-xs-10">
					<?php logo_slider(); ?>
				</div>


			</div>
		</div>
		<div id="orange-line" class="col-lg-12">

		</div>
	</section>

<?php endwhile; endif; ?>

<?php
get_footer();
