<div class="slanting-bg"></div>
<div class="we-do__wrap">
    <div class="grid-container">
        <div class="we-do">

            <div class="we-do__item">
                <h2>ЧТО МЫ ДЕЛАЕМ?</h2>
                <div class="we-do__item-desc">
                    <p>Компания «KLAUS.IN.UA» – это люди, которые любят автомобили. Обратившись к нам, Вы не ошибетесь в
                        своем
                        выборе
                        и останетесь довольны полученным результатом. Мы сможем предоставить Вам тех специалистов,
                        которые
                        Вам
                        нужны, и поверьте, они знают, как делать свою работу. </p>
                </div>
            </div>


            <?php $we_do_children = new WP_Query('orderby=menu_order&posts_per_page=-1&post_type=page&post_parent=6'); ?>
            <?php if ($we_do_children->have_posts()) : ?>
                <?php while ($we_do_children->have_posts()): $we_do_children->the_post(); ?>

                    <div class="we-do__item">
                        <ul>
                            <li class="we-do__item_li" style="background-image:url('<?php if (has_post_thumbnail()) {echo get_the_post_thumbnail_url('','large');}?>');">

                                <a class="we-do__item_a" href="<?php echo get_the_permalink(); ?>">
                                    <p class="we-do__item-title"><?php echo get_the_title() ?></p>
                                    <span class="we-do__item-desc-2">description</span>
                                </a>
                            </li>
                        </ul>
                    </div>

                <?php endwhile; ?>

            <?php endif; ?>

            <?php wp_reset_query(); ?>

        </div>
    </div>
</div>