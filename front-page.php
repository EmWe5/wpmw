<?php get_header(); ?>

    <?php get_template_part('template-parts/acf/orbit', 'slider'); ?>

    <main class="row">

        <div class="column small-12">

            <div class="row row-element">

                <?php get_template_part('template-parts/acf/two', 'columns'); ?>

            </div>

            <div class="row column row-element">

                <?php if (have_posts()) : ?>

                    <?php while (have_posts()) : the_post(); ?>

                        <article>

                            <?php the_content(); ?>

                        </article>

                    <?php endwhile; ?>

                <?php else : ?>

                    <h1>Sorry, die gewünschte Unterseite wurde nicht gefunden.</h1>

                <?php endif; ?>

            </div>

        </div>

    </main>

<?php get_footer(); ?>