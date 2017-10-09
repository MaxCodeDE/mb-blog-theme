<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <?php
    $option = array(
    	'procastinate_fonts' => intval(get_option('procastinate-fonts', 1)) == 1,
        'sidebar_active' => intval(get_option('sidebar-active')) == 1,
    );
    ?>

    <?php if ( ! function_exists( '_wp_render_title_tag' ) ) {
    	function theme_slug_render_title() { ?>
            <title><?php wp_title( '|', true, 'right' ); ?></title>
        <?php }
    	add_action( 'wp_head', 'theme_slug_render_title' );
    }
    ?>

    <meta charset="<?php bloginfo('charset'); ?>">
	<link href="<?PHP echo get_template_directory_uri(); ?>/assets/img/icons/favicon.ico" rel="shortcut icon">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="<?php bloginfo('description'); ?>">
    <meta name="expires" content="<?php echo gmdate ("D, d M Y H:i:s", time() + 60*60*24*7); ?>">
    <meta http-equiv="Cache-control" content="public">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,500,700,300' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC" rel="stylesheet">

    <meta name="theme-color" content="#009688">
    <?PHP echo '<link rel="stylesheet" href="'.get_stylesheet_uri().'" />' ?>
    
    <?PHP
        wp_enqueue_script( 'script', get_template_directory_uri() . '/assets/js/js.js', array('jquery'), 1.0, true);
    ?>

	<?php wp_head(); ?>

</head>
<?php $sidebar_class = ($option['sidebar_active'] ? 'sidebar-active' : 'sidebar-inactive'); ?>
<body <?php body_class(array($sidebar_class)); ?>>

					<?PHP
					wp_nav_menu(array(
                    	'theme_location'  => 'blog',
                    	'menu'            => 'blog',
                    	'container'       => '',
                    	'container_class' => '',
                    	'container_id'    => '',
                    	'menu_class'      => 'side-nav',
                    	'menu_id'         => 'slide-out',
                    	'echo'            => true,
                    	'fallback_cb'     => '',
                    	'before'          => '',
                    	'after'           => '',
                    	'link_before'     => '',
                    	'link_after'      => '',
                    	'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                    	'depth'           => -1,
                    	'walker'          => ''
                    ));
					?>
	
    <div class="header-placeholder"></div>
    <div class="header">

        <div class="container">
            <div class="row">

                <div class="col-md-9 col-sm-12">

                    <div class="title-wrapper">
                        <h1><a href="#" data-activates="slide-out" class="button-collapse mobile-view"><i class="material-icons">menu</i></a> <a href="<?php echo home_url(); ?>"><?php bloginfo('name');?></a></h1>
                    </div>
                    <?PHP
                        wp_nav_menu(array(
                            'theme_location'  => 'header',
                            'menu'            => 'header',
                            'container'       => '',
                            'container_class' => '',
                            'container_id'    => '',
                            'menu_class'      => 'primary-menu list-unstyled list-inline hidden-sm hidden-xs',
                            'menu_id'         => 'header',
                            'echo'            => true,
                            'fallback_cb'     => '',
                            'before'          => '',
                            'after'           => '',
                            'link_before'     => '',
                            'link_after'      => '',
                            'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                            'depth'           => -1,
                            'walker'          => ''
                        ));
                    ?>
                </div>

                <div class="col-md-3 col-sm-12 hidden-sm hidden-xs" align="right">
                    <!-- Search form -->
					<form action="<?php echo home_url(); ?>" type="get">
					<div class="input-field col s12 header-search">
					 	<i class="material-icons prefix">search</i>
					 	<input id="icon_prefix" type="text" name="s" value="<?PHP echo get_search_query();?>">
					 	<label for="icon_prefix">suchen</label>
					</div>
					</form>
                </div>


            </div>
        </div>

    </div>
        <div class="menu-2">
            <div class="container">
                <?PHP
                wp_nav_menu(array(
                    'theme_location'  => 'blog',
                    'menu'            => 'blog',
                    'container'       => '',
                    'container_class' => '',
                    'container_id'    => '',
                    'menu_class'      => 'list-unstyled list-inline collapsed disable-on-mobile-view',
                    'menu_id'         => 'blog',
                    'echo'            => true,
                    'fallback_cb'     => '',
                    'before'          => '',
                    'after'           => '',
                    'link_before'     => '',
                    'link_after'      => '',
                    'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                    'depth'           => -1,
                    'walker'          => ''
                ));
                ?>
            </div>
        </div>
