<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/css/splide.min.css">
    <link href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;700&display=swap" rel="stylesheet">

    <title><?php wp_title('|', true, 'right'); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header class=" bg-light-gray">
    <div class="flex justify-between items-center w-full px-16 max-w-[1570px] mx-auto ">
        <a href="/cqxlux" class="logo" >
          
            <img  src="<?php echo get_template_directory_uri(); ?>/assets/images/CQX-logo.jpg" alt="Logo">

        </a>
        <div class="flex flex-row justify-between items-center gap-8">
            <?php
            wp_nav_menu([
                'theme_location' => 'primary-menu',
                'menu_class'     => 'nav-menu', 
                'container'      => 'nav',      
            ]);
            ?>
            <a class="button" href="">LET´S TALK!</a>
        </div>

    </div>
</header>
