<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package xarmed
 */

?>

	<footer id="footer" class="site-footer">
	<div class="container-fluid">
	<div class="row">
		<div class="col-md-3 border-col py-md-4">
			<?php the_custom_logo(); ?>
			<p class="mt-3 pt-3">Rruga Vaso Pasha<br> Tiranë, Albania</p>
			<p class="mt-3 pt-3">
				<a href="tel:+355 69 28 68 969">+355 69 28 68 969</a>
			</p>
			<p class="mt-3 pt-3">
				<a href="mailto:hello@bonnle.al">hello@xarmed.al</a>
			</p>
		</div>

		<div class="col-md-9 py-md-4  mt-md-3">
			<div class="row">
				<div class="col-md-4 offset-md-1 mt-5 mt-md-0">
					<p class="font-weight-bold">Quick Links</p>
					<ul class=" list-unstyled mt-4">
						<li id="menuItem1" class="mb-2 pb-1"><a href="{{site.link}}">Home</a></li>
			<li id="menuItem2" class="mb-2 pb-1"><a href="{{site.link}}/#works">Projects</a></li>
			<li id="menuItem3"><a href="{{site.link}}/#cta">Contact</a></li>
					</ul>
				</div>
                <div class="col-md-4  mt-5 mt-md-0">
					<p class="font-weight-bold">Legal</p>
					<ul class=" list-unstyled mt-4">
						<li class="mb-2 pb-1">
							<a href="{{site.link}}/terms-and-conditions">Terms & Conditions</a>
						</li>
						<li>
							<a href="{{site.link}}/privacy-policy">Privacy Policy</a>
						</li>
					</ul>
				</div>
			</div>

		</div>
	</div>

</div>

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
