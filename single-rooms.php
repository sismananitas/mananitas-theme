<?php
// archive-rooms.php
// Room Archive

global $post, $pinar_opt;
get_header();
?>
<?php while (have_posts()) : ?>
	<?php
		the_post();
		$post_id       = get_the_id();
		$rooms_price   = get_post_meta($post_id, 'rooms_price', true);
		$room_imgs_id  = explode(',' , get_post_meta($post_id, 'rooms_slideshow_images', true));
		$features_list = '';
		$room_services = get_post_meta($post_id, 'rooms_services_checkboxes', true);

		if (!empty($room_services)) :
			foreach ($room_services as $room_service) :
				$service_post = get_post($room_service);

				if (!empty($service_post->post_title)) :
					$features_list .= '<li><i class="fa fa-check"></i>'. esc_html($service_post->post_title) .'</li>';
				endif;
			endforeach;
		endif;
	?>
	<div class="room-detail-page">
		<div id="room-details-slider">
			<?php foreach ($room_imgs_id as $room_img_id) : ?>
				<?php if (empty($room_img_id)) continue; ?>
				<div class="items">
					<?= wp_get_attachment_image($room_img_id, 'full') ?>
				</div>
			<?php endforeach; ?>
	    </div>
		<!-- BOTON RESERVAR -->
		<div class="boton-center">
			<form class="booking-form" action="https://reservations.synxis.com/gc/rez.aspx?Hotel=22810&Chain=8565&locale=es-ES&adult=2" method="post">
				<div class="booking-button-container reservar col-xs-12">
					<input class="btn btn-default" value="Reservar" type="submit">
				</div>
			</form>
		</div>
		<!-- FIN BOTON RESERVAR -->
	    <div class="booking-title-box">
	    	<div class="booking-title-box-inner container">
				<div class="heading-box">
					<h2><?= ravis_fn_title_effect(esc_html(get_the_title())); ?></h2>
					<!-- <div class="subtitle price">
					//echo esc_html(ravis_fn_price_value($rooms_price) );<span>-// esc_html_e( 'Per Night', 'pinar' );</span>
					</div> -->
				</div>
 				<!-- // echo do_shortcode('[pinar-availability-form type="horizontal"]' ); -->
	        </div>
	    </div>
	    <div class="room-details container">
	    	<div class="description"><?php the_content(); ?> <a href="https://wa.me/527773280080?text=Hola.%20Quisiera%20saber%20sobre%20la%20habitación%20<?= esc_html(get_the_title()) ?>" target="_blank" rel="nofollow">Reserve aquí</a></div>
	    	<ul class="services list-inline">
				<?= balancetags($features_list ); ?>
			</ul>
		</div>
	</div>
	
	<?= do_shortcode('[pinar-other-rooms title="Otras Habitaciones"]'); ?>

	<div class="cancelacion">
		<div class="cancelacion--content">
			<p class="politica">
				Política de cancelación y reembolso
			</p>
			<p class="text-politica">
				Nuestra política de cancelación o cambio es de 7 días antes de la fecha de llegada, de no cancelar en tiempo y forma se
				hará el cargo de No Show de la primer noche por habitación como penalización.
			</p>
		</div>
	</div>
<?php endwhile; ?>

	<a class="whatsapp-movil" href="whatsapp://send/?phone=527773280080">
		<i class="fab fa-whatsapp fa-2x"></i>
	</a>
	<a class="whatsapp-web" href="https://web.whatsapp.com/send/?phone=527773280080" target="_blank" rel="noopener noreferrer">
		<i class="fab fa-whatsapp fa-2x"></i>
	</a>
<?php get_footer(); ?>
