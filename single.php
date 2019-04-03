<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Document sans nom</title>
</head>

<body>
<?php get_header(); ?>
<div class="row">
<div class="col-sm-12"> <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
get_template_part( 'content-single', get_post_format() );
if ( comments_open() || get_comments_number() ) : comments_template();
endif; endwhile; endif;?>
</div> <!-- /.col -->
</div> <!-- /.row -->
<?php get_footer(); ?>
</body>
</html>
