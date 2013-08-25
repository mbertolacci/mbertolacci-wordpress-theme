<article class="post">
    <h1 class="post-title">
        <a href="<?php the_permalink(); ?>"><?php the_title() ?></a>
    </h1>

    <div class="post-content">
        <?php the_content(); ?>
    </div>

    <?php comments_template(); ?>
</article>