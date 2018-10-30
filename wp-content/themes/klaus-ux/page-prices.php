<?php
$bonus_system = array(
    //item: icon, title, text
    array(
        'i-circle-human',
        'You get a bonus balance',
        'When you become a customer, we create a virtual money account - your personal Bonus Balance. You can check it in your password-protected Customer Area. It is private and you are the only person who can access it.'
    ),

    array(
        'i-circle-pig',
        'You receive bonuses',
        'So, where does the money on your Balance come from? When you order your first paper, 10% of its cost goes to your Balance. Your second purchase and each subsequent one brings you 5% to the Bonus Balance.'
    ),

    array(
        'i-circle-cards',
        'You pay for papers with bonuses!',
        'Right after your first purchase, you’ll have money on your Balance - let’s say, $5. To use the Bonus money, you just need to log in and fill out the field “Use $ from my Balance” with the amount you want to spend. It should not though exceed the amount available on the Balance.'
    )
);
?>
<?php get_header(); ?>

<?php get_template_part('includes/inc', 'top-block-prices'); ?>
<!--CONTENT-->
<section class="prices-page-content content">
    <div class="container">
        <article class="article">

            <h1 class="section-title">Get an instant price quote on your paper</h1>
            <p class="section-subtitle">Planning to order a paper? See how much it costs and how much Bonus Money you will get for it. Just select the type of paper, pick the number of pages, and get an instant quote.</p>

            <div class="prices-table">
                <div data-crm-widget="prices">
                    <?php //get_template_part('_tmp/prices-table'); ?>
                </div>
            </div>
        </article>
    </div>

    <div class="bg-light-gray">
        <div class="container">
            <h2 class="section-title">How Our Loyalty Program Works</h2>

            <ol class="bonus-system-list">
                <?php foreach ($bonus_system as $item) : ?>
                    <li class="bonus-system-list__item">
                        <i class="bonus-system-list__icon <?php echo $item[0]; ?>"></i>
                        <div class="col-r">
                            <h3 class="bonus-system-list__title"><?php echo $item[1]; ?></h3>
                            <div class="bonus-system-list__text"><?php echo $item[2]; ?></div>
                        </div>
                    </li>
                <?php endforeach; ?>
            </ol>
        </div>
    </div>

    <div class="prices-calculator">
        <div data-crm-widget="priceCalc"></div>
    </div>
</section>

<?php get_footer(); ?>