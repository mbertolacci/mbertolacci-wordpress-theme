<article class="post">
    <h1 class="post-title">
        <a href="<?php the_permalink(); ?>"><?php the_title() ?></a>
    </h1>

    <div class="post-date">
        <a class="url" href="<?= esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) ?>" rel="author"><?= get_the_author() ?></a> on <?= esc_html( get_the_date() ) ?>
    </div>

    <div class="post-content">
        <?php the_content(); ?>
    </div>

    <?php comments_template(); ?>
</article>