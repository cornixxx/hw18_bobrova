<?php

get_header();

?>
    <div class="content-column">
        <?php
        if (have_posts()):
            while (have_posts()): the_post(); ?>

                <article class="post">

                    <?php the_post_thumbnail(); ?>
                    <h2><?php the_title(); ?></h2>
                    <?php the_content(); ?>

                </article>
            <?php endwhile;

        else:
            echo '<p> No content found </p>';

        endif;
        ?>

    </div>
    <div class="arrows-container">
        <?php posts_nav_link(' ', 'Previous', 'Next'); ?>
    </div>

<?php get_sidebar(); ?>


<?php get_footer(); ?>