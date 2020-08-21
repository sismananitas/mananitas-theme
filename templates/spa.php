<?php
/**
 * page.php
 * Template Name: Spa
 */

get_header();

$page_id    = (get_post_meta($post->ID, 'pinar_page_id') != null ? get_post_meta($post->ID, 'pinar_page_id', true) : '');
$page_class = (get_post_meta( $post->ID,'pinar_page_class') != null ? get_post_meta($post->ID, 'pinar_page_class', true) : '');
?>
<!-- Inicio de la pagina -->
<section <?= (isset($page_id) && $page_id != '' ? ('id="'. esc_attr($page_id) .'"') : '') ?> class="container size-spa<?= ($page_class !== '' ? esc_attr($page_class) : '') ?>">
	<?php if (have_posts()) : ?>
		<?php while (have_posts()) : ?>
			<?php
				$post_id = get_the_id();
				the_post();
				the_content();
			?>
		<?php endwhile; ?>
	<?php endif; ?>
</section>
<!-- Final de la pagina -->
<a class="bg-mananitas btn-reservation" rel="nofollow" target="_blank" href="https://reservations.synxis.com/gc/rez.aspx?Hotel=22810&Chain=8565&locale=es-ES&adult=2">
	<strong>¡RESERVAR!</strong>
</a>
<a class="whatsapp-movil" rel="nofollow" href="whatsapp://send/?phone=527773280080">
	<i class="fab fa-whatsapp fa-2x"></i>
</a>
<a class="whatsapp-web" rel="nofollow" href="https://web.whatsapp.com/send/?phone=527773280080" target="_blank">
	<i class="fab fa-whatsapp fa-2x"></i>
</a>
<?php
get_footer();
?>
