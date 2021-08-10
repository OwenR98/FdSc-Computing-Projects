<head>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> <!-- this is a link to the bootstrap style sheet -->
   <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">
   <title>Assignment 1 2020 Webdev</title> <!-- this is the title that will show in the tab -->
</head>
<body style="background-color:grey;color:black;"> <!-- this is the body tag all of the items on the page will show up between these tags -->
   <div class="main"> <!-- this is the beggining of the navigattion boot strap bar -->
   </div>
   <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">MadNews</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#" onclick="window.location.href = 'http://localhost/home-page/';">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#" onclick="window.location.href = 'http://localhost/contact-us/';">Contact Us</a>
      </li>
	  <li class="nav-item active">
        <a class="nav-link" href="#" onclick="window.location.href = 'http://localhost/about-us/';">About Us</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          News Catagories
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#" onclick="window.location.href = 'http://localhost/category/news/sport/';">Sports News</a>
          <a class="dropdown-item" href="#" onclick="window.location.href = 'http://localhost/category/news/international/';">International News</a>
          <a class="dropdown-item" href="#" onclick="window.location.href = 'http://localhost/category/news/crime/';">Crime News</a>
		  <a class="dropdown-item" href="#" onclick="window.location.href = 'http://localhost/category/news/weather/';">Weather news</a>
        </div>
      </li>
    </ul>
    <a class="example"><?php get_search_form(); ?></a>
  </div>
</nav> <!-- this is the end of the navigation bootstrap bar -->
   <div class="jumbotron" style= "border-bottom:0;margin-bottom:0;padding: 2rem 2rem;border-style: solid;border-color: black;"> <!-- beginning of the bootstrap jumbotron -->
      <h1 class="display-4">Welcome To MadNews, The Uk's Most Popular News Online Platform</h1>
      <p class="lead"> Here at MadNews We believe in giving you the most accurate and up to date information, this is why we are the UK's top news platform</p>
      <hr class="my-4">
   </div> <!-- the end of the bootstrap jumbotron -->
   <div id="carouselExampleControls" class="carousel slide" data-ride="carousel"> <!-- this is the beggining of the bootstrap carousel -->
      <div class="carousel-inner" style="position:relative;top:0;left:;">
         <div class="carousel-item active" style="position:relative;top:0;left:;">
            <img src="/wp-content/themes/assignment12020/images/image1.jpg" class="d-block w-100" alt="">
         </div>
         <div class="carousel-item">
            <img src="/wp-content/themes/assignment12020/images/image2.jpg" class="d-block w-100" alt="...">
         </div>
         <div class="carousel-item">
            <img src="/wp-content/themes/assignment12020/images/image3.jpg" class="d-block w-100" alt="...">
         </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true" style="position:relative;top:-50;left:;"></span>
      <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true" style="position:relative;top:-50;left:;"></span>
      <span class="sr-only">Next</span>
      </a>
   </div> <!-- this is the end of the carousel -->
   <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script> <!-- bootstrap implimented javascript -->
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
   <div class="footer"> you are on your selected catagory page, enjoy! <?php echo date("d/m/Y h:i A", time()); ?></div> <!-- this is the footer which will stick to the bottom of the page -->
   <br>
   <!-- beginning of the wordpress loop which pulls the posts and content -->
   <?php 
      if ( have_posts() ) {
      while ( have_posts() ) {
      the_post(); 
      //
      
      $key_1_value = get_post_meta( get_the_ID(), 'img', true );
       // Check if the custom field has a value.
             ?>                    
   <?php
      the_content();
      //
      } // end while
      } // end if
      ?>
	  <!-- end of the wordpress loop which pulls the posts and content -->
   </a>