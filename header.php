<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/main.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/responsive.css">
	<title><?php wp_title( '', true, 'right' ); ?></title>
	<?php wp_head(); ?>
</head>
<body>
	<div class="wrapper">
		<header>
            <div class="header_bar">
                <div class="bar-resp-first">
                    <div class="bar_sect1">
                        <p>
                            <i class="fa fa-phone"></i>
                        </p>
                        <p><a href="tel:8009442748">(800) 944-2748</a></p>
                    </div>
                    <div class="bar_sect2">
                        <p>
                            <i class="fa fa-envelope"></i>
                        </p>
                        <p><a href="mailto:info@arguswest.com">info@arguswest.com</a></p>
                    </div>
                </div>
                <div class="bar-resp-second">
                    <div class="bar_sect3">
                        <a href="https://www.facebook.com/Argus-West-Investigative-Services-188604477952059/" target="_blank"><i class="fa fa-facebook-f"></i></a>
                        <a href="https://www.linkedin.com/company/argus-west-investigative-services" target="_blank"><i class="fa fa-linkedin"></i></a>
                        <a href="https://vimeo.com/arguswestinvestigations" target="_blank"><i class="fa fa-vimeo"></i></a>
                    </div>
                </div>
            </div>
            <div class="header-inner">
                <div class="logo">
                    <?php
                        the_custom_logo();
                        if (!has_custom_logo()) {
                    ?>
                        <h1><?php bloginfo('name'); ?></h1>
                    <?php
                        }
                    ?>
                </div>
                <nav class="menu" id="main-nav">
                    <button class="main_mnu_button">
                        <div></div>
                        <div></div>
                        <div></div>
                    </button>
                    <?php
                        if ( function_exists( 'wp_nav_menu' ) )
                        wp_nav_menu( 
                        array( 
                            'theme_location' => 'custom-menu',
                            'fallback_cb'=> 'custom_menu',
                            'container' => 'ul',
                            'menu_id' => 'nav',
                            'menu_class' => 'nav') 
                            );
                        else custom_menu();
                    ?>
                </nav>
            </div>
        </header>