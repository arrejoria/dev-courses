<?php

/**
 * Template Name: Pagina de Cursos
 */

get_header();

?>

<main class="devc-cursos container">

    <?php
    get_template_part('template-parts/page-heading.php');
    get_template_part('template-parts/page-content.php');
    ?>

</main>
<section class="cursos container">
    <ul class="devc-cursos__list">
        <?php
        $args = array(
            'post_type' => 'devcourses_cursos',
        );

        $cursos = new WP_Query($args);

        while ($cursos->have_posts()) {
            $cursos->the_post();
        ?>
            <li class="devc-cursos__list-item curso">
                <?php the_post_thumbnail(); ?>
                <div class="curso-content">
                    <a href="<?php the_permalink(); ?>">
                        <h3 class="curso-content__title"><?php the_title(); ?></h3>
                    </a>
                </div>
            </li>
        <?php
        } ?>
        <?php wp_reset_postdata(); ?>
    </ul>

</section>

<?php

get_footer();





// $args = array(
//     'post_type'      => 'product',
//     'posts_per_page' => 10,
//     'product_cat'    => 'hoodies'
// );

// $loop = new WP_Query( $args );

// while ( $loop->have_posts() ) : $loop->the_post();
//     global $product;
//     echo '<br /><a href="'.get_permalink().'">' . woocommerce_get_product_thumbnail().' '.get_the_title().'</a>';
// endwhile;

// wp_reset_query();