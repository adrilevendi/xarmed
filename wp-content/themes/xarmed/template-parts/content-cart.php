<?php
if(!is_user_logged_in()) {
    $prod_ids = $_SESSION['cart'];
} else {
    $prod_ids = get_user_meta(get_current_user_id(), 'cart' );

}
$products = get_posts( array(
    'post__in' => $prod_ids,
    'post_type' => 'product'
));
// var_dump($products);

?>
<article id="page-cart" <?php post_class(); ?>>

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
                <h2 class="product-title"><?= the_title() ?></h2>
				</div>

			</div>
			<div class="pb-5"></div>
            <div class="col-md-12">
            <table class="table cart-table">
					<thead>
                    <th></th>
                    <th>Emri</th>
                    <th>QTY</th>
                    </thead>
						<tbody>
                        <?php foreach($products as $i => $product): ?>
							<tr>
                            <td></td>
                            <td>
								<?php echo $product->post_title ?>

                            </td>
                            <td></td>
							</tr>
						<?php endforeach; ?>
						</tbody>
					</table>
            </div>
			<div class="pb-5"></div>
<div class="col-md-12 pb-5 text-right">
<form action="<?php echo site_url() ?>/wp-admin/admin-ajax.php" id="addToCartForm">
						<input type="hidden" name="action" value="add_to_cart">
						<input type="hidden" name="product_id" value="<?= the_ID(); ?>">
						<button class="btn btn-secondary mt-4" id="addToCartBtn">CHECKOUT</button>
						</form>
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

<script>
    $(document).ready(function() {

	});

</script>