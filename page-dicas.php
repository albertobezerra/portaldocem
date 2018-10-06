<?php get_header(); ?>
<div class="dicascompletas">

	<div class="texto-titulo-da-galeria"><center><h3>Dicas do CEM</h3></center></div>	

			<div class="container">		

				<?php 
					$args = array('post_type'=>'page', 'pagename'=>'dicas');
					$my_dicas = get_posts( $args );
					if($my_dicas) : foreach($my_dicas as $post) : setup_postdata( $post );
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