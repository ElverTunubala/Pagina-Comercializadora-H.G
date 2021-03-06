<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>
	<body <?php body_class(); ?>>

	        <!-- header -->
			<header class="header clear" role="banner">
			   <div class="navegacion clear">

			      <div class="wrapper">

					  <!-- logo -->
					  <div class="logo">
						   <a href="<?php echo home_url(); ?>">
							  <img src="https://res.cloudinary.com/medellin/image/upload/v1635189301/hugos/logo_yl1ob9.png" alt="Logo" class="logo-img">
							</a>
					  </div>
					  <!-- /logo -->
                      
					  <!-- nav -->
					  <nav class="nav" role="navigation">
						  <?php html5blank_nav(); ?>
					  </nav>
					  <!-- /nav -->
					  <div class="buscador">
					       <?php get_template_part("searchform"); ?>
					  </div>
					  
                  </div> <!-- wrapper -->
			   </div> <!--Navegacion -->

			 <?php if(is_page() ) { ?>
               <?php $destacada = wp_get_attachment_image_src( get_post_thumbnail_id(), "full"); ?>
			   <?php $destacada = $destacada[0]; ?>

			   <div class="imagenFondo" style="background-image:url(<?php echo $destacada ?>);"></div>
			 <?php } ?>

			 <?php if(is_single() ) { ?>
               <?php $destacada = wp_get_attachment_image_src( get_post_thumbnail_id(), "full"); ?>
			   <?php $destacada = $destacada[0]; ?>

			   <div class="imagenFondo" style="background-image:url(<?php echo $destacada ?>);"></div>
			 <?php } ?>

			</header>
			<!-- /header -->
			<div class="lo">
						   <a  href="https://api.whatsapp.com/send?phone=573116476502&text=hola%2C%20!!!%0Aestoy%20interesado%20en%20saber%20de%20este%20producto%20.....%20" target="_blank">
							  <img src="https://res.cloudinary.com/medellin/image/upload/v1637779239/hugos/logowasap_mccd4s.png" alt="Logo" class="log">
						   </a>
						   <a  href="https://www.instagram.com/cigarreriahugos/?hl=es" target="_blank">
							  <img src="https://res.cloudinary.com/medellin/image/upload/v1637779795/hugos/logoinstagram_fhdref.png" alt="Logo" class="logoi">
						   </a>
						   <a  href="https://www.facebook.com/cigarreria.hugos.3" target="_blank">
							  <img src="https://res.cloudinary.com/medellin/image/upload/v1637779906/hugos/logoface_zmkkgf.png" alt="Logo" class="logof">
						   </a>
			</div>
			

			

            <!-- wrapper -->
			<div class="wrapper">
