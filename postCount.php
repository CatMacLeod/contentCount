
<?php

 /* Template Name: Content Count */ 

 get_header(); 
 
 ?>

<div class="wrap">
<h1>Content Count</h1>
<h5><b>This table represents a data-driven application that accesses database values fetched
    by a built in wordPress function.</b></h5>
<?php
    
  require('wp-load.php');  
  
  //wp_count_posts() returns an object whose properties are the count of each post status of a post type
  $count_posts = wp_count_posts();
  $published_posts = $count_posts->publish;
  
  $count_posts = wp_count_posts('page');
  $published_pages = $count_posts->publish;
  
  //Table structure outputting WP site data:
  echo "<table border='1'>";
      echo "<tr>";
          echo "<th>Post Count</th>";
          echo "<th>Page Count</th>";
      echo "</tr>";
          echo "<td>";
              echo $published_posts;
          echo "</td>";
          echo "<td>";
              echo $published_pages;
          echo "</td>";
  
  echo "</table>";
  
  makeTable('post');
  makeTable('page');
?>

</div><!-- .wrap -->

<?php 
    get_footer();
 
