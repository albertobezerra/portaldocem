<?php get_header(); ?>

<div class="filosofia01">

	<div class="texto-titulo-da-galeria"><center><h3>Filosofia Pedagógica</h3></center></div>	

			<div class="container">		

				<?php 
					$args = array('post_type'=>'page', 'pagename'=>'filosofia');
					$my_filosofia = get_posts( $args );
					if($my_filosofia) : foreach($my_filosofia as $post) : setup_postdata( $post );
				 ?>

					<?php the_content(); ?>

				 <?php
			    	endforeach;
			    	endif;
		     	?>

	     	</div>

		
	</div>

</div>


<?php get_footer(); ?>