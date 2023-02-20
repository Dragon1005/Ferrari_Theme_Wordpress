<?php get_header('nav'); ?>

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