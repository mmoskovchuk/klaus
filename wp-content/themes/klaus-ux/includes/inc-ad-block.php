<div class="content-block__ad-wrap">
    <h2 class="title-ribbon">Оголошення</h2>

    <?php
    $pc = new WP_Query('cat=3&orderby=date&posts_per_page=3'); ?>
    <?php while ($pc->have_posts()) : $pc->the_post(); ?>

        <a href="<?php the_permalink(); ?>">
            <span><b>[<?php the_date(); ?>]</b> <?php the_title(); ?></span>
        </a>

    <?php endwhile; ?>

</div>