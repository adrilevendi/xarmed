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
							<img src="<?=get_the_post_thumbnail_url(get_the_ID())?>" alt="" class="xcarousel__image">
							<h1 class="xcarousel__model"><?= get_the_title() ?></h1>
							<h3 class="xcarousel__back-heading"><?php $t = explode(" ", get_the_title()); echo end($t)?></h3>
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