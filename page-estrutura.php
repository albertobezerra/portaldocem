<?php get_header(); ?>
<div class="estrutura">

	<div class="texto-titulo-da-galeria"><center><h3>Estrutura Escolar</h3></center></div>	

			<div class="container">		

				<?php 
					$args = array('post_type'=>'page', 'pagename'=>'estrutura');
					$my_estrutura = get_posts( $args );
					if($my_estrutura) : foreach($my_estrutura as $post) : setup_postdata( $post );
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