<?php
/**
 *  The template for displaying WooCommerce.
 *
 *  @package WordPress
 *  @subpackage illdy
 */
?>
<?php get_header(); ?>
<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<section id="blog">
				<?php woocommerce_content(); ?>
			</section><!--/#blog-->
		</div>
	</div><!--/.row-->
</div><!--/.container-->
<?php get_footer(); ?>
