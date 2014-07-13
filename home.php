<?php get_header(); ?>

	<div class="jumbotron white bg-darkred2">
		<div class="container">
			<h1>Aktualności<br>
			<small class="white">Najnowsze informacje, które warto znać</small></h1>
		</div>
	</div>
	
	<div class="container">
		<div class="row">
			<div class="col-md-8">
			
 				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			   <div class="page-header"><h1 style="color:#F05656"><?php the_title(); ?></h1></div>
   			<?php the_content(); ?>

 				<?php endwhile; else: ?>

 				<?php endif; ?>
				
			</div>
		</div>
	</div>

<?php get_footer(); ?>