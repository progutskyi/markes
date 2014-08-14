<?php get_header(); ?>

	<div class="jumbotron white bg-darkred2">
		<div class="container">
			<h1>Lista prezentów <br><small class="white">Gdy nie wiadomo co podarować Młodym</small></small></h1>
		</div>
	</div>
	
	<div class="container"> 
		<div class="row">
			<div class="">
			
 				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			   
   			<?php the_content(); ?>

 				<?php endwhile; else: ?>

 				<?php endif; ?>
				
			</div>
		</div>
	</div>

<?php get_footer(); ?>