<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width">
    <title><?php bloginfo('name'); ?></title>

    <link href='https://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<div class="wrapper">

    <!-- header -->
    <header class="site-header">
        <div class="container clearfix">

            <a class="logo" href="<?php echo home_url(); ?>"> <img
                    src="<?php bloginfo('template_directory') ?>/images/logo1.png"/> </a>

            <nav class="site-nav menu clearfix">
                <?php
                $args = array(
                    'theme_location' => 'primary',
                    'menu_class' => 'active clearfix',
                );
                ?>
                <?php wp_nav_menu($args); ?>

                <a class="toggle-nav" href="#">&#9776;</a>
            </nav>


        </div>
    </header>

    <main>
        <div class="container clearfix">

