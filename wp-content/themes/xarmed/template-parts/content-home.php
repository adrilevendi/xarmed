<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package xarmed
 */

?>

<article id="post-home>" <?php post_class(); ?>>

	<div class="entry-content x-bg-dark ">

	<div class="xcarousel__container">
		<div class="xcarousel__inner">
		<div class="xcarousel__item">
			<img src="http://xar.med/wp-content/uploads/2020/10/gun_PNG1390-1.png" alt="" class="xcarousel__image">
			<h1 class="xcarousel__model">Glock 9-13A</h1>
		</div>
		<div class="xcarousel__item">
			<img src="http://xar.med/wp-content/uploads/2020/10/pngfuel.png" alt="" class="xcarousel__image">
			<h1 class="xcarousel__model">Glock 9-13A</h1>
		</div>
		<div class="xcarousel__item">
			<img src="http://xar.med/wp-content/uploads/2020/10/gun_PNG1390-1.png" alt="" class="xcarousel__image">
			<h1 class="xcarousel__model">Glock 9-13A</h1>
		</div>
		<div class="xcarousel__item">
			<img src="http://xar.med/wp-content/uploads/2020/10/gun_PNG1390-1.png" alt="" class="xcarousel__image">
			<h1 class="xcarousel__model">Glock 9-13A</h1>
		</div>
		<div class="xcarousel__item">
			<img src="http://xar.med/wp-content/uploads/2020/10/gun_PNG1390-1.png" alt="" class="xcarousel__image">
			<h1 class="xcarousel__model">Glock 9-13A</h1>
		</div>
		</div>
	</div>
		<?php
		the_content();

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'xarmed' ),
				'after'  => '</div>',
			)
		);
		?>

        <!-- <h2><?=the_title()?></h2> -->
	</div><!-- .entry-content -->

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
			edit_post_link(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Edit <span class="screen-reader-text">%s</span>', 'xarmed' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					wp_kses_post( get_the_title() )
				),
				'<span class="edit-link">',
				'</span>'
			);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->
