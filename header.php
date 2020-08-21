<?php
/**
 * Header.php
 * The header section of the theme
 */
global $pinar_opt;

$page_meta_id    = (get_post_meta( get_the_id() , 'pinar_page_id', true ) ? get_post_meta( get_the_id() , 'pinar_page_id', true ) : '');
$page_meta_class = (get_post_meta( get_the_id() , 'pinar_page_class', true ) ? get_post_meta( get_the_id() , 'pinar_page_class', true ) : '');
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php esc_attr( bloginfo( 'charset' ) ); ?>">
	<meta name="description" content="<?php esc_attr( bloginfo( 'description' ) ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=2.0, user-scalable=no">
	
	<!-- PINAR -->
	<?php if (isset($pinar_opt['opt-custom-css']) && $pinar_opt['opt-custom-css'] !=='') : ?>
		<style type="text/css"><?= balanceTags( $pinar_opt["opt-custom-css"] ) ?></style>
	<?php endif; ?>
	<!-- /PINAR -->
	<?php wp_head(); ?>
	<!-- Facebook Pixel Code -->
	<!-- <script>
		!function(f,b,e,v,n,t,s)
		{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
		n.callMethod.apply(n,arguments):n.queue.push(arguments)};
		if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
		n.queue=[];t=b.createElement(e);t.async=!0;
		t.src=v;s=b.getElementsByTagName(e)[0];
		s.parentNode.insertBefore(t,s)}(window, document,'script',
		'https://connect.facebook.net/en_US/fbevents.js');
		fbq('init', '504080803357280');
		fbq('track', 'PageView');
	</script> -->
	<!-- <noscript>
		<img
			height="1"
			width="1"
			style="display:none"
			src="https://www.facebook.com/tr?id=504080803357280&ev=PageView&noscript=1"
		>
	</noscript> -->
	<!-- End Facebook Pixel Code -->

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-155191796-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());
		gtag('config', 'UA-155191796-1');
	</script>
</head>
<body
	<?php
		if (!empty($page_meta_id)) echo ' id="'.$page_meta_id.'"';
        $pinar_body_class =
        	( isset($pinar_opt['opt-sticky-header']) && $pinar_opt['opt-sticky-header'] =='1'  ? esc_attr(' sticky ') : '')
        	.( (!empty($pinar_opt['opt-layout']) && $pinar_opt['opt-layout'] == '2') ? ' boxed ' : '')
        	.( (!empty($pinar_opt['opt-pattern'])) ? ' pattern-'.$pinar_opt['opt-pattern'].' ' : '')
        	.( is_singular('rooms') ? esc_attr(' room-details ') : '')
        	.( is_post_type_archive('guest_book') ? ' guest-book ' : '')
        	.( is_page_template('templates/booking.php') ? ' booking-page ' : '')
            .( isset($pinar_opt['opt-trans-header']) && $pinar_opt['opt-trans-header'] == '1'  ? esc_attr(' trans-header ') : '')
            .' '.$page_meta_class;
        body_class($pinar_body_class);
    ?>
