<?php
$guarantees = array(
    //item: icon, title, text
    array(//1
        'i-guarantee',
        'Quality <span class="colored-text">assurance</span>',
        'We employ a number of measures to ensure top quality essays. The papers go through a system of quality control prior to delivery. We run plagiarism checks on each paper to  ensure that they will be 100% plagiarism-free. So, only clean copies hit customers’ emails. We also never resell the papers completed by our writers. So, once it is checked using a plagiarism checker, the paper will be unique. Speaking of the academic writing standards, we will stick to the assignment brief given by the customer and assign the perfect writer. By saying “the perfect writer” we mean the one having an academic degree in the customer’s study field and positive feedback from other customers.'
    ),

    array(//2
        'i-list2',
        'Editing <span class="colored-text">policy</span>',
        'We keep the quality bar of all papers high. But in case you need some extra brilliance to the paper, here’s what to do. First of all, you can choose a top writer. It means that we will assign an expert with a degree in your subject. And secondly, you can rely on our editing services. Our editors will revise your papers, checking whether or not they comply with high standards of academic writing. In addition, editing entails adjusting content if it’s off the topic, adding more sources, refining the language style, and making sure the referencing style is followed.'
    ),

    array(//3
        'i-certificate',
        'Confidentiality <span class="colored-text">100%</span>',
        'We make sure that clients’ personal data remains confidential and is not exploited for any purposes beyond those related to our services. We only ask you to provide us with the information that is required to produce the paper according to your writing needs. Please note that the payment info is protected as well. Feel free to refer to the support team for more information about our payment methods. The fact that you used our service is kept secret due to the advanced security standards. So, you can be sure that no one will find out that you got a paper at Grademiners.com.'
    ),

    array(//4
        'i-money',
        'Money <span class="colored-text">back</span>',
        'If the writer doesn’t address all the questions on your assignment brief or the delivered paper appears to be off the topic, you can ask for a refund. Or, if it is applicable, you can opt in for free revision within 14-30 days, depending on your paper’s length. The revision or refund request should be sent within 14 days after delivery. The customer gets 100% money-back in case they haven\'t  downloaded the paper. All approved refunds will be returned to the customer’s credit card or Bonus Balance in a form of store credit. Take a note that we will send an extra compensation if the customers goes with a store credit.'
    ),

    array(//5
        'i-human',
        '24/7 <span class="colored-text">support</span>',
        'We have a support team working 24/7 ready to give your issue concerning the order their immediate attention. If you have any questions about the ordering process, communication with the writer, payment options, feel free to join live chat. Be sure to get a fast response. They can also give you the exact price quote, taking into account the timing, desired academic level of the paper, and the number of pages.'
    ),
);
?>
<?php get_header(); ?>

<?php get_template_part('includes/inc', 'top-block-inner'); ?>
<?php get_template_part('includes/inc', 'breadcrumbs'); ?>

<!--CONTENT-->
<section class="guarantees-page-content content">
    <div class="container">
        <?php //get_template_part('loop'); ?>
        <article class="article">
            <h1 class="section-title">What You Get with GradeMiners</h1>

            <ol class="guarantees-list">
            <?php foreach ($guarantees as $item) : ?>
                <li class="guarantees-list__item">
                    <div class="col-l">
                        <i class="guarantees-list__icon <?php echo $item[0]; ?>"></i>
                        <h3 class="guarantees-list__title"><?php echo $item[1]; ?></h3>
                    </div>
                    <div class="guarantees-list__text"><?php echo $item[2]; ?></div>
                </li>
            <?php endforeach; ?>
            </ol>

        </article>
    </div>
</section>

<div class="footer-order-btn">
    <?php get_template_part('includes/inc', 'order-btn'); ?>
</div>

<?php get_footer(); ?>