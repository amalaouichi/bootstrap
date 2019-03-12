<!DOCTYPE html>
 <html lang="en">  
  <head>
    <meta charset="utf-8">  
	   <meta http-equiv="X-UA-Compatible" content="IE=edge">    
	    <meta name="viewport" content="width=device-width, initialscale=1">  
		   <meta name="description" content="">  
		      <meta name="author" content="">    
			    <?php echo get_bloginfo( 'name' ); ?> <br>
				<?php echo get_bloginfo( 'description' ); ?> 
				<h4>About</h4> <p><?php the_author_meta( 'description' ); ?> </p
				<a href="<?php bloginfo( 'wpurl' );?>"><!-- site title -></a> 
			      <link
href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstra
p.min.css" rel="stylesheet">
<link href="<?php bloginfo( 'template_directory' );?>/blog.css"
rel="stylesheet"> <!-- HTML5 shim and Respond.js for IE8 support of
HTML5 elements and media queries -->
 <!--[if lt IE 9]> <script
src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></sc
ript>
 <script
src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script
>
4
 <![endif]--> <?php wp_head();?>
 </head>
