<!-- Implement php query to get and display header -->
<?php get_header(); ?>
<!-- Implement php query loop to check for posts -->
<?php
if (have_posts()) :
while (have_posts()) : the_post(); 
?>
<!-- Implement jumbotron class with text set to centre -->
<div class="single-product" 
  <!-- Implement display-4 class to display post title -->
  <h1>
    <?php the_title(); ?>
  </h1>
  <p>
  <!-- Implement php query to display contents of posts -->
<?php the_post_thumbnail(); ?>

<?php bbloomer_single_category_slug(); ?>

<br>

<?php echo $product->get_short_description(); ?></h2>

  </p>
</div>
<?php
//End loop
endwhile;
endif;
?>
<!-- Implement php query to get and display footer -->
<?php require("affiliates.php");?>
<?php get_footer(); ?>
