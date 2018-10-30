<?php
/**
 * Template Name: Order
 */
?>
<?php get_header(); ?>
    

<!--CONTENT-->
<section class="order-page-content content">
    <div class="container">
        <div id="crm_of_container">
            <?php get_template_part('loop'); ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>