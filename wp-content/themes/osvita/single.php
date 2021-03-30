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
									<time class="post-date"><?php the_time( ' j F Y ' ); ?></time>
								</div>
								<h1 class="blog-title post-title"><?php the_title(); ?></h1>
								
								<?php the_content(); ?>
								
							</div>
							<div class="post-links">
								<?php previous_post_link('%link', 'Предыдущая статья', true); ?>
								<?php next_post_link('%link', 'Следующая статья', true); ?>
							</div>
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
