<?php get_header(); ?>
	<div class="row">
<?php global $post; $args = array( 'numberposts' => 10, 'cat' => 5); $myposts = get_posts( $args ); foreach( $myposts as $post ) : setup_postdata($post); ?>

		<?php the_content(); ?>

<?php endforeach; ?>
	</div>

<?php get_footer(); ?>