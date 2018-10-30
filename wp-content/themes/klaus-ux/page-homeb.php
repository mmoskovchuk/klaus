<?php
/* Template Name: Home-b */
?>
<?php get_header(); ?>

    <script>
        var sheet = document.createElement('style')
        sheet.innerHTML = "#content_block {display:none} .content-accordion__body {display:none}";
        document.head.appendChild(sheet);
    </script>
    <style>
        .top-block .advanced-calc {
            background-color: #e4e4e4!important;
        }
        .top-block .advanced-calc__title {
            border-bottom: none;
            font-size: 18px;
            text-transform: none;
            margin-bottom: 5px;
        }
        .field-calculator-email {
            display: none;
        }
    </style>

<?php get_template_part('includes/inc', 'content-front-page'); ?>

    <!--TOP-BLOCK-->
    <section class="top-block">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-7">
                    <div class="top-block__content">
                        <div class="top-block__title">TOP-NOTCH academic writers will take care of your grades today!</div>
                        <div class="top-block__subtitle colored-text"><span class="top-block__counter" id="top_block_counter">998</span> writing experts are online now</div>
                        <div class="top-block__text">
                            <div class="top-block__list-wrap">
                                <div class="top-block__list-title"><span>Why choose us</span></div>
                                <ul class="top-block__list">
                                    <li class="top-block__list-item"><span class="colored-text">Private communication</span> Direct writer-customer chat</li>
                                    <li class="top-block__list-item"><span class="colored-text">Complete confidentiality</span> We don’t store completed papers</li>
                                    <li class="top-block__list-item"><span class="colored-text">No registration</span> Fast ordering process</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-5">
                    <?php ob_start(); ?>
                    <div class="advanced-calc">
                        <div class="advanced-calc__title">See if we can do <b>your paper now</b></div>
                        <div class="advanced-calc__form">
                            <div class="advanced-calc__field-select">
                                {type_of_work}
                            </div>
                            <div class="advanced-calc__field-select">
                                {level_work}
                            </div>
                            <div class="advanced-calc__field-select">
                                {urgency}
                            </div>
                            <div class="advanced-calc__field-select">
                                {number_page}
                            </div>
                            <div class="field-price">{price}</div>
                            <div class="field-submit">{button}</div>
                        </div>
                    </div>
                    <?php

                    $params = json_encode([
                        'theme' => 'raw',
                        'template' => ob_get_clean(),
                        'pdd' => [
                            'type_of_work' => 20,
                            'level_work' => 1,
                            'urgency' => 12,
                            'number_page' => 1,
                            'button' => 'order now'
                        ]
                    ]);

                    ?>
                </div>
            </div>
        </div>
    </section>

<?php get_template_part('includes/inc', 'top-features'); ?>
<?php get_template_part('includes/inc', 'customer-reviews'); ?>
<?php get_template_part('includes/inc', 'email-collector'); ?>
<?php get_template_part('includes/inc', 'last-completed-orders'); ?>
<?php get_template_part('includes/inc', 'writers-slider'); ?>
<?php get_template_part('includes/inc', 'free-features'); ?>
<?php get_template_part('includes/inc', 'support-slider'); ?>

    <script>
        var content_block = document.getElementById('content_block');
        var order_steps = document.getElementById('order_steps');
        document.getElementById('main').insertBefore(content_block, order_steps);
        content_block.style.display = 'block';
    </script>
<?php if(is_front_page() || is_page_template( 'page-homeb.php' )) :?>
    <script>
        //ADDED ID ORDER BUTTON
        //-------------------------------------------------
        function orderBtn() {
            document.querySelector('[data-role="go-to-form"]').id = "unique_id";
        }
        setInterval(orderBtn,3000);
        clearInterval(orderBtn);

    </script>
<?php endif;?>

<?php get_footer(); ?>