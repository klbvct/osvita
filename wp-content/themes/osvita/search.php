<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package osvita
 */

get_header();
?>
<main class="main">
	<section class="search-blocks">
		<div class="container search-blocks__container">
			<h1 class="search-blocks__title blog-title">Результаты поиска</h1>
			<div class="posts">
				<ul class="post-grid list-reset">
					<li class="post-grid__item">
						<article class="blog-post">
							<a href="" class="blog-post__category">Категория 1</a>
							<h3 class="blog-post__title blog-title">
								<a href="#" class="blog-post__link">
									Управление ИТ-активами – скучная рутина или творческая задача?
								</a>
							</h3>
							<p class="blog-post__descr">
								Размышляя об управлении ИТ-активами, я вспомнил один учебный пример. Менеджер по ИТ-мощностям в крупной
								компании
								периодически готовил толстенный отчёт руководству. В очередной раз он не принёс отчёт, решив проверить, нужен
								ли
								он вообще.
							</p>
							<time class="blog-post__date">13 дек 2020</time>
						</article>
					</li>
				</ul>
			</div>
		</div>
	</section>
</main>

	<main id="primary" class="site-main">

		<?php if ( have_posts() ) : 
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();
		?>
				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'search' );

		<?php	endwhile; ?>

			the_posts_navigation();

		<?php else: ?>

			get_template_part( 'template-parts/content', 'none' );

		<?php endif; ?>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
