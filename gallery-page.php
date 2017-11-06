<?php
/*
  Template Name: Galerie
 */
?>

<?php get_header(); ?>

    <div class="row-breadcrumbs">

        <?php get_template_part('template-parts/page/nav', 'breadcrumbs') ?>

    </div>

    <main class="row gallery">

        <h1><?php the_title(); ?></h1>

        <?php get_sidebar(); ?>

        <div class="column small-12 medium-10 gallery-wrapper">

            <?php get_template_part('template-parts/acf/image', 'gallery') ?>

            <article class="row-element">

                <?php if (have_posts()) : ?>

                    <?php while (have_posts()) : the_post(); ?>

                        <?php the_content(); ?>

                    <?php endwhile; ?>

                <?php else : ?>

                    <h1>Sorry, die gewünschte Unterseite wurde nicht gefunden.</h1>

                <?php endif; ?>

            </article>

        </div>

    </main>

<?php get_footer(); ?>