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

<?php gt_set_post_view(); ?>

<?php
	if ( have_posts() ){
		while ( have_posts() ){
			the_post();
?>			
			<main class="main">
			<?php
				$category = get_the_category();													
				$cat_link = get_category_link( $category[0] );
			?>
				<div class="post-banner">
					<div class="container post-banner__container">
						<div class="network">
							<ul class="network-list list-reset">
								<li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/fb.svg" alt=""></a></li>
								<li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/insta.svg" alt=""></a></li>
								<li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/tw.svg" alt=""></a></li>
							</ul>
						</div>
						<div class="post-title__content">
							<a href="<?php echo $cat_link; ?>" class="post-category__title"><?php echo $category[0]->cat_name; ?></a>
							<h1 class="blog-title post-title"><?php the_title(); ?></h1>
							<time class="post-date"><?php the_time( ' j F Y ' ); ?></time>
						</div>
						<div class="author">
							<img src="<?php echo get_template_directory_uri(); ?>/img/no-img.png" alt="" class="author author-img">
							<p class="author author-name">Марьяна Калабухова</p>
						</div>
					</div>
				</div>
				<section class="post-content">
					<div class="container post-content__container">
						<div class="post-wrapper">
							<div class="post">
																
								<?php the_content(); ?>
								
							</div>
							<div class="post-links">
								<?php previous_post_link('%link', 'Предыдущая статья', true); ?>
								<?php next_post_link('%link', 'Следующая статья', true); ?>
							</div>

							<?php comments_template(); ?> 

						</div>
						
						<?php get_sidebar(); ?>

					</div>
				</section>
			</main>	
<?php
		}
	} else {
		echo wpautop( 'Постов для вывода не найдено.' );
	}
?>

<?php
get_footer();
