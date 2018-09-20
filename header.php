<!DOCTYPE html>
<html lang="pt">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?php wp_title('-',true,'right'); bloginfo(); ?></title>

	<link rel="shortcut icon" href="<?php bloginfo( 'template_directory' ); ?>/assets/images/logo1.png" type="image/x-icon">

	<?php wp_head(); ?>

	<div id="fb-root"></div>
		<script>(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = 'https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v3.1';
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>
		</head>

<body>

	<div class="menu_principal">

			<nav class="navbar navbar-expand-lg navbar-light bg-light">

				<div class="container">

					  <a class="navbar-brand" href="#"><img src="<?php bloginfo('template_directory'); ?>/assets/images/logo1.png" width="35" height="35" class="d-inline-block align-top" alt="logo do CEM">&nbsp&nbspPortal do CEM</a>

					  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">

			    		<span class="navbar-toggler-icon"></span>

					  </button>

					  <div class="collapse navbar-collapse" id="navbarSupportedContent">
					    <ul class="navbar-nav ml-auto">
					      
					<?php
					wp_nav_menu( array(
						'theme_location'    => 'primary',
						'depth'             => 2,
						'container'         => 'div',
						'container_class'   => 'collapse navbar-collapse',
						'container_id'      => 'bs-example-navbar-collapse-1',
						'menu_class'        => 'nav navbar-nav',
						'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
						'walker'            => new WP_Bootstrap_Navwalker(),
					) );
					?>

					    </ul>
					  </div>
			  	</div>
			</nav>
	</div>