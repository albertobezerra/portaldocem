<?php get_header(); ?>

<div class="sobre">

	<div class="texto-titulo-da-galeria"><center><h3>Sobre o CEM</h3></center></div>	

			<div class="container">		

				<?php 
					$args = array('post_type'=>'page', 'pagename'=>'sobre');
					$my_sobre = get_posts( $args );
					if($my_sobre) : foreach($my_sobre as $post) : setup_postdata( $post );
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