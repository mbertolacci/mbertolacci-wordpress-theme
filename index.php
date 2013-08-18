<!DOCTYPE html>
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

    <title><?php bloginfo('name'); ?><?php wp_title( '|', true ); ?></title>

    <?php wp_head() ?>

<body>

    <aside class="profile vcard">
        <div class="picture">
            <img class="photo" src="<?php echo mb_css_dir() . '/../images/profile.jpg' ?>" />
        </div>
        <h1 class="fn">
            Michael Bertolacci
        </h1>
        <ul>
            <li class="adr">
                <span class="locality">Melbourne</span>,
                <span class="country-name">Australia</span>
            </li>
        </ul>
        <ul class="positions">
            <li>
                M. Econ student at
                <a href="http://www.unimelb.edu.au/" class="org">The University of Melbourne</a>
            </li>
            <li>
                Chief Architect at
                <a href="http://www.burnsred.com.au/" class="org">BurnsRED</a>
            </li>
        </ul>
        <div class="social">
            <a class="twitter"></a>
            <a class="linkedin"></a>
            <a class="googleplus"></a>
            <a class="rss"></a>
        </ul>
    </aside>

    <div class="content">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <article>
                <h1 class="post-title">
                    <?php the_title() ?>
                </h1>

                <?php the_content(); ?>
            </article>
        <?php endwhile; else: ?>
            <p>
                <?php _e('Sorry, no posts matched your criteria.'); ?>
            </p>
        <?php endif; ?>

    </div>

    <?php wp_footer(); ?>
</body>

</head>
</html>