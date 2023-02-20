<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php wp_head(); ?>
</head>

<body <?php body_class('my-class'); ?>>

    <nav id="site-navigation" class="main-navigation navbar" role="navigation">
        <?php
        $args = [
            'theme_location' => 'main-menu'
        ];
        wp_nav_menu($args);
        ?>
    </nav>