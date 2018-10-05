<?php get_header(); ?>

<div class="galerias">

	<div class="texto-titulo-da-galeria"><center><h3>Galerias do CEM</h3></center></div>


	<div class="container">
		<div class="row">



					<?php 
						$args = array('post_type'=>'post', 'category_name'=>'galeria', 'showposts'=> '10');
						$my_posts = get_posts( $args );
						if($my_posts) : foreach($my_posts as $post) : setup_postdata( $post );
					 ?>

				<div class="col-md-4 col-lg-4 espacodagaleria">
				
					<div class="card">
						  <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(false, array('class'=>'card-img-top')); ?></a>

						  <a class="linkdagaleria" href="<?php the_permalink(); ?>"><div class="card-body">
						    <h5 class="card-title"><?php the_title(); ?></h5>
						    <p class="card-text"><?php the_excerpt(); ?></p>
						  </div></a>
			   		</div>
				
				
				</div>
			
			 <?php
		    	endforeach;
		    	endif;
	     	?>
		  
		  </div>





	</div>
</div>


<?php get_footer(); ?>