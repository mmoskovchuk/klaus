<?
/*
 * Template name: single
 * */
?>
<?php get_header(); ?>

<?php get_template_part('includes/inc', 'top-block-inner'); ?>
<?php get_template_part('includes/inc', 'breadcrumbs'); ?>

<!--CONTENT-->
<section class="post-content content">
    <div class="container">
        <?php get_template_part('loop'); ?>
    </div>
</section>
<?php if (is_single('')) {?>

    <?php get_template_part('other-templates/inc', 'blog-popup'); ?>
<?}?>



<?php get_footer(); ?>