<!doctype html>
<html>
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title><?php wp_title('|') ?></title>
	<?php wp_head(); ?>
</head>
<?php 
	//get site global settings (settings.php)
	global $_set;
	$settings = $_set->settings;
 ?>
<body <?php body_class(); ?>>
<!-- MENU MOBILE -->
<header class="mobile-header show-for-small-only">
        <div class="grid-container">
            <div class="grid-x align-justify">
                <div class="cell small-5">
                    <a href="<?php echo site_url(); ?>" class="logo"><h1><?php bloginfo( 'name' ) ?></h1></a>
                </div>
                <div class="cell small-3 mobile-buttons">
                    <a href="#" class="open-mobile-menu"><span class="dashicons dashicons-menu"></span></a>
                </div>
            </div>
        </div>
    </header>
    <div class="menu-mobile-container hide">
        <a class="close" href="#">
            <button class="close-button" aria-label="Close alert" type="button" data-close>
                <span aria-hidden="true">&times;</span>
            </button>
        </a>
        <nav class="mobile-navigation">
        <?php 
            $args = array(
                'theme_location' => 'main-menu-mobile',
                'container' => '',
                'depth' => 2,
                'items_wrap' => '<ul id = "%1$s" class = "menu vertical %2$s">%3$s</ul>'
            );

            wp_nav_menu($args);
            ?>
        </nav>
    </div>
<?php do_action( 'cc_theme_before_header' ); ?>
<header class="main-header inner-space__tiny">
    <?php do_action( 'cc_theme_before_header_content' ); ?>
    <div class="grid-container">
        <div class="grid-x grid-padding-x navigation hide-for-small-only">
            <div class="cell large-3 columns logo">
                <a href="<?php bloginfo('url') ?>"><h1 class="site-title"><?php bloginfo('name') ?></h1><span class="tagline"><?php bloginfo( 'description' ) ?></span></a>
            </div>
            <div class="cell large-9 columns nav align-self-middle">
                <nav class="main-navigation">
                        <?php 
                        $args = array(
                            'theme_location' => 'main-menu',
                            'container' => '',
                            'fallback_cb' => false,
                            'items_wrap' => '<ul id = "%1$s" class = "menu %2$s">%3$s</ul>'
                            );

                        wp_nav_menu( $args );
                        ?>
                </nav>
            </div>
        </div>
    </div>
    <?php do_action( 'cc_theme_after_header_content' ); ?>
</header>
<?php do_action( 'cc_theme_after_header' ); ?>