<?php
    /**
    * Template Name: Bikes
    */
?>  
<?php get_header(); ?>

<div class="newStock">
   Check Out Our Selection Of Bikes! Our stock is always changing so feel free to enquire!
</div>

 <div class="product">
 
<?php
    $args = array(
        'post_type' => 'product',
        'posts_per_page' => 24,
        'product_cat' => 'Bikes'
        );
    $loop = new WP_Query( $args );
    if ( $loop->have_posts() ) {
        while ( $loop->have_posts() ) : $loop->the_post();


            woocommerce_get_template_part( 'content', 'product' );
		
			
		
        endwhile;
		
    } else {
        echo __( 'No products found' );
    }

?>
		</div>
        <div>
<?php require("affiliates.php");?>
</div>
<?php get_footer(); ?>
