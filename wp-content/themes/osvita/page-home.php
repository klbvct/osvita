<?php
/**
 * Template Name: Главная
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package osvita
 */
 ?>

<?php get_header(); ?>

<main class="main">
	<section class="category-banner">
		<h1 class="category-banner__title"><?php the_title();?> 
		</h1>
	</section>
	<section class="content">
		<div class="container content__container">
			<div class="home home-content">
							
				
				<ul>
					<?php wp_list_categories('title_li='); ?>
				</ul>
				
			</div>
			
			<?php get_sidebar(); ?>
			
		</div>
	</section>
</main>

<?php get_footer(); ?>