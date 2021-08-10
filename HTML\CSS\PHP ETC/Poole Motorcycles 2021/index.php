
<?php
   get_header();
   ?>

<div class="community">
   <div class ="communitydiv">
      <div class="JCST">
      PM Community Posts: 
      
         <?php
            $args = array( 'post_type' => 'product', 'stock' => 1, 'posts_per_page' => 3, 'orderby' =>'date','order' => 'DESC','tax_query' => array( array(
               'taxonomy' => 'product_cat',
               'field' => 'id',
               'terms' => array( 87 ), // HERE the product category to 
               'operator' => 'IN',
            ) ),);
            $loop = new WP_Query( $args );
            while ( $loop->have_posts() ) : $loop->the_post(); global $product; 
            ?> <div> <a class="communityStyling" href="<?php the_permalink(); ?>"><u> <?php the_title(); ?> </u> </a> </div> <?php
            
         ?>

         <?php endwhile; ?>
         <?php wp_reset_query(); ?>

      </div>
   </div>
</div>

<script>
$(document).ready(function(){
			$('.customer-logos').slick({
				slidesToShow: 4,
				slidesToScroll: 1,
				autoplay: true,
				autoplaySpeed: 3000,
				arrows: false,
				dots: false,
					pauseOnHover: false,
					responsive: [{
					breakpoint: 768,
					settings: {
						slidesToShow: 3
					}
				}, {
					breakpoint: 520,
					settings: {
						slidesToShow: 2
					}
				}]
			});
		});
</script>
<div class="customer-logos">

  <div class="slide"><img src="http://www.poolemotorcycles.com/wp-content/uploads/2021/03/155199315_435439867668372_1058030584440530969_n.jpg"></div>
  <div class="slide"><img src="http://www.poolemotorcycles.com/wp-content/uploads/2021/03/155795624_789116345035652_3111260751596785862_n.jpg"></div>
    <div class="slide"><img src="http://www.poolemotorcycles.com/wp-content/uploads/2021/05/GIRL-ON-BIKE.jpg"></div>
  <div class="slide"><img src="http://www.poolemotorcycles.com/wp-content/uploads/2021/03/155489174_1078171549349696_3248426944946158859_n.jpg"></div>
  <div class="slide"><img src="http://www.poolemotorcycles.com/wp-content/uploads/2021/03/155102237_239074130994419_9184881478803175043_n.jpg"></div>
    <div class="slide"><img src="http://www.poolemotorcycles.com/wp-content/uploads/2021/05/FANTIC-scaled.jpg"></div>

</div>
<div id="section1" class="container-fluid">
<h1 style="margin-top:10px;"> <u>Welcome to Poole Motorcycles</u> </h1>   
<p>Established in 1982. We supply road bikes, scooters, adventure , off-road and pleasure bikes.
   We have a constantly changing stock of second hand motorcycles on display in our showroom.
   <br>
   <br>
   All motorcycles come with Road Tax and M.O.T. where applicable.Full workshop facilities are available in a dedicated premises at the rear of the showroom providing service, repair, repaint and M.O.T. testing.
   <br>
   <br>
   Our workshop staff are factory trained mechanics.We stock a wide range of motorcycle clothing, helmets, boots, gloves, leisure wear, motorcycle accessories and spare parts.</p>
</div>
<div >
   <img class = "homePagePhoto" src="http://www.poolemotorcycles.com/wp-content/uploads/2021/05/ANDY-HOME-PAGE-scaled.jpg"> </img>
</div>

<div class="newStock">
   Check Out Our Latest Stock!
</div>

<div class="product">
<?php
    $args = array( 'post_type' => 'product', 'stock' => 1, 'posts_per_page' => 4, 'orderby' =>'date','order' => 'DESC','tax_query' => array( array(
        'taxonomy' => 'product_cat',
        'field' => 'id',
        'terms' => array( 87,86 ), // HERE the product category to exclude
        'operator' => 'NOT IN',
    ) ),);
    $loop = new WP_Query( $args );
    while ( $loop->have_posts() ) : $loop->the_post(); global $product; 
	 woocommerce_get_template_part( 'content', 'product' );
?>
      
<?php endwhile; ?>
<?php wp_reset_query(); ?>

</div><!--row-->

<?php require("affiliates.php");?>
</div>

<?php get_footer(); ?>
