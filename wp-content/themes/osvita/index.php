<?php get_header(); ?>

<main class="main">
	<section class="banner">
		<div class="container">
			<img src="<?php echo get_template_directory_uri(); ?>/img/banner.jpg" alt="">
		</div>
	</section>
	<section class="content">
		<h1 class="visually-hidden">Статьи нашего блога</h1>
		<div class="container content__container">
			<div class="posts">
				<article class="blog-post blog-post--main">
					<a href="#cat" class="blog-post__category">Категория 1</a>
					<h3 class="blog-post__title blog-title">
						<a href="#link" class="blog-post__link">
							Управление ИТ-активами – скучная рутина или творческая задача?
						</a>
					</h3>
					<p class="blog-post__descr">
						Размышляя об управлении ИТ-активами, я вспомнил один учебный пример. Менеджер по ИТ-мощностям в крупной компании
						периодически готовил толстенный отчёт руководству. В очередной раз он не принёс отчёт, решив проверить, нужен ли
						он вообще.
					</p>
					<time class="blog-post__date">13 дек 2020</time>
				</article>
				<ul class="post-grid list-reset">
					<?php
						// проверяем есть ли посты в глобальном запросе - переменная $wp_query
						if( have_posts() ){
							// перебираем все имеющиеся посты и выводим
							while( have_posts() ){
								the_post();
								?>

									<li class="post-grid__item">
										<article class="blog-post">
											<?php
												$category = get_the_category();													
												$cat_link = get_category_link( $category[0] );
											?>
											<a href="<?php echo $cat_link; ?>" class="blog-post__category">
												<?php echo $category[0]->cat_name; ?> 
											</a>
											<h3 class="blog-post__title blog-title">
												<a href="<?php echo get_the_permalink(); ?>" class="blog-post__link">
													<?php the_title(); ?>
												</a>
											</h3>
											<p class="blog-post__descr">
												<?php echo get_the_excerpt(); ?>
											</p>
											<time class="blog-post__date">
												<?php the_date(' j F Y '); ?>
											</time>
										</article>
									</li>

								<?php
							}
							
						}
						// постов нет
						else {
							echo "<h2>Записей нет.</h2>";
						}
					?>
				</ul>
				<ul class="pagination list-reset">
					<li class="pagination__item">
						<a class="pagination__link pagination__link--current">1</a>
					</li>
					<li class="pagination__item">
						<a href="#" class="pagination__link">2</a>
					</li>
					<li class="pagination__item">
						<a href="#" class="pagination__link">3</a>
					</li>
					<li class="pagination__item">
						<a href="#" class="pagination__link">4</a>
					</li>
				</ul>
			</div>
			<aside class="sidebar">
				<div class="popular-posts">
					<h3 class="popular-posts__title blog-title">Популярные новости</h3>
					<ul class="popular-posts__list list-reset">
						<li class="popular-posts__item">
							<article class="blog-post popular-post__article">
								<h3 class="blog-post__title blog-title">
									<a href="" class="blog-post__link">ITAM&SAMDay – самая настоящая удача!</a>
								</h3>
								<time class="blog-post__date">13 дек 2020</time>
							</article>
						</li>
						<li class="popular-posts__item">
							<article class="blog-post popular-post__article">
								<h3 class="blog-post__title blog-title">
									<a href="" class="blog-post__link">
										Секреты лицензирования. Всё, что вы хотели знать про Microsoft, SAP и
										Oracle, но
										не знали, у кого спросить ...
									</a>
								</h3>
								<time class="blog-post__date">13 дек 2020</time>
							</article>
						</li>
						<li class="popular-posts__item">
							<article class="blog-post popular-post__article">
								<h3 class="blog-post__title blog-title">
									<a href="" class="blog-post__link">
										Менеджмент XXI века. Надо ли готовиться к изменениям или мы давно уже
										должны были
										измениться?
									</a>
								</h3>
								<time class="blog-post__date">13 дек 2020</time>
							</article>
						</li>
					</ul>
				</div>
				<div class="subscribe">
					<h3 class="subscribe__title blog-title">Подписка на рассылку</h3>
					<form action="#" class="subscribe__form sub-form">
						<input type="email" class="sub-form__input form-input" placeholder="Email@gmail.com">
						<button class="sub-form__btn form-btn btn-reset">
							<span>Подписаться</span>
							<svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
								<g clip-path="url(#clip0)">
									<path
										d="M19.5857 9.85046L1.01474 1.27924C0.719033 1.14496 0.366184 1.22496 0.160475 1.47924C-0.046663 1.73352 -0.0538057 2.09494 0.143332 2.35636L6.25033 10.499L0.143332 18.6417C-0.0538057 18.9031 -0.046663 19.2659 0.159046 19.5188C0.297614 19.6917 0.504752 19.7845 0.714747 19.7845C0.816173 19.7845 0.917599 19.7631 1.01331 19.7188L19.5843 11.1476C19.8386 11.0304 20 10.7776 20 10.499C20 10.2205 19.8386 9.9676 19.5857 9.85046Z"
										fill="white" />
								</g>
								<defs>
									<clipPath id="clip0">
										<rect width="20" height="20" fill="white" transform="translate(0 0.5)" />
									</clipPath>
								</defs>
							</svg>

						</button>
					</form>
				</div>
			</aside>
		</div>
	</section>
</main>

<?php get_footer(); ?>