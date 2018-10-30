<?php get_header(); ?>

<?php get_template_part('includes/inc', 'breadcrumbs'); ?>

<!--CONTENT-->
<section class="free-papers-page-content">
    <div class="container">

        <section class="subjects">

            <h1 class="section-title"><?php echo get_the_title(); ?></h1>

            <div class="subjects__wrap">
            <?php

                $terms = get_terms( array(
                    'taxonomy' => array('subject'),
                    'hide_empty' => true,
                    'orderby' => 'name'
                ) );

                $subject_name_first_letter = '';
                $subjects_array = array();

                foreach( $terms as $term ) {
                    $letter = $term->name[0];

                    if ($subject_name_first_letter !== strtolower($letter)) {
                        $subject_name_first_letter = strtolower($letter);
                        $subjects_array[$subject_name_first_letter] = array();
                    }

                    array_push($subjects_array[$subject_name_first_letter], $term);
                };


                $col = 1; $i = 1; $length = count($subjects_array);
                foreach( $subjects_array as $letter_key => $letter ) : ?>

                    <?php if($letter[0]->count <= 0 ) continue; ?>

                    <?php if ($col === 1) : ?>
                        <div class="row">
                    <?php endif; ?>
                        <div class="col-md-3 col-sm-6">
                            <div class="subjects__column">
                                <header class="subjects__title"><?php echo strtoupper($letter_key); ?></header>

                                <ol class="subjects__list">
                                    <?php foreach($letter as $subject_key => $subject ) :
                                        $term_link = get_term_link( $subject );
                                    ?>

                                        <?php if( $subject->count > 0  ) : ?>
                                            <li class="subjects__item">
                                                <div class="row">
                                                    <div class="col-xs-9">
                                                        <h2 class="subjects__item-title">
                                                            <a href="<?php echo esc_url( $term_link ); ?>"><?php echo $subject->name; ?></a>
                                                        </h2>
                                                    </div>
                                                    <div class="col-xs-3">
                                                        <div class="subjects__item-count">
                                                            <a href="<?php echo esc_url( $term_link ); ?>"><?php echo $subject->count; ?></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </ol>
                            </div>
                        </div>
                    <?php if ($col === 4 || $i === $length) : $col = 0; ?>
                        </div>
                    <?php endif; $col++; $i++ ?>
                <?php endforeach; ?>
            </div>
        </section>
    </div>
</section>

<?php get_template_part('includes/inc', 'order-dark-block'); ?>

<?php get_footer(); ?>
