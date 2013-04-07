<!doctype html>
<html>
<head>
	<title>My Page</title>
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri() ?>">
</head>
<body>
	<h1>Welcome to Kabir's Page</h1>
 <?php echo get_the_title();
;?> 


        <p>I am a senior, studying Economics and Web Technologies at USC. I will be graduating in May, so I better find a job!</p>
        <p>
            Maybe <a href="../wordpress/about" >this</a> will get me one.
        </p>
        <?php
query_posts('cat=1&posts_per_page=1');
if (have_posts()) : while (have_posts()) : the_post();
the_title();
the_content();
endwhile; endif;
the_meta();
?>

	
</body>
</html>