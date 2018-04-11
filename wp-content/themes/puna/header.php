<?php
	/**
	 * Header.php
	 * The header section of the theme
	 */
	global $puna_opt;
	include_once( ABSPATH . 'wp-admin/includes/plugin.php' );

	$puna_page_meta_id = (get_post_meta(get_the_id(), 'puna_page_id', true) ? get_post_meta(get_the_id(), 'puna_page_id', true) : '');
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php esc_attr(bloginfo('charset')); ?>">
	<meta name="description" content="<?php esc_attr(bloginfo('description')); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=2.0, user-scalable=no">
	<?php if (get_field('favicon', 'option')): ?>
		<link rel=icon href="<?= the_field('favicon', 'option') ?>" type="image/png">
	<?php endif ?>
	
	<?php wp_head(); ?>
	<!-- <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.php"> -->
	
		<?php  include 'assets/css/style.php';  ?>
	
	
</head>
<body <?php echo (!empty($puna_page_meta_id)) ?  ' id="' . esc_attr($puna_page_meta_id) . '"' : '';
	body_class();
?>
>
	<div id="main-wrapper">
		<!-- Main Header -->
		<header id="main-header" <?php echo !empty($puna_opt['puna-booking-button']) ? esc_attr('class=has-booking-btn') : '';?>>
			<div class="inner-container container">
				<div class="logo-container col-xs-4 col-md-2">
					<?php
					if (get_field('logo', 'option')) {?>
						<a href="<?= esc_url( home_url('/') ) ?>"><img style="max-width:100%; max-height: 106px"  src="<?= the_field('logo', 'option')  ?>"></a>
						
					<?php }else{
						if(isset($puna_opt['logo-image-normal']) && $puna_opt['logo-image-normal']['url']!='')
						{
							echo '<a href="'.esc_url( home_url('/') ).'"><img style="max-width:100%; max-height: 106px" src="'.esc_attr($puna_opt['logo-image-normal']['url']).'" alt="'.esc_attr(wp_get_theme()->name).'"></a>';
						}
						else{
						?>
						<a href="<?php echo esc_url( home_url('/') ) ?>" id="top-logo" <?php echo is_rtl() ? 'class="rtl"' : '' ?>>
							<span class="sub-title"><?php esc_html_e('Real Estate', 'puna') ?></span>
							<span class="title"><?php esc_html_e('Puna', 'puna') ?></span>
						</a>
						<?php
						}
					}
					
					?>
				</div>
				<div class="nav-container col-xs-8 col-md-10">
					<div class="t-header clearfix">
						<div class="lang-box">
							<?php
							if(function_exists('pll_the_languages'))
							{
								pll_the_languages(array('dropdown'=>1));
							}
							elseif(has_action( 'icl_language_selector' ))
							{
								do_action('icl_language_selector');
							}
							elseif(!empty($puna_opt['opt-language-switcher']))
							{
								echo '
									<!-- Language Switcher -->
									<select id="language-switcher">
										<option value="1">'.esc_html__( 'English', 'puna' ).'</option>
										<option value="2">'.esc_html__( 'Arabic', 'puna' ).'</option>
									</select>
									<!-- End of Language Switcher -->
								';
							}
							?>

						</div>
						<div class="contact-info hidden-xs hidden-sm">
							<ul class="list-inline">
								<?php
								echo (isset($puna_opt['opt-web-site-phone']) && $puna_opt['opt-web-site-phone'] !=='') ? '<li class="phone">'.esc_html($puna_opt['opt-web-site-phone']).'</li>' : '';
								echo (isset($puna_opt['opt-web-site-email']) && $puna_opt['opt-web-site-email'] !=='') ? '<li class="email">'.esc_html($puna_opt['opt-web-site-email']).'</li>' : '';
								?>
							</ul>
						</div>
					</div>
					<div class="b-header hidden-xs hidden-sm hidden-md clearfix">
						<?php
							$puna_menu_arg = array(
								'theme_location' => 'top-menu',
								'container'      => 'nav',
								'container_id'   => 'main-menu',
								'menu_class'     => 'main-menu list-inline',
							);
							wp_nav_menu($puna_menu_arg);
						?>
					</div>
					<!-- Menu Handel -->
					<div id="main-menu-handle" class="hidden-lg"><i class="fa fa-bars"></i></div>

					<?php if(!empty($puna_opt['puna-booking-button']) && is_plugin_active( 'puna/puna.php' )) : ?>
					<a href="#booking-form" id="header-book-visit-btn" class="btn btn-sm"><span class="inner-box"><i class="fa fa-calendar"></i><span class="text"><?php esc_html_e('Schedule a Visit', 'puna'); ?></span></span></a>
					<?php endif; ?>
					
				</div>
			</div>
			<div id="mobile-menu-container" class="hidden-lg"></div>
		</header>
		<!-- End of Main Header -->

		<?php
			if ( !is_front_page() && !is_page_template( 'templates/no-sidebar-no-breadcrumb.php' ) )
			{
			$puna_main_page_title       = explode(' | ', wp_title( " | ", false, "right" ));
		?>
		<!-- BreadCrumb Section	 -->
		<div id="breadcrumb-section" data-parallax="scroll" data-image-src="<?php echo esc_attr( puna_tm_breadcrumb_bg( get_the_id() ) ) ?>">
			<div class="inner-container container">
				<?php if(!is_single()): ?>
				<h1><?php echo balancetags(puna_tm_title_effect($puna_main_page_title[0])) ?></h1>
				<?php endif; ?>
				<div class="breadcrumb">
					<?php
						if(function_exists('puna_tm_breadcrumbs'))
						{
							puna_tm_breadcrumbs();
						}
					?>
				</div>
			</div>
		</div>
		<!-- End of BreadCrumb Section	 -->
		<?php
			}