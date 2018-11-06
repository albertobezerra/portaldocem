<?php get_header(); ?>

<div class="galerias">

	<div class="texto-titulo-da-galeria"><center><h3>Galerias do CEM</h3></center></div>


	<div class="container">
		<div class="row">

			<?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; ?> 
			<?php query_posts("category_name=galeria&showposts=3&paged=$paged"); ?> 
			<?php while(have_posts()) : the_post(); ?>

				<div class="col-md-4 col-lg-4 espacodagaleria">
				
					<div class="card">
						  <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(false, array('class'=>'card-img-top')); ?></a>

						  <a class="linkdagaleria" href="<?php the_permalink(); ?>"><div class="card-body">
						    <h5 class="card-title"><?php the_title(); ?></h5>
						    <p class="card-text"><?php the_excerpt(); ?></p>
						  </div></a>
			   		</div>
				
				
				</div>
			<?php endwhile; ?>
		  
		  </div>


		<div class="container container-custom"><?php echo paginate_links(); ?></div>


	</div>
</div>


<?php get_footer(); ?>