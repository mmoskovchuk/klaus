<?php get_header(); ?>

<?php get_template_part('includes/inc', 'top-block-seo-page'); ?>
<?php get_template_part('includes/inc', 'breadcrumbs'); ?>

    <section class="seo-page-content content">
        <div class="container">
            <article class="article">
                <?php if ( have_posts() ) : ?>
                    <?php while ( have_posts() ) : the_post(); ?>
                        <?php the_content(); //content will be filtered by the "filterContent" function ?>
                    <?php endwhile; ?>
                <?php endif; ?>
            </article>
        </div>
    </section>




    <!--CONTENT-->
    <script>
        var sheet = document.createElement('style')
        sheet.innerHTML = ".content-accordion__body {display:none}";
        document.head.appendChild(sheet);
    </script>

<?php get_footer(); ?>