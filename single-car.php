<?php get_header('nav'); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<?php echo "<hr>" . "<br>"; ?>
<div class="main-container-single-post">
    <div class="single-title">
        <?php the_title(); ?>
    </div>

    <div class="container-flex-single-post">
        <div class="single-post-image">
            <?php $image = get_field('photo');
                    echo "<br>"; ?>
            <img style="max-width: 700px; padding: 10px;" src="<?php echo $image ?>" alt="<?php echo the_title(); ?>">
        </div>
        <div class="single-post-content">
            <?php the_content(); ?>
        </div>
    </div>

    <div class="single-fields">
        <h4>Details:</h4>
        <div class="single-field production">
            <?php echo ('<strong>Production: </strong>');
                    the_field('production'); ?>
        </div>
        <div class="single-field class">
            <?php echo '<strong>Class: </strong>';
                    the_field('class'); ?>
        </div>
        <div class="single-field engine">
            <?php echo '<strong>Engine: </strong>';
                    the_field('engine'); ?>
        </div>
        <div class="single-terms">

            Cars in production: <a href=""></a> <?php the_terms($post->ID, 'still_being_produced'); ?>
        </div>
    </div>


    <div>

    </div>
    <?php endwhile; ?>
    <?php else : ?>
    <div>No posts</div>
    <?php endif; ?>
    <?php get_footer(); ?>


    <h3 class="the-title"></h3>