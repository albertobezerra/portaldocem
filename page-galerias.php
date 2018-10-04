<?php get_header(); ?>

<div class="galerias">

			<div class="container">

				<div class="card-deck">

					<?php 
						$args = array('post_type'=>'post', 'category_name'=>'galeria', 'showposts'=> '4');
						$my_posts = get_posts( $args );
						if($my_posts) : foreach($my_posts as $post) : setup_postdata( $post );
					 ?>
			
				
			   		<div class="card">
						  <?php the_post_thumbnail(false, array('class'=>'card-img-top')); ?>
						  <div class="card-body">
						    <h5 class="card-title"><?php the_title(); ?></h5>
						    <p class="card-text"><?php the_excerpt(); ?></p>
						  </div>
			   		</div>

			   		<?php
				    	endforeach;
				    	endif;
			     	?>
			</div>
		</div>


<?php get_footer(); ?>