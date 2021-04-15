<?php get_header(); ?>

<main class="main">
	<section class="banner">
		<div class="container">
			<h1 class="category-banner__title">Статьи нашего блога</h1>
		</div>
	</section>
	<section class="content">

		<div class="container content__container">
			<div class="posts">
				<ul class="post-grid list-reset">
				
				<?php if ( have_posts() ) { while ( have_posts() ) { the_post(); ?>
					<!-- Цикл WordPress -->
					<!-- Вывод постов: the_title() и т.д. -->
					<li class="post-grid__item">
						<article class="blog-post">
							<?php
								$category = get_the_category();													
								$cat_link = get_category_link( $category[0] );
							?>
							<a href="<?php echo $cat_link; ?>" class="blog-post__category">
								<?php echo $category[0]->cat_name; ?> 
							</a>
							<h2 class="blog-post__title blog-title">
								<a href="<?php echo get_the_permalink(); ?>" class="blog-post__link">
									<?php the_title(); ?>
								</a>
							</h2>
							<p class="blog-post__descr"><?php echo get_the_excerpt(); ?></p>
							<time class="blog-post__date"><?php the_time( ' j F Y ' ); ?></time>
						</article>
					</li>
				<?php } } else { ?>
					<p>Записей нет.</p>
				<?php } ?>

				</ul>
				
				<?php the_posts_pagination(); ?> 
				
			</div>
			
			<?php get_sidebar(); ?>
			
		</div>
	</section>
</main>

<?php get_footer(); ?>