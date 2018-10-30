<section class="top-block">
    <div class="container">
        <div class="row">

            <div class="top-block__info">

                <div class="col-lg-5 col-md-5 col-sm-6 col-xs-12">

                    <div class="top-block__wrap">
                        <a href="<?php echo home_url(); ?>">
                            <div class="top-block__logo">
                                <img src="<?php bloginfo('template_url'); ?>/img/logo.png"
                                     alt="<?php bloginfo('name'); ?>" class="top-block__logo-big"/>
                                <span class="top-block__logo-tagline"><?php bloginfo('description'); ?></span>
                            </div>
                            <div class="top-block__logo-title">
                                <p>факультет</p>
                                <p>екологічної безпеки,</p>
                                <p>інженерії</p>
                                <p>та технологій</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-7 col-md-7 col-sm-6 col-xs-12">
                    <div class="top-block__button_wrap">
                        <a href="//phone.nau.edu.ua/" target="_blank">
                            <span class="top-block__button_block">
                                <i class="far fa-address-book fa-2x"></i>
                            </span>
                            Довідник
                        </a>
                        <a href="//www.lib.nau.edu.ua/main/" target="_blank">
                            <span class="top-block__button_block">
                                <i class="fas fa-book-reader fa-2x"></i>
                            </span>
                            Бібліотека
                        </a>
                        <a href="/kontakty">
                            <span class="top-block__button_block">
                                <i class="fas fa-phone-volume fa-2x"></i>
                            </span>
                            Контакти
                        </a>
                    </div>
                </div>

            </div>

            <?php if ((is_front_page()) and (!is_paged())) { ?>
                <div class="top-block__slider">

                    <div class="top-block__news-slider">
                        <ul>
                            <!-- определение категории и количество записей -->
                            <?php $the_query = new WP_Query('cat=5&p=156'); ?>
                            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                                <li>
                                    <!-- заголовок записи -->
                                    <a class="top-block__news-slider_img-link" href="<?php the_permalink() ?>" >

                                        <img src="<?php bloginfo('template_url'); ?>/img/slider/1.jpg" alt="<?php bloginfo('name'); ?>" class="header__logo-big"/>

                                        <h3>Кафедра аерокосмічної геодезії</h3>
                                    </a>
                                </li>
                            <?php endwhile; ?>
                            <!-- функция для правильной работы условных тегов -->
                            <?php wp_reset_query(); ?>
                        </ul>
                    </div>

                    <div class="top-block__news-slider">
                        <ul>
                            <!-- определение категории и количество записей -->
                            <?php $the_query = new WP_Query('cat=5&p=158'); ?>
                            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                                <li>
                                    <!-- заголовок записи -->
                                    <a class="top-block__news-slider_img-link" href="<?php the_permalink() ?>" >
                                        <img src="<?php bloginfo('template_url'); ?>/img/slider/2.png" alt="<?php bloginfo('name'); ?>" class="header__logo-big"/>

                                        <h3>Кафедра цивільної та промислової безпеки</h3>
                                    </a>
                                </li>
                            <?php endwhile; ?>
                            <!-- функция для правильной работы условных тегов -->
                            <?php wp_reset_query(); ?>
                        </ul>
                    </div>

                    <div class="top-block__news-slider">
                        <ul>
                            <!-- определение категории и количество записей -->
                            <?php $the_query = new WP_Query('cat=5&p=160'); ?>
                            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                                <li>
                                    <!-- заголовок записи -->
                                    <a class="top-block__news-slider_img-link" href="<?php the_permalink() ?>" >
                                        <img src="<?php bloginfo('template_url'); ?>/img/slider/3.jpg" alt="<?php bloginfo('name'); ?>" class="header__logo-big"/>

                                        <h3>Кафедра біотехнології</h3>
                                    </a>
                                </li>
                            <?php endwhile; ?>
                            <!-- функция для правильной работы условных тегов -->
                            <?php wp_reset_query(); ?>
                        </ul>
                    </div>

                    <div class="top-block__news-slider">
                        <ul>
                            <!-- определение категории и количество записей -->
                            <?php $the_query = new WP_Query('cat=5&p=40'); ?>
                            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                                <li>
                                    <!-- заголовок записи -->
                                    <a class="top-block__news-slider_img-link" href="<?php the_permalink() ?>" >

                                        <img src="<?php bloginfo('template_url'); ?>/img/slider/4.jpg" alt="<?php bloginfo('name'); ?>" class="header__logo-big"/>

                                        <h3>Кафедра екології</h3>
                                    </a>
                                </li>
                            <?php endwhile; ?>
                            <!-- функция для правильной работы условных тегов -->
                            <?php wp_reset_query(); ?>
                        </ul>
                    </div>

                    <div class="top-block__news-slider">
                        <ul>
                            <!-- определение категории и количество записей -->
                            <?php $the_query = new WP_Query('cat=5&p=152'); ?>
                            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                                <li>
                                    <!-- заголовок записи -->
                                    <a class="top-block__news-slider_img-link" href="<?php the_permalink() ?>" >
                                        <img src="<?php bloginfo('template_url'); ?>/img/slider/5.jpg" alt="<?php bloginfo('name'); ?>" class="header__logo-big"/>

                                        <h3>Кафедра землеустрою та кадастру</h3>
                                    </a>
                                </li>
                            <?php endwhile; ?>
                            <!-- функция для правильной работы условных тегов -->
                            <?php wp_reset_query(); ?>
                        </ul>
                    </div>

                    <div class="top-block__news-slider">
                        <ul>
                            <!-- определение категории и количество записей -->
                            <?php $the_query = new WP_Query('cat=5&p=154'); ?>
                            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                                <li>
                                    <!-- заголовок записи -->
                                    <a class="top-block__news-slider_img-link" href="<?php the_permalink() ?>" >
                                        <?php /*echo get_the_post_thumbnail($post->ID, 'large'); */?>
                                        <img src="<?php bloginfo('template_url'); ?>/img/slider/6.jpg" alt="<?php bloginfo('name'); ?>" class="header__logo-big"/>

                                        <h3>Кафедра хімії і хімічної технології</h3>
                                    </a>
                                </li>
                            <?php endwhile; ?>
                            <!-- функция для правильной работы условных тегов -->
                            <?php wp_reset_query(); ?>
                        </ul>
                    </div>

                </div>
                <div class="clear"></div>
            <?php } ?>

        </div>
    </div>
</section>
