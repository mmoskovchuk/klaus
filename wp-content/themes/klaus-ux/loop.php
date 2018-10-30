<div class="row">
	<?php if (!is_page('order') && !is_page('preview')) :?>
		<div class="col-md-9">
	<?php endif;?>
<?php if ( have_posts() ) : ?>
	<?php while ( have_posts() ) : the_post(); ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class('article'); ?>>

					<?php if (is_front_page() || is_page()) : // front-page || single page ?>

						<?php the_content(); ?>

					<?php elseif (is_single()) : // post ?>

						<h1><?php the_title(); ?></h1>
						<?php the_content(); ?>
						<div class="article__meta">
							<time class="article__meta-item article__time">
								<i class="fa fa-clock-o"></i>
								<?php the_time('d M.') ?>
							</time>
						</div>

					<?php else : // blog || search results || archive page ?>
						<div class="article__item">

							<?php if (has_post_thumbnail()) : ?>
								<div class="row">

									<div class="col-md-5">
										<a class="article__thumbnail" href="<?php the_permalink(); ?>">
											<?php the_post_thumbnail(); ?>
										</a>
									</div>

									<div class="col-md-7">
										<h2 class="article__title h3">
											<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
										</h2>
										<div class="article__excerpt">
											<?php the_excerpt(); ?>
										</div>
										<a class="btn btn-lg btn_read-more" href="<?php echo get_permalink(); ?>">Read More</a>

										<div class="article__meta">
											<time class="article__meta-item article__time">
												<i class="fa fa-clock-o"></i>
												<?php the_time('F j, Y') ?>
											</time>
										</div>
									</div>
								</div>

							<?php else : ?>

								<h2 class="article__title h3">
									<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
								</h2>
								<div class="article__excerpt">
									<?php the_excerpt(); ?>
								</div>
								<div class="article__meta">
									<time class="article__meta-item article__time">
										<i class="fa fa-clock-o"></i>
										<?php the_time('F j, Y') ?>
									</time>
								</div>

							<?php endif; ?>

						</div>

					<?php endif; ?>

				</article>
	<?php endwhile; ?>
<?php endif; ?>
<?php if (!is_page('order') && !is_page('preview')) :?>
	</div>
	<div class="col-md-3">
		<div class="simple-calculator-blog">
			<?php ob_start(); ?>
			<div class="simple-calc">
				<div class="simple-calc__title">Get a quote</div>
				<div class="simple-calc__form">
					<div class="simple-calc__field-select">
						{type_of_work}
					</div>
					<div class="simple-calc__field-select">
						{level_work}
					</div>
					<div class="simple-calc__field-select">
						{urgency}
					</div>
					<div class="simple-calc__field-select">
						{number_page}
					</div>
					{price}
					{button}
				</div>
			</div>
			<?php
			$params = json_encode([
				'theme' => 'raw',
				'template' => ob_get_clean()
			]);
			?>
			<div data-crm-widget="simplePriceCalc" data-params='<?php echo $params; ?>'></div>
		</div>
		<?php if (is_single()) :?>
			<div class="you_can__like">
				<div class="you_can__like__title">
					You may also like
				</div>
				<?php
				$args = array(
					'post_type'        => 'post',
					'orderby'          => 'rand',
					'post__not_in' => array(get_the_ID()),
					'posts_per_page'   => 5
				);
				$random_posts = new WP_Query($args);
				?>

				<?php if ( $random_posts->have_posts() ) : ?>

				<div class="you_can__like__list">
					<ul class="random-posts__list">
						<?php while ( $random_posts->have_posts() ) : $random_posts->the_post(); ?>
							<li class="random-posts__item"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></li>
						<?php endwhile; ?>
					</ul>
				</div>

				<?php endif; wp_reset_query();?>
			</div>
			<div class="why_chose_us">
				<div class="why_chose_us__title">
					Why choose us
				</div>
				<div class="why_chose_us__list">
					<ul class="why_chose_us__list">
						<li class="why_chose_us__list__item">
							<a href="/">
								<span>Highest</span> quality of writing
							</a>
						</li>
						<li class="why_chose_us__list__item">
							<a href="/">
								Complete <span>confidentiality</span> guarantee
							</a>
						</li>
						<li class="why_chose_us__list__item">
							<a href="/order">
								<span>Fast</span> ordering process
							</a>
						</li>
						<li class="why_chose_us__list__item">
							<a href="/">
								14-30 days of <span>free revisions</span>
							</a>
						</li>
						<li class="why_chose_us__list__item">
							<a href="/prices">
								<span>Flexible</span> prices and discounts
							</a>
						</li>
						<li class="why_chose_us__list__item">
							<a href="/">
								From <span>simple essays</span> to massive projects
							</a>
						</li>
						<li class="why_chose_us__list__item">
							<a href="/order">
								<span>3-hour</span> turnaround available
							</a>
						</li>
					</ul>
				</div>
			</div>
		<?php else : ?>
			<div class="recent_posts">
				<div class="recent_posts__title">
					Recent posts
				</div>

				<div class="recent_posts__list">
					<?php wp_list_categories(array(
						'hide_empty' => false,
						'orderby' => 'id',
						'order' => 'DESC',
						'style' => 'none',
						'separator' => ''
					)); ?>
				</div>
			</div>
		<?php endif;?>
	</div>
	<?php endif;?>
</div>