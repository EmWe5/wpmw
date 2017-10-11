<?php get_header(); ?>

    <main id="main-content" class="row">

        <div id="article-wrapper" class="column small-12">

            <?php if (have_posts()) : ?>

                <?php while (have_posts()) : the_post(); ?>

                    <article>

                        <h1><?php the_title(); ?></h1>
                        <div class="article-content"><?php the_content(); ?></div>

                    </article>

                <?php endwhile; ?>

            <?php else : ?>

                <h1>Sorry, die gewünschte Unterseite wurde nicht gefunden.</h1>

            <?php endif; ?>

        </div>

    </main>

<?php get_footer(); ?>