<footer class="footer">
	<div class="container footer__container">
		<a class="logo footer__logo">
			<img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="Логотип Блога">
		</a>
		<nav class="nav menu-nav">
			<?php wp_nav_menu( ['container' => ''] ); ?>
		</nav>
		<small class="footer__copy">&copy; Все права защищены ООО "ОТЦ "Европа"</small>
	</div>
</footer>
<?php wp_footer();?>
</body>
</html>