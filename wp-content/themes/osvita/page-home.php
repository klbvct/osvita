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
	<section class="home-banner__bg">
		<div class="container home-banner">
			<div class="home-banner-text">
				<h1 class="home-banner__title">Индивидуальная траектория<br>в обучении и образовании</h1>
				<p class="home-banner__desc">Путь развития и образования каждого человека настолько индивидуален, насколько уникальны его отпечатки пальцев. В современном мире нет гарантированного и массового пути обучения, который подходит для всех!</p>
				<p class="home-banner__desc">Обучение больше не линейно. Оно фрагментарно и во времени, и в пространстве. Мы больше не можем выбрать одну профессию на всю жизнь, но можем «собрать» свое образование из множества "пазлов". Создать свой собственный образовательный дизайн, сформировать свою уникальную модель обучения, развития и карьеры!</p>
			</div>
			<div class="home-banner-img">
				<img src="<?php echo get_template_directory_uri(); ?>/img/marianna.svg" alt="" class="home-banner__img">
				<p class="home-banner__bold">Марьяна Калабухова </p>
				<p>Автор проекта Дизайн Образования,<br>консультант по обучению, PhD</p>
			</div>
		</div>
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