<!DOCTYPE html>
<html>
    <head>
        <?php wp_head();?>
    </head>

<body <?php body_class();?>>

<div class="container">
    <div class="header">
        <div class="full-name">
            <span class="first-name">Stewart</span>
            <span class="last-name">James</span>
        </div>
        <div class="clear"></div>

        <div class="contact-info">
            <span class="email">Email: </span>
            <span class="email-val">contact@stew.dev</span>
        </div>
    </div>

    <?php wp_nav_menu(
        array(
            'container' => 'nav',
            'container_class' => 'navbar navbar-expand-lg navbar-expand-md navbar-expand-sm navbar-light',
            'theme_location' => 'top-menu',
            'menu_class' => 'navigation navbar-nav',
            'add_li_class' => 'nav-item',
            'add_a_class' => 'nav-link'
            )
        );?>