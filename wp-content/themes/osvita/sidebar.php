<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package osvita
 */
?>
<aside class="sidebar">
	<div class="sidebar-category">
		<h3 class="popular-posts__title blog-title">Категории</h3>
		<ul class="list-reset">
			<?php wp_list_categories('title_li='); ?>
		</ul>
	</div>	
	<div class="popular-posts">
		<h3 class="popular-posts__title blog-title">Популярные новости</h3>
		<ul class="popular-posts__list list-reset">
			<?php
				// задаем нужные нам критерии выборки данных из БД
				$args = array(
					'posts_per_page' => 5,
					'meta_key' => 'post_views_count',
					'orderby' => 'meta_value_num',
					'order' => 'DESC'
				);

				$query = new WP_Query( $args );

				// Цикл
				if ( $query->have_posts() ) {
					while ( $query->have_posts() ) {
						$query->the_post();
			?>
			
				<li class="popular-posts__item">
					<article class="blog-post popular-post__article">
						<h3 class="blog-post__title blog-title blog-post__title-sidebar">
							<a href="<?php echo get_the_permalink(); ?>" class="blog-post__link"><?php the_title(); ?></a>
						</h3>
						<time class="blog-post__date"><?php the_time( ' j F Y ' ); ?></time>
					</article>
				</li>

			<?php	}
				} else {
					echo 'Постов не найдено';
				}
				// Возвращаем оригинальные данные поста. Сбрасываем $post.
				wp_reset_postdata();
			?>

		</ul>
	</div>
	<div class="subscribe">
		<h3 class="subscribe__title blog-title">Подписаться</h3>
		<ul class="social social__justy-center list-reset">
			<li class="social__item"><a href="https://www.facebook.com/MarianaKalabukhova" class="social__link social__link--fb" aria-label="Наш фейсбук"></a></li>
			<li class="social__item"><a href="https://www.instagram.com/mariana_klb/" class="social__link social__link--insta" aria-label="Наш инстаграм"></a></li>
			<li class="social__item"><a href="https://t.me/education_design" class="social__link social__link--tw" aria-label="Наш телеграм"></a></li>
		</ul>
	</div>
</aside>
