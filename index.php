<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package underscore
 */
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon WP</title>
    <style>
        body{
	font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;

}
h1{
	background-color: aqua;
	color: bisque;
	font-size: 2rem;
}
    </style>
</head>
<body>
    <main>
        test
        <?php
            if ( have_posts() ) :
                while ( have_posts() ) :
                    the_title('<h1>','</h1>');
                    the_content(null,true);
				    the_post();
                endwhile;
            endif;
        ?>
    </main>
</body>
</html>