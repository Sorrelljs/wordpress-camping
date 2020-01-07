<!DOCTYPE html>
<html>
   <head>
      <meta charset="<?php bloginfo( 'charset' ); ?>">
      <title>red_theme</title>

      <link rel="stylesheet" href="style.css" />
   </head>
   <body>
      <h1 class="site-title"><?php bloginfo( 'name' ); ?></h1>
      <p class="description"><?php bloginfo( 'description' ); ?></p>

      <!-- Maybe we could loop some posts here too? -->
      <?php 
         if ( have_posts() ) {
            while ( have_posts() ) {
               the_post();
               the_title();
               the_content();
               //
               // Post Content here
               //
            } // end while
         } // end if
      ?>
   </body>
</html>
