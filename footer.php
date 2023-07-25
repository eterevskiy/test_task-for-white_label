
	<footer class="footer">
		<div class="container">
			<div class="footer__inner">
				<div class="footer__main">
				<div class="logo">
							<?php the_custom_logo();?>
							<p class="custom-logo__test"><?php the_field('logo_text',37)?></p>
						</div>
				<?php wp_nav_menu([
					'container'       => 'nav',
					'menu' => 'footer_menu',
					'menu_class'=>'menu menu--footer']); ?>
				</div>
				<p class="footer__copyright"><?php the_field('copyright',37)?></p>	
			</div>
			
		</div>
	</footer>
</div>
<?php wp_footer(); ?>

</body>
</html>
