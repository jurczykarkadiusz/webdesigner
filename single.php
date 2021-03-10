<?php get_header(); ?>
<section id="bg-top">
	<div class="container">
    <?php
if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
the_post_thumbnail( 'full' );
}
?>
</div>
</section>
<section id="psp">
<div class="container psp-heading text-center">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
		<h3 class="psph" data-aos="zoom-in">
        <?php the_title(); ?>
		</h3>
		<script>
			AOS.init({
				duration: 1200,
				delay: 150,
			})
		</script>
    <b><?php echo get_the_date(); ?></b> | <font color='#0d64bd'><?php the_author_meta('display_name', 1); ?></font>
    <div><?php  
    echo nl2br("\n");  
?></div>  
        	<p data-aos="zoom-in-right">
                <?php the_content(); ?>
</p>
		<script>
			AOS.init({
				duration: 1800,
				delay: 120,
			})
		</script>
<?php if (have_posts()) : while (have_posts()) : the_post();

/* post template defined on custom fields? */
$post_layout = get_post_meta($post->ID, 'gabfire_post_template', true);

/* Any subtitle entered to post? */
$subtitle = get_post_meta($post->ID, 'subtitle', true);
?>
 

<?php
/* Call user defined post template */
/*if ($post_layout == 'bigpicture') {
get_template_part( 'single', 'bigpicture' );

} elseif ($post_layout == 'fullwidth') {
get_template_part( 'single', 'fullwidth' );

} elseif ($post_layout == 'leftsidebar') {
get_template_part( 'single', 'leftsidebar' );

} else {
get_template_part( 'single', 'default' );
} */
?>
<?php endwhile; else : endif; ?>
</section>
<section id="comments1"><?php comments_template( '/short-comments.php' ); ?>       <?php
          setPostViews(get_the_ID());
?>
      </div>
</section>
     <?php get_footer(); ?>