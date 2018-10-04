<?php get_header(); ?>

<div class="slider">
	
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">


				  <ol class="carousel-indicators">

				  	<?php 
						$args = array('post_type'=>'slider', 'showposts'=>5);
						$my_slider = get_posts( $args );
						$count = 0 ; if($my_slider) : foreach($my_slider as $post) : setup_postdata( $post );
					 ?>
				    <li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $count; ?>" <?php if($count == 0): ?> class="active"<?php endif; ?>></li>
					<?php
						$count ++ ;
				    	endforeach;
				    	endif;
				     ?>
				  </ol>


		  	 	<center><div class="carousel-inner">

					<?php 
						$cont = 0 ; if($my_slider) : foreach($my_slider as $post) : setup_postdata( $post );
					 ?>

				    <div class="carousel-item <?php if($cont == 0) echo "active"; ?>">
				      <?php the_post_thumbnail('resize')?>
				    </div>


				    <?php
				    	$cont ++ ;
				    	endforeach;
				    	endif;
	     			?>

		  		</div></center>


				  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
				    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
				    <span class="sr-only">Previous</span>
				  </a>
				  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
				    <span class="carousel-control-next-icon" aria-hidden="true"></span>
				    <span class="sr-only">Next</span>
				  </a>
		
			</div>
	
</div>

<div class="banner">

	<div class="container">
	
	<img  src="<?php bloginfo('template_directory'); ?>/assets/images/banner.jpg" class="tamanho-banner rounded">

	</div>

</div>

<div class="titulo-dicas">
	<div class="container">

		<ul class="nav">
		  <li class="nav-item nav-item-dicas">
		    Dicas do CEM
		  </li>
		</ul>
	</div>

</div>

<div class="cards">
	
	<div class="container">

		<div class="card-deck">

			<?php 
				$args = array('post_type'=>'post', 'category_name'=>'dicas', 'showposts'=> '3');
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

	  	<div class=" espacobtn">

	  	<a href="dicas"><button type="button" class="btn-primary-custom">+ dicas</button></a>

	  	</div>

	</div>


</div>


<div class="agendaeaulasextra">
	

	<div class="container">
  		<div class="row">



		<div class="col-sm espacoentre">

				<ul class="nav">
				  <li class="nav-item nav-item-agenda">
				    Agenda do CEM
				  </li>
				</ul>

				Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in 

				<div class="espacobtn">

				<a href="agenda"><button type="button" class="btn-primary-custom1">Agenda completa</button></a>

				</div>



		</div>



  		<div class="col-sm">


				<ul class="nav">
				  <li class="nav-item nav-item-dicas">
				    Aulas Extracurrículares
				  </li>
				</ul>

				<div class="caroseldasaulas">
						<div id="caroseel01" class="carousel slide" data-ride="carousel">
						
						  <ol class="carousel-indicators">
						    <li data-target="#caroseel01" data-slide-to="0" class="active"></li>
						    <li data-target="#caroseel01" data-slide-to="1"></li>
						    <li data-target="#caroseel01" data-slide-to="2"></li>
						  </ol>
						  	 <div class="carousel-inner ">
						    <div class="carousel-item active">
						      <img class="d-block w-100 rounded" src="<?php bloginfo( 'template_directory' ); ?>/assets/images/01.jpg" alt="First slide">
						    </div>
						    <div class="carousel-item">
						      <img class="d-block w-100 rounded" src="<?php bloginfo( 'template_directory' ); ?>/assets/images/02.jpg" alt="Second slide">
						    </div>
						    <div class="carousel-item">
						      <img class="d-block w-100 rounded" src="<?php bloginfo( 'template_directory' ); ?>/assets/images/03.jpg" alt="Third slide">
						    </div>
						  </div>
						  <a class="carousel-control-prev" href="#caroseel01" role="button" data-slide="prev">
						    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
						    <span class="sr-only">Previous</span>
						  </a>
						  <a class="carousel-control-next" href="#caroseel01" role="button" data-slide="next">
						    <span class="carousel-control-next-icon" aria-hidden="true"></span>
						    <span class="sr-only">Next</span>
						  </a>
		
					</div>
				</div>

  			
  		</div>


  </div>

</div>

<div class="galeriadeimagens">
	
	<div class="container">


		<ul class="nav">
		  <li class="nav-item nav-item-galerias">
		    Galerias do CEM
		  </li>
		</ul>

	</div>


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
	  	<div class="espacobtn">
	  	<a href="galerias"><button type="button" class="btn-primary-custom2">+ galerias</button></a></div>
	</div>


</div>


<?php get_footer(); ?>