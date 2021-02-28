<article id="post-home>" <?php post_class(); ?>>

	<div class="entry-content x-bg-dark ">
		<?php
		$args = array(
			'post_type'      => 'product',
		);

		$loop = new WP_Query($args);
		?>
		<div class="xcarousel__container">
			<div class="xcarousel__inner">
				<?php while ($loop->have_posts()) : $loop->the_post();
					global $product; ?>
					<div class="xcarousel__item">
						<a href="<?= get_permalink() ?>" class="xcarousel__link">
							<div class="xcarousel__content">
								<img src="<?= get_the_post_thumbnail_url(get_the_ID()) ?>" alt="" class="xcarousel__image">
								<div class="xcarousel__model">
								<h3><?= get_the_title() ?></h3> 
								<h3><?php the_field('price') ?> LEKE</h3> 
								</div>
								

							</div>
							<div class="xcarousel__back-heading">
								<h3 class="xcarousel__back-heading-code">
									<?php the_field('product_code') ?>
								</h3>
							</div>

						</a>
					</div>
				<?php endwhile;

				wp_reset_query(); ?>
			</div>

		</div>
	</div>
	<?php
	// the_content();

	wp_link_pages(
		array(
			'before' => '<div class="page-links">' . esc_html__('Pages:', 'xarmed'),
			'after'  => '</div>',
		)
	);
	?>

	<!-- <h2><?= the_title() ?></h2> -->
	</div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->