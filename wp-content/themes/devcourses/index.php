<?php get_header(); ?>

<main class="container">

    <?php while (have_posts()):
        the_post();

        the_title();
        the_content();
        Echo '99'+ 2;
    endwhile; ?>
</main>


<?php get_footer(); ?>