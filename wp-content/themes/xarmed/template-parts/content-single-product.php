<article id="product-single" <?php post_class(); ?>>

	<div class="entry-content x-bg-dark ">
		<?php
		$args = array(
			'post_type'      => 'product',
		);

		$loop = new WP_Query($args);
		?>

		<div class="container-fluid px-5">
			<div class="row mt-5">
				<div class="col-md-6">
					<div id="productCarousel" class="product-carousel">
						<?php foreach (get_field('gallery') as $image) : ?>
							<div class="product-carousel__item">
								<img src="<?= $image['url'] ?>" class="product-carousel__image">
							</div>
						<?php endforeach; ?>
					</div>
				</div>
				<div class="col-md-5 offset-md-1">
					<div class="my-5">
						<h2 class="product-title"><?= the_title() ?></h2>
						<p class="mt-4 product-description"><?= the_content(); ?></p>
						<button class="btn btn-secondary mt-4">Shto në shportë</button>
					</div>
				</div>
			</div>
			<div class="row mt-5 pt-5 pb-5 align-items-md-center">
				<div class="col-md-5 offset-md-1">
					<table class="table product-specs-table">
					
						<tbody>
							<tr>
								<td >KALIBRI</td>
								<td><?= the_field('calliber'); ?></td>
							</tr>
							<tr>
								<td >PESHA</td>
								<td><?= the_field('weight'); ?> KG</td>

							</tr>
							<tr>
								<td >DEPOZITA</td>
								<td><?= the_field('magazine'); ?></td>
							</tr>
							<tr>
								<td >SHPEJTESIA</td>
								<td><?= the_field('fire_rate'); ?></td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col text-center text-md-left">
						<img src="<?=the_post_thumbnail_url()?>" alt="<?=esc_html ( the_title() )?>" class="img-fluid w-75 offset-md-1">
				</div>
			</div>
			<div class="pb-5"></div>
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