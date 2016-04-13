<?php get_header(); ?>

<?php if(($wp_query->query['pagename'] != 'imoveis') && ($wp_query->query['pagename'] != 'nossos-investimentos')): ?>
	<?php while(have_posts()): the_post(); ?>
     	<?php the_content(); ?>
	<?php endwhile; ?>
<?php else: ?>
	<?php $nome_pag = $wp_query->query['pagename']; query_posts("category_name=$nome_pag". "&orderby=date&order=ASC"); ?>
		<div class="row">
	<?php while(have_posts()): the_post(); ?>
	     	<div class="col-md-3">
				<div class="panel">
					<div class="panel-body texto-sobre">
						<a href="<?php the_permalink() ?>">
								<span class="span">
									<span style="font-size: 40px;" class="glyphicon glyphicon-ok"></span>
										<br>Disponível para: 2016/04/10<br>Lorem ipsum dolor sit amet, consectetur.
									</span>
								<center class="imagem-body"><?php the_post_thumbnail(); ?></center>
						</a>
					</div>
					<div class="panel-body body-imoveis">
						<h3><?php the_title(); ?></h3>
						<small></small>
					</div>
				</div>
			</div>
	<?php endwhile; ?>
		</div>
<?php endif; ?>

<?php get_footer(); ?>
