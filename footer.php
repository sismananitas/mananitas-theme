<?php 
/**
 * Footer.php
 * The footer section of the theme 
 */
global $pinar_opt;
?>

<?php if (!is_page_template( 'templates/gallery-fullscreen.php' ) && !is_page_template( 'templates/home-page-fullscreen.php' )) : ?>
	<?php
		if (!empty($pinar_opt['opt-call-action'])) :
			do_shortcode('[pinar-call-to-action]');
		endif;
	?>
	<!-- Top Footer -->
	<div id="top-footer">
		<div id="go-up-box"><i class="fa fa-chevron-up"></i></div>
		<div class="inner-container container">
			<?php 
				/**
				 * Load the "Top Footer" sidebar
				 */
				dynamic_sidebar("top-footer" );
			?>
		</div>
	</div>
	<!-- End of Top Footer -->

	<!-- Footer -->
	<footer id="footer">
		<?php
			$menu_arg = array(
				'theme_location'  => 'footer-menu',
				'container'       => 'nav',
				'menu_class'      => 'footer-menu list-inline'
			);
			wp_nav_menu( $menu_arg );
			?>
		<div class="copy-right">
			<a href="https://lasmananitas.com.mx/aviso-de-privacidad">Aviso de Privacidad</a>
			<br>
			© 2017 <em>Las Mañanitas.</em> Todos los derechos reservados. Developed By <a href="https://www.velosoft.mx/" target="_blank" rel="nofollow">Velosoft.</a>
		</div>
		<div id="botonesWhats"></div>
	</footer>
	<!-- End of Footer -->
</div>
<?php endif; ?>
<?php wp_footer(); ?>
</body>
</html>