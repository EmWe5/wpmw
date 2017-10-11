<?php
$left_column  = get_field('linke_spalte');
$right_column = get_field('rechte_spalte');
?>

<div class="column small-12 medium-8">

    <?= $left_column; ?>

</div>

<div class="column small-12 medium-4">

    <h2>Kontakt</h2>

    <?php get_template_part('template-parts/acf/contact', 'info'); ?>

</div>