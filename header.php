<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php wp_title(' - ', true, 'right'); ?></title>
    <?php do_action('artalk_favicons'); ?>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" title="no title" charset="utf-8"/>
    <script>document.documentElement.className = 'doc-not-ready';</script>
	<?php wp_head(); ?>
</head>
<body>
<div class="row-fluid">
    <div id="no-padding-right" class="container">
        <h1 class="site-title hidden"><?php bloginfo('name'); ?></h1>
        <div class="row logo-search-container">
            <div class="col-lg-10 col-md-9 col-sm-9 col-xs-3 nopadding">
                <a id="logo" href="<?php echo esc_url( home_url( '/' ) ); ?>">
					<?php do_action('artalk_logo'); ?>
                </a>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-3 col-xs-9 nopadding">
				<?php get_search_form();     ?>
            </div>
        </div>
    </div>

    <nav class="navbar-art">
        <div class="container nopadding navbar-toggleable-sm navbar-art-container">
            <div class="container">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar" >
                    <span id ="icona" class="icon-bar"></span>
                    <span id ="icona" class="icon-bar"></span>
                    <span id ="icona" class="icon-bar"></span>
                </button>
            </div>
            <div id="myNavbar" class="navbar-collapse collapse nopadding">
				<?php
				wp_nav_menu( array(
					'theme_location' => 'main-menu',
					'menu' => 'top_menu',
					'container' => false,
					'menu_class' => 'main-menu nav navbar-nav',
					'container_class'   => 'collapse navbar-collapse',
					'container_id'      => 'bs-example-navbar-collapse-1',
					//Process nav menu using our custom nav walker
				));
				?>
        <?php
        wp_nav_menu( array(
          'theme_location' => 'short-main-menu',
          'menu' => 'top_menu',
          'container' => false,
          'menu_class' => 'short-main-menu nav navbar-nav',
          'container_class'   => 'collapse navbar-collapse',
          'container_id'      => 'bs-example-navbar-collapse-1',
          //Process nav menu using our custom nav walker
        ));
        ?>
            </div>
        </div>
    </nav>
<div class="container post-container">
