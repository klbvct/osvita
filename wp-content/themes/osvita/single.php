<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package osvita
 */

get_header();
?>

<?php
	while ( have_posts() ) : the_post();
?>
<main class="main">
	<div class="post-banner">
		<div class="container post-banner__container" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>');"></div>
	</div>
	<section class="post-content">
		<div class="container post-content__container">
			<div class="post-wrapper">
				<div class="post">
					<div class="post-meta">
						<?php
							$category = get_the_category();													
							$cat_link = get_category_link( $category[0] );
						?>
						<a href="<?php echo $cat_link; ?>" class="post-category"><?php echo $category[0]->cat_name; ?></a>
						<time class="post-date"><?php the_date(); ?></time>
					</div>
					<h1 class="blog-title post-title"><?php the_title(); ?></h1>
					
						<?php the_content(); ?>
					
					<img src="<?php echo get_template_directory_uri(); ?>/img/post-img.jpg" alt="">
				</div>
				<div class="post-links">
					<a href="" class="post-links__link post-links__link--prev">
						<svg width="10" height="11" viewBox="0 0 10 11" fill="none" xmlns="http://www.w3.org/2000/svg">
							<g clip-path="url(#clip0)">
								<path
									d="M2.41344 5.22558L7.03874 0.613083C7.19028 0.462049 7.43563 0.462303 7.58692 0.613865C7.73809 0.765407 7.7377 1.01089 7.58614 1.16205L3.23616 5.50002L7.58629 9.83797C7.73784 9.98914 7.73823 10.2345 7.58708 10.386C7.51124 10.462 7.41188 10.5 7.31253 10.5C7.21342 10.5 7.11446 10.4623 7.03876 10.3868L2.41344 5.77443C2.34046 5.70181 2.2995 5.60299 2.2995 5.50002C2.2995 5.39705 2.34057 5.29834 2.41344 5.22558Z"
									fill="#5D71DD" />
							</g>
							<defs>
								<clipPath id="clip0">
									<rect width="10" height="10" fill="white" transform="matrix(-1 0 0 1 10 0.5)" />
								</clipPath>
							</defs>
						</svg>
						<span>Предыдущая новость</span>
					</a>
					<a href="" class="post-links__link post-links__link--next">
						<span>Следующая новость</span>
						<svg width="6" height="11" viewBox="0 0 6 11" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path
								d="M5.58656 5.22558L0.961262 0.613083C0.80972 0.462049 0.56437 0.462303 0.413081 0.613865C0.26191 0.765407 0.2623 1.01089 0.413862 1.16205L4.76384 5.50002L0.413706 9.83797C0.262164 9.98914 0.261773 10.2345 0.412925 10.386C0.488764 10.462 0.58812 10.5 0.687475 10.5C0.786576 10.5 0.88554 10.4623 0.961243 10.3868L5.58656 5.77443C5.65954 5.70181 5.7005 5.60299 5.7005 5.50002C5.7005 5.39705 5.65943 5.29834 5.58656 5.22558Z"
								fill="#5D71DD" />
						</svg>
					</a>
				</div>
			</div>
			<!-- <aside class="sidebar">
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
			</aside> -->
		</div>
	</section>
</main>	
<?php	
	endwhile; // End of the loop.
?>

<?php
get_footer();
