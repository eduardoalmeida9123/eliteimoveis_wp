<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<div class="row">
		<div class="col-md-6">
			<div class="panel sem-borda">
				<div class="panel-body"><?php the_post_thumbnail(); ?></div>
			</div>
			<div class="panel-body">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3731.7502101405826!2d-46.614014885405254!3d-20.720365568721185!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94b6c3ca133b0943%3A0x504e307d533ff748!2sElite+Im%C3%B3veis!5e0!3m2!1spt-BR!2sbr!4v1460299932473" frameborder="0" width="100%" height="240" style="border:0" allowfullscreen></iframe>
</div>
		</div>
		
		<div class="col-md-6 color-white">
			<blockquote><?php the_title(); ?></blockquote>
				<p class="text-justify"><?php the_content(); ?></p></p>
		</div>
		<div class="col-md-3">
			
		</div>
	</div>

<?php endwhile; else: ?>
           
<?php endif; ?>

<?php get_footer(); ?>