>
	<div id="main-wrapper">
		<?php if (!is_page_template('templates/home-page-alt.php')) : ?>
			<!-- Top Header -->
			<!-- End of Top Header -->
		<?php endif; ?>
		<!-- Main Header -->
		<header id="main-header">
			<!-- <div class="inner-container <?= !is_page_template('templates/home-page-fullscreen.php') ? 'container' : ''; ?>"> -->
			<div class="inner-container">
				<div class="left-sec col-lg-3 col-sm-4 <?= !is_page_template('templates/home-page-fullscreen.php') ? 'col-md-2' : 'col-md-3' ?> clearfix">
					<!-- Top Logo -->
					<a
						href="<?= esc_url(home_url('/')); ?>"
						id="top-logo" <?= ((isset($pinar_opt['logo-image-normal']) && $pinar_opt['logo-image-normal']['url'] != '') ? 'class="logo-img"' : ''); ?>
					>
						<?php if (isset($pinar_opt['logo-image-normal']) && $pinar_opt['logo-image-normal']['url'] != ''): ?>
							<img src="<?= esc_attr($pinar_opt['logo-image-normal']['url']) ?>" alt="<?= esc_attr($pinar_opt['opt-hotel-name']) ?>">

						<?php else: ?>
							<span class="title">
								<span><?= esc_html($pinar_opt['opt-hotel-name']); ?></span>
								<?php esc_html_e( 'Hotel', 'pinar' ); ?>
							</span>
							<?php $hotel_stars = (isset($pinar_opt['opt-hotel-stars']) && $pinar_opt['opt-hotel-stars'] != '' ? intval($pinar_opt['opt-hotel-stars']) : 5); ?>

							<?php for ($i = 0; $i < $hotel_stars; $i++): ?>
								<i class="fa fa-star-o"></i>
							<?php endfor; ?>
						<?php endif; ?>
					</a>
				</div>
				<div class="right-sec col-lg-8 col-sm-8 <?= !is_page_template('templates/home-page-fullscreen.php') ? 'col-md-10' : 'col-md-9'; ?> clearfix">
					<!-- Book Now -->
					<!-- <a href="<?php // echo ( !empty(RAVIS_BOOKING_PAGE_URL) ? esc_url( RAVIS_BOOKING_PAGE_URL ) : '#' ) ?>" class="book-now-btn btn btn-default btn-sm btn-out-border">
					<?php // esc_html_e( 'Book Now', 'pinar' ); ?>
					</a> -->
					<a href="<?= site_url("?page_id=92") ?>">
						<img src="<?php bloginfo('template_url') ?>/img/RELAIS-ET-CHATEAUX-LOGO.png" class="btn-out-border:before logo1 ">
					</a>
					<!-- Main Menu -->
					<div class="menu-container">
						<?php
							$menu_arg = array(
								'theme_location'  => 'top-menu',
								'container'       => 'nav',
								'container_id'    => 'main-menu',
								'menu_class'      => 'main-menu list-inline',
							);
							wp_nav_menu( $menu_arg );
						?>
	                </div>
					<!-- Menu Handel -->
					<div id="main-menu-handle" class="hidden-md hidden-lg"><i class="fa fa-bars"></i></div>
				</div>
			</div>
			<div id="mobile-menu-container" class="hidden-md hidden-lg"></div>
		</header>
		<!-- End of Main Header -->
		<?php
		if (
			! is_page_template('templates/home-page.php') &&
		    ! is_page_template('templates/home-page-alt.php') &&
		    ! is_page_template('templates/gallery-fullscreen.php') &&
		    ! is_singular('rooms') &&
		    ! is_page_template('templates/contact-alt.php')  &&
		    ! is_page_template('templates/home-page-fullscreen.php') &&
			! is_page_template('templates/no-bread.php') &&
			! is_page_template('templates/wide-no-bread.php')
		):
			if (get_the_id() == 272):
				$main_page_title = explode(' | ', wp_title( " | ", false, "right" ));
			?>
				<!-- Internal Page Header -->
				<div class="internal-page-title about-page" data-parallax="scroll" data-image-src="<?= esc_attr(ravis_fn_breadcrumb_bg(get_the_id())) ?>">
					<h1><?= balancetags(ravis_fn_title_effect($main_page_title[0])) ?></h1>
					<h2 class="by">by <em>Las Mañanitas</em></h2>
					<?php
						if (function_exists('ravis_fn_breadcrumbs')):
							ravis_fn_breadcrumbs();
						endif;
					?>
	        	</div>
				<!-- End of Internal Page Header -->
			<?php
			else:
				$main_page_title = explode(' | ', wp_title(" | ", false, "right"));
			?>
				<!-- Internal page header -->
				<div class="internal-page-title about-page" data-parallax="scroll" data-image-src="<?= esc_attr(ravis_fn_breadcrumb_bg(get_the_id())) ?>">
					<h1><?= balancetags(ravis_fn_title_effect($main_page_title[0])) ?></h1>
					<?php
						if (function_exists('ravis_fn_breadcrumbs')):
							ravis_fn_breadcrumbs();
						endif;
					?>
	       		</div>
				<!-- End of Internal Page Header -->
			<?php
			endif;
		endif;