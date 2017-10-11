<?php
$img_size = 'slider';
?>

<?php if ( have_rows('slide_hinzufugen') ) : ?>

    <div class="orbit" role="region" aria-label="Favorite Space Pictures" data-orbit data-options="animInFromLeft:fade-in; animInFromRight:fade-in; animOutToLeft:fade-out; animOutToRight:fade-out;">

        <ul class="orbit-container">

            <?php while ( have_rows('slide_hinzufugen') ) : the_row(); ?>

                <?php
                $img_id = get_sub_field('slider_bild');
                ?>

                <li class="orbit-slide is-active">

                    <figure class="orbit-figure">

                        <?= wp_get_attachment_image( $img_id, $img_size, false, array('class' => 'orbit-image') ) ?>

                    </figure>

                </li>

            <?php endwhile; ?>

        </ul>

    </div>

<?php endif; ?>