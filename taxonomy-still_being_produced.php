<?php get_header('nav'); ?>

<h3 class="being-produced">Cars still being produced: </h3>

<?php $args = array(
    'post_type' => 'cars',
    'posts_per_page' => -1, // wyświetlamy wszystkie posty
    'tax_query' => array(
        array(
            'taxonomy' => 'still_being_produced',
            'field' => 'slug',
            'terms' => 'yes',
        ),
    ),
);

$loop = new WP_Query($args);

?>

<div class="ongoing-models-container">
    <?
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
<?php wp_reset_postdata();
?>

<?php get_footer(); ?>