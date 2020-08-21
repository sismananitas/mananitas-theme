<?php
/**
 *	wide.php
 * 	Wide page template
 *  Template Name: restaurante-mañanitas
 */

get_header();

$page_id    = ( get_post_meta( $post->ID, 'pinar_page_id' ) != null ? get_post_meta( $post->ID, 'pinar_page_id', true ) : '' );
$page_class = ( get_post_meta( $post->ID, 'pinar_page_class' ) != null ? get_post_meta( $post->ID, 'pinar_page_class', true ) : '' );
?>

<div id="welcome" class="container">
<section
	<?= (isset($page_id) && $page_id != '' ? ('id="'. esc_attr( $page_id ) .'"') : '') ?>
	class="main-page-container<?= ($page_class !== '' ? esc_attr( $page_class ) : '') ?>"
>
	<!-- MENSAJE DE BIENVENIDA -->
	<?php if (!empty($pinar_opt['restaurant-welcome-title'])): ?>
		<div class="heading-box">
			<h2><?= esc_html__($pinar_opt['restaurant-welcome-title'], 'pinar') ?></h2>
			<?php if (!empty($pinar_opt['restaurant-welcome-subtitle'])) : ?>
				<div class="subtitle"><?= esc_html__($pinar_opt['restaurant-welcome-subtitle'], 'pinar') ?></div>
			<?php endif; ?>
		</div>
	<?php endif; ?>
	
	<!-- TEXTO ESCRITO EN WORDPRESS -->
	<?php
		if (have_posts()) :
			while (have_posts()) :
				$post_id = get_the_id();
				the_post();
				the_content();
			endwhile;
		endif;
	?>
	
	<div id="special-dishes" class="container">
		<?php if (!empty($pinar_opt['restaurant-dishes-title'])) : ?>
			<div class="heading-box restaurant-title">
				<h2>Los Cásicos de Las Mañanitas</h2>
			</div>
		<?php endif; ?>

		<div class="room-container">
			<?php $dishes_i = 1; ?>
			<?php foreach ($pinar_opt['restaurant-dishes-slides'] as $resaurant_dishes) :
				if ($resaurant_dishes['title'] == '') continue; ?>
					<div class="room-boxes wow fade <?= ($dishes_i % 2 == 0 ? esc_attr('fadeInLeft right') : 'fadeInRight') ?>">
						<div class="img-container col-xs-6 col-md-7">
							<img
								src="<?= esc_attr($resaurant_dishes['image']) ?>"
								alt="<?= esc_attr($resaurant_dishes['title']) ?>"
								class="room-img"
							>
						</div>
						<div class="room-details col-xs-6 col-md-5 imagen-comida">
							<div class="title"><?= esc_html__($resaurant_dishes['title'], 'pinar') ?></div>
							<div class="description"><?= esc_html__($resaurant_dishes['description'], 'pinar') ?></div>

							<?php if (!empty($resaurant_dishes['url'])) : ?>
								<div class="btn btn-default"><?= esc_html($price_unit.$resaurant_dishes['url']) ?></div>
							<?php endif; ?>
						</div>
					</div>
				<?php $dishes_i++; ?>
			<?php endforeach; ?>
		</div>
	</div>
</section>
</div>
<?php
get_footer();
