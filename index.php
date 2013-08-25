<?php get_header(); ?>

<div id="content" class="content">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <?php get_template_part( 'content' ); ?>
    <?php endwhile; else: ?>
        <p>
            <?php _e('Sorry, no posts matched your criteria.'); ?>
        </p>
    <?php endif; ?>

</div>

<?php get_footer(); ?>