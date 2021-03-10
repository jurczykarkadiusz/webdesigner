<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage webdesigner
 * @since 1.0.0
 */
?>

<?php
get_header(); ?>
<section id="bloga">
<div class="container bloga-heading text-center">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
		<h3 class="blogh" data-aos="zoom-in">
        <?php the_title(); ?>
		</h3>
		<script>
			AOS.init({
				duration: 1200,
				delay: 150,
			})
		</script>
        	<p data-aos="zoom-in">
                <?php the_content(); ?>
</p>
		<script>
			AOS.init({
				duration: 1800,
				delay: 240,
			})
		</script>
        </div>
        </section>
<?php
/* Start the Loop */
while ( have_posts() ) :
	the_post();
	get_template_part( 'template-parts/content/content-page' );

	// If comments are open or there is at least one comment, load up the comment template.
	if ( comments_open() || get_comments_number() ) {
		comments_template();
	}
endwhile; // End of the loop.

get_footer();

?>