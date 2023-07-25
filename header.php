<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>

<body>
    <div class="wrapper">
        <header class="header">
            <div class="container">
                <div class="header__inner">
                    <div class="logo">
                        <?php the_custom_logo();?>
                        <div class="custom-logo__text"><?php the_field('logo_text',37)?></div>
                    </div>
                    <div class="menu-btn">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <?php wp_nav_menu([
                        'container' => 'nav',
                        'menu' => 'header_menu',
                        'menu_class'=>'menu menu--header']); ?>
                </div>
            </div>

        </header>