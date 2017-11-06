<?php
$img_size = 'gallery';
?>

<?php if ( have_rows('element_hinzufugen') ) : ?>

        <?php while ( have_rows('element_hinzufugen') ) : the_row(); ?>

            <div class="row row-element">

                <?php
                $left_img_id  = get_sub_field('bild_vorher');
                $right_img_id = get_sub_field('bild_nachher');
                $desc         = get_sub_field('bildbeschreibung');
                ?>

                <figure class="column small-12 medium-9">
                    <?= wp_get_attachment_image( $left_img_id, $img_size ) ?>
                    <?= wp_get_attachment_image( $right_img_id, $img_size ) ?>
                </figure>

                <div class="figure-description column small-12 medium-3">
                    <?= $desc; ?>
                </div>

            </div>

        <?php endwhile; ?>

<?php endif; ?>