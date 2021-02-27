<article id="post-home>" <?php post_class(); ?>>

	<div class="entry-content x-bg-dark ">
		<?php
		$args = array(
			'post_type'      => 'product',
		);

		$loop = new WP_Query($args);
		?>

		<div class="container-fluid">
        <div class="row">
        <div class="col-md-6">
            <div id="productCarousel" class="product-carousel">
		<?php foreach (get_field('gallery') as $image): ?>
                <div class="product-carousel__item">
                    <img src="<?=$image['url']?>" class="product-carousel__image">
                </div>
		<?php endforeach; ?>
            </div>
        </div>
        <div class="col-md-6">
        
        <h2 class=""><?= the_title() ?></h2>
        </div>
        </div></div>
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