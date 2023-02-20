<?php

if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div>
            <?php the_title();
            the_excerpt(); ?><button><a href="<? the_permalink(); ?>">Przeczytaj więcej</a></button></div>
    <?php endwhile; ?>
<?php else : ?>
    <div>No posts</div>
<?php endif; ?>