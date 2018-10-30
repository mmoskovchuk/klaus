<?php get_header(); ?>

    <!-- TOP-BLOCK -->
<?php get_template_part('includes/inc', 'top-block'); ?>
    <!--CONTENT-->
    <section class="content-block">
        <div class="container">
            <div class="row content-block__wrap">

                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 content-block__order-1 content-block__default-page">
                    <?php if (have_posts()) : ?>
                        <?php while (have_posts()) : the_post(); ?>
                            <?php the_content(); ?>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 content-block__order-2 content-block__mobile-margin">

                    <aside class="sidebar">

                        <!-- SIDEBAR-MENU-BLOCK -->
                        <?php get_template_part('includes/inc', 'sidebar-menu-block'); ?>

                        <!-- SIDEBAR-MAP-BLOCK -->
                        <?php get_template_part('includes/inc', 'sidebar-map-block'); ?>

                        <!-- SIDEBAR-POLL-BLOCK -->
                        <?php get_template_part('includes/inc', 'sidebar-poll-block'); ?>

                    </aside>

                </div>
            </div>
        </div>
    </section>


<?php get_footer(); ?>