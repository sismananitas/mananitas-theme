<?php
/**
 *	restaurant.php
 * 	Restaurant template
 *  Template Name: Restaurant
 */
global $pinar_opt;
$price_unit = !empty($pinar_opt['pinar-booking-currency']) ? ravis_currency_converter($pinar_opt['pinar-booking-currency']) : '&#36;';

get_header();
?>
<div id="welcome" class="container" style="margin-top: 30px;">
	<?php if (!empty($pinar_opt['restaurant-welcome-title'])): ?>
		<div class="heading-box">
			<h2><?= esc_html__($pinar_opt['restaurant-welcome-title'], 'pinar') ?></h2>
			<?php if (!empty($pinar_opt['restaurant-welcome-subtitle'])) : ?>
				<div class="subtitle"><?= esc_html__($pinar_opt['restaurant-welcome-subtitle'], 'pinar') ?></div>
			<?php endif; ?>
		</div>
	<?php endif; ?>

	<div class="inner-content" style="margin-top: 40px;">
		<?php if (!empty($pinar_opt['restaurant-welcome-banner']['url'])) : ?>
            <img src="<?= esc_attr($pinar_opt['restaurant-welcome-banner']['url']) ?>" style="width:100%">
			<div
				class="imdg-frame"
				data-parallax="dscroll"
				style="display: none;"
				data-image-src="<?= esc_attr($pinar_opt['restaurant-welcome-banner']['url']) ?>"
			>
			</div>
		<?php endif;
		if (!empty($pinar_opt['restaurant-welcome-text'])) : ?>
			<div class="desc">
				<?= esc_html__($pinar_opt['restaurant-welcome-text'], 'pinar') ?>
				<?php if (!empty($pinar_opt['restaurant-welcome-cite'])) : ?>
					<cite><?= esc_html__($pinar_opt['restaurant-welcome-cite'], 'pinar') ?></cite>
				<?php endif; ?>
			</div>
		<?php endif; ?>
	</div>
</div>

<div id="special-dishes" class="container">
	<?php
	if (!empty($pinar_opt['restaurant-dishes-title'])) : ?>
		<div class="heading-box restaurant-title">
			<h2>Los Cásicos de Las Mañanitas</h2>
		</div>
	<?php endif; ?>
	<div class="room-container">
		<?php $dishes_i = 1;
		foreach ($pinar_opt['restaurant-dishes-slides'] as $resaurant_dishes) :
			if ($resaurant_dishes['title'] == '') continue; ?>
				<div class="room-boxes wow fade <?= ($dishes_i % 2 == 0 ? esc_attr('fadeInLeft right') :  'fadeInRight' ) ?>">
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
			<?php $dishes_i ++;
		endforeach; ?>
	</div>
</div>

<?php
// Promo Section
$promo_bg       = (!empty($pinar_opt['restaurant-promo-background']['url']) ? $pinar_opt['restaurant-promo-background']['url'] : '');
$promo_title    = (!empty($pinar_opt['restaurant-promo-title']) ? $pinar_opt['restaurant-promo-title'] : '');
$promo_subtitle = (!empty($pinar_opt['restaurant-promo-subtitle']) ? $pinar_opt['restaurant-promo-subtitle'] : '');

if ($promo_bg != '' && $promo_title != '') : ?>
	<div class="text-degustación">
		<p>Así como nuestro Menú de <span>Degustación Gourmet...</span></p>
	</div>
	
	<div id="great-taste" class="spacing" data-parallax="scroll" data-image-src="<?= esc_attr($promo_bg) ?>">
		<div class="col-md-8 col-md-offset-2 text-menu">
			<h3 class="text-h3">
				Nuestro exuberante Cellar le permitirá encontrar <span>el maridaje perfecto para que se
				deleite al máximo</span> con nuestras creaciones culinarias, contando con una
				<span>carta de más de 200 diferentes etiquetas de las mejores regiones vitivinicolas del mundo,</span> que harán de su visita a nuestro restaurante de un momento mágico e inolvidable.
			</h3>
			<div class="linea-span2"></div>
		</div>
	</div>
<?php endif; ?>

<div id="restaurant-menu" class="container background-restaurant">
	<?php if (!empty($pinar_opt['restaurant-menu-title'])) : ?>
			<div class="heading-box">
				<h2><?= ravis_fn_title_effect(esc_html__($pinar_opt['restaurant-menu-title'], 'pinar')) ?></h2>
				<?php if (!empty($pinar_opt['restaurant-menu-subtitle'])) : ?>
					<div class="subtitle"><?= esc_html__($pinar_opt['restaurant-menu-subtitle'], 'pinar') ?></div>
				<?php endif; ?>
			</div>
	<?php endif; ?>

	<div class="package-container clearfix">
		<!-- Jrg -->
		<div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-3 horario-contacto">
			<div class="col-sm-6 col-md-6 restaurante-horario">
				<h3>Horarios de servicio</h3>
				<div class="borde-restaurant">
					<p>Desayuno: 8:00 a 12:00 hrs.</p>
					<p>Comida: 13:00 a 18:00 hrs.</p>
					<p>Cena: 19:00 a 22:30 hrs. </p>
					<p>Servicio a cuarto de 8:00 a 22:00 Hrs.</p>
				</div>
			</div>
			<div class="col-sm-6 col-md-6 restaurante-contacto">
				<h3>Contacto</h3>
				<div class="borde-restaurant">
					<p><a href="tel:7773620019">Tel: 777 362 0019</a></p>
					<p>Correo: restaurant@lasmananitas.com.mx</p>
				</div>
			</div>
		</div>
	</div>
</div>
<?php
get_footer();
