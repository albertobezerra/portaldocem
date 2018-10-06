<?php get_header(); ?>
<div class="agendacompleta">

	<div class="container">

	<div class="texto-titulo-da-galeria"><center><h3>Agenda do CEM</h3></center></div>

	<?php 
		$args = array('post_type'=>'page', 'pagename'=>'agenda');
		$my_agenda = get_posts( $args );
		if($my_agenda) : foreach($my_agenda as $post) : setup_postdata( $post );
	 ?>



	<?php the_content(); ?>

	 <?php
		    	endforeach;
		    	endif;
	     	?>


	</div>

</div>


<?php get_footer(); ?>