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



    <header id="header">

        <nav id="site-navigation" class="main-navigation" role="navigation">
            <?php
            $args = [
                'theme_location' => 'main-menu'
            ];
            wp_nav_menu($args);
            ?>
        </nav>
        <div class="header-container">
            <button id="btn">
                List of cars
            </button>
        </div>
    </header>
    <main id="main">
        <div class="main-container">
            <?php $loop = new WP_Query(array('post_type' => 'cars',));

            if ($loop->have_posts()) : while ($loop->have_posts()) : $loop->the_post(); ?>
                    <div class="main-container-posts">
                        <h3><?php the_title(); ?></h3>
                        <?php the_excerpt(); ?><button class="main-container-posts-button"><a href="<? the_permalink(); ?>">Read
                                more</a></button>
                    </div>
                <?php endwhile; ?>
            <?php else : ?>
                <div>No posts</div>
            <?php endif; ?>
        </div>
    </main>