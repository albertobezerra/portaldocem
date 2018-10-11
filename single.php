<?php get_header(); ?>
<div class="post">
	<div class="container">

			<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
				<center><h3><?php the_title(); ?></h3></center></br>
				<?php the_content(); ?>
			<?php endwhile; endif; ?>

	</div>
</div>




<?php get_footer(); ?>