<?php
    /**
    * Template Name: Boots
    */
?>  
<?php get_header(); ?>

<div class="newStock">
   Check Out Our Selection Of Boots!
</div>

 <div class="product">
<?php
    $args = array(
        'post_type' => 'product',
        'posts_per_page' => 24,
        'product_cat' => 'Boots'
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