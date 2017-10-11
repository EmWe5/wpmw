<aside class="column small-12 medium-2">

    <?php if (is_active_sidebar('gallery-sidebar')) : ?>

        <?php dynamic_sidebar('gallery-sidebar'); ?>

    <?php else : ?>

        <div class="no-widgets">

            <p>Bitte Widgets hinzufügen.</p>

        </div>

    <?php endif; ?>

</aside>