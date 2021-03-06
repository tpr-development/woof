<?php
/**
 * Single
 *
 * @package WordPress
 * @subpackage Visual Composer Starter
 * @since Visual Composer Starter 1.0
 */

get_header();
// Start the loop.
while ( have_posts() ) :
	the_post();
?>
<div class="<?php echo esc_attr( vct_get_content_container_class() ); ?>">
	<div class="content-wrapper marT90">
		<div class="row">
			<div class="col-md-12">
				<div class="main-content">
					<article class="entry-full-content">
						<div class="row">
							<div class="<?php echo esc_attr( vct_get_maincontent_block_class() ); ?>">
								<!-- <div class="col-md-2">
									<?php
										//get_template_part( 'template-parts/biography' );
									?>
								</div> --><!--.col-md-2-->
								<div class="col-md-12">
									<?php
									//visualcomposerstarter_single_meta();
									get_template_part( 'template-parts/content', 'single' );

									?>
								</div><!--.col-md-10-->
							</div><!--.<?php echo esc_html( vct_get_maincontent_block_class() ); ?>-->
							<?php if ( vct_get_sidebar_class() ) : ?>
								<?php get_sidebar(); ?>
							<?php endif; ?>
						</div><!--.row-->
					</article><!--.entry-full-content-->
				</div><!--.main-content-->
			</div>
		</div><!--.row-->
	</div><!--.content-wrapper-->
</div><!--.<?php echo esc_html( vct_get_content_container_class() ); ?>-->
<?php /*if ( comments_open() || get_comments_number() ) {
	comments_template();
}*/
// End of the loop.
endwhile;
get_footer();
